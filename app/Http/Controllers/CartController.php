<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Http\Response;
use DB;
use App\Quotation;
use App\BookTable;
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
        if (Session::has($dish_id)) {
            //echo 'tt';
            $value = Session::get($dish_id);
           // echo $value;
            $value = $value + 1;
            Session::put($dish_id, $value);
        } else {
            Session::put($dish_id, 1);
        }
      //  echo Session::get($dish_id);
        //Session::flush();
    }

}
