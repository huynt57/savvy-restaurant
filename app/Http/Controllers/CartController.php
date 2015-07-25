<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Http\Response;
use DB;
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
        Session::put('cart', 'true');
        if (Session::has($dish_id)) {
            //echo 'tt';
            $value = Session::get($dish_id);
            // echo $value;
            $value++;
            Session::put($dish_id, $value);
        } else {
            Session::put($dish_id, 1);
        }
        //  echo Session::get($dish_id);
        Session::flush();
    }

    public function addCartWithNumber(Request $request) {
        $dish_id = \StringHelper::filterString($request->input('dish_id'));
        $number = \StringHelper::filterString($request->input('number'));
        if (Session::has($dish_id)) {
            //echo 'tt';
            $value = Session::get($dish_id);
            // echo $value;
            $value+=$number;
            Session::put($dish_id, $value);
        } else {
            Session::put($dish_id, $number);
        }
    }

    public function removeItemFromCart(Request $request) {
        $dish_id = \StringHelper::filterString($request->input('dish_id'));
        Session::forget($dish_id);
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
