<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Response;
use DB;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Order;
use App\OrderDetail;

//use Illuminate\Support\Facades\Session;

class CartController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        //
    }

    public function addCart(Request $request) {
        $dish_id = \StringHelper::filterString($request->input('dish_id'));
        $dish = DB::table('dish')->where('dish_id', $dish_id)->first();
        $dish_name = $dish->dish_name;
        $dish_price = $dish->dish_price;
        Cart::add(array('id' => $dish_id, 'name' => $dish_name, 'qty' => 1, 'price' => $dish_price));
        //
    }

    public function addCartWithNumber(Request $request) {
        $dish_id = \StringHelper::filterString($request->input('dish_id'));
        $number = \StringHelper::filterString($request->input('number'));
        $dish = DB::table('dish')->where('dish_id', $dish_id)->first();
        $dish_name = $dish->dish_name;
        $dish_price = $dish->dish_price;
        Cart::add(array('id' => $dish_id, 'name' => $dish_name, 'qty' => $number, 'price' => $dish_price));
    }

    public function removeItemFromCart(Request $request) {
        $dish_id = \StringHelper::filterString($request->input('dish_id'));
        $rowids = Cart::search(array('id' => $dish_id));
        foreach ($rowids as $key => $value) {
            Cart::remove($value);
        }
    }

    public function checkOut(Request $request) {
        $address = \StringHelper::filterString($request->input('address'));
        $name = \StringHelper::filterString($request->input('name'));
        $content = \StringHelper::filterString($request->input('comments'));
        $phone = \StringHelper::filterString($request->input('phone'));

        if ($phone != "" && $name != "" && $content != "") {
            $order = new Order;
            $order->order_name = $name;
            $order->status = 1;
            $order->active = 1;
            $order->order_comment = $content;
            $order->order_address = $address;
            $order->order_phone = $phone;
            $order->save();

            $cart = Session::all();
            foreach ($cart as $key => $value) {
                if ($key != 'flash' && $key != '_previous' && $key != '_token') {
                    $order_detail = new OrderDetail;
                    $order_detail->dish_id = $key;
                    $order_detail->dish_number = $value;
                    $order_detail->order_id = $order->id;
                    $order_detail->save();
                }
            }
            Session::flush();
            //echo 'test';
            // die();
        }
        return Redirect::to(url('menu'))->with('message', 'Order Success !. You can continue buy now !');
    }

}
