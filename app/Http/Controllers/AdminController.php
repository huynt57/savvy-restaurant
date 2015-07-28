<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\DishController;
use App\Http\Controllers\OrderController;

class AdminController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        //
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
