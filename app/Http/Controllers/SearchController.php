<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class SearchController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request) {
        $query = \StringHelper::filterString($request->input('query'));
        $result = DB::select("select * from tbl_dish JOIN tbl_category_dish ON tbl_dish.dish_id = tbl_category_dish.dish_id "
                        . "JOIN tbl_category ON tbl_category_dish.category_id = tbl_category.category_id "
                        . "WHERE tbl_dish.dish_name LIKE '%" . $query . "%'");
        
        return view('search/index', array('result' => $result));
    }

}
