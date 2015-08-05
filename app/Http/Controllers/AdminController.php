<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\DishController;
use App\Http\Controllers\OrderController;
use Session;
use Redirect;

class AdminController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function __construct() {

       // $this->middleware('admin');
    }

    public function index() {
        
    }

    public function login() {

        return view('admin/login');
    }

    public function logout() {
        Session::forget('admin');
        return view('admin/login');
    }

    public function processAdminLogin(Request $request) {
        $uname = \StringHelper::filterString($request->input('uname'));
        $upw = \StringHelper::filterString($request->input('upw'));

        if ($uname == 'admin' && $upw == 'admin') {
            Session::put('admin', 'admin');
            return Redirect::to(url('admin/dish'))->with('message', 'Login success');
        } else {
            return Redirect::to(url('admin/login'))->with('message', 'Something Wrong :(');
        }
    }

    public function dishAdmin() {
        $dishes = DishController::listDishAdmin();
        return view('admin/dish/index', array('dishes' => $dishes));
    }

    public function categoryAdmin() {
        return view('admin/category');
    }

    public function orderAdmin() {
        $orders = OrderController::listOrderAdmin();
        return view('admin/order/index', array('orders' => $orders));
    }

    public function contactAdmin() {
        return view('admin/contact');
    }

    public function tableAdmin() {
        return view('admin/table');
    }

    public function userAdmin() {
        return view('admin/user');
    }

    public function dishCategoryAdmin() {
        return view('admin/dishCategory');
    }

}
