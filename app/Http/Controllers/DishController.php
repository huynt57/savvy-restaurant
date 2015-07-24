<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Quotation;
use App\Dish;
use Illuminate\Http\Request;

class DishController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        //
    }

    public function listDishByCategory(Request $request) {
        $category_id = \StringHelper::filterString($request->input('id'));
        $results = DB::select('select * from tbl_dish JOIN tbl_category_dish ON tbl_dish.dish_id = tbl_category_dish.dish_id '
                        . 'JOIN tbl_category ON tbl_category_dish.category_id = tbl_category.category_id '
                        . 'WHERE tbl_category_dish.category_id = :category_id', ['category_id' => $category_id]);
        return $results;
    }

    public function DishDetail(Request $request) {
        $dish_id = \StringHelper::filterString($request->route('dish_id'));
        $dish = DB::table('dish')->where('dish_id', $dish_id)->first();
        return view('dish/detail', array('dish' => $dish));
    }

}