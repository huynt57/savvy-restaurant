<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use DB;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Order;
use App\OrderDetail;
use Response;

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

    public function getCartAjax() {
        $cart = Cart::content();
        $count = Cart::count();
        $total = Cart::total();

        return Response::json(array('content' => $cart, 'count' => $count, 'total' => $total));
    }
    
    public function updateCartAjax(Request $request) {
        $dish_id = $request->input('dish_id');
        $number = $request->input('number');
        
       $rowids =  Cart::search(array('id' => $dish_id));
       foreach ($rowids as $key => $value) {
            Cart::update($value, array('qty' => $number));
       }
       return Response::json(array('success' => TRUE));
    }

    public function checkOut(Request $request) {
        $address = \StringHelper::filterString($request->input('address'));
        $name = \StringHelper::filterString($request->input('name'));
        $content = \StringHelper::filterString($request->input('comments'));
        $phone = \StringHelper::filterString($request->input('phone'));
        $count = Cart::count();

        if ($phone != "" && $name != "" && $content != "" && $count > 0) {
            $order = new Order;
            $order->order_name = $name;
            $order->status = 1;
            $order->active = 1;
            $order->order_comment = $content;
            $order->order_address = $address;
            $order->order_phone = $phone;
            $order->save();

            $cart = Cart::content();
            foreach ($cart as $item) {
                $order_detail = new OrderDetail;
                $order_detail->dish_id = $item->id;
                $order_detail->dish_number = $item->qty;
                $order_detail->order_id = $order->id;
                $order_detail->save();
            }
            Cart::destroy();
            return Redirect::to(url('menu'))->with('message', 'Order Success !. You can continue buy now !');
        } else {
            return Redirect::to(url('checkout'))->with('message', 'Order Fail !. Something Wrong !');
        }
    }

}
