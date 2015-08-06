<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Quotation;
use App\Dish;
use Illuminate\Http\Request;
use Response;
use Input;
use App\DishCategory;

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

    public function getDishes(Request $request) {
        $page = \StringHelper::filterString($request->input('page'));
        $number = \StringHelper::filterString($request->input('number'));
        $offset = $page * $number - $number;
        $results = DB::select('select * from tbl_dish JOIN tbl_category_dish ON tbl_dish.dish_id = tbl_category_dish.dish_id '
                        . 'JOIN tbl_category ON tbl_category_dish.category_id = tbl_category.category_id LIMIT ' . $number . ' OFFSET ' . $offset);
        $num = DB::select('select * from tbl_dish JOIN tbl_category_dish ON tbl_dish.dish_id = tbl_category_dish.dish_id '
                        . 'JOIN tbl_category ON tbl_category_dish.category_id = tbl_category.category_id');
        $count = count($num);

        return Response::json(array('results' => $results, 'count' => $count));
    }

    public function listDishByProperty() {
        $type = \StringHelper::filterString($request->route('type'));
        if ($type == "1") {
            $results = DB::select('select * from tbl_dish JOIN tbl_category_dish ON tbl_dish.dish_id = tbl_category_dish.dish_id '
                            . 'JOIN tbl_category ON tbl_category_dish.category_id = tbl_category.category_id ORDER BY tbl_dish.dish_id');
        } else {
            $results = DB::select('select * from tbl_dish JOIN tbl_category_dish ON tbl_dish.dish_id = tbl_category_dish.dish_id '
                            . 'JOIN tbl_category ON tbl_category_dish.category_id = tbl_category.category_id ORDER BY tbl_dish.dish_price');
        }

        return $results;
    }

    public static function listDishAdmin() {
        return Dish::all();
    }

    public function createNewDish(Request $request) {
        $name = \StringHelper::filterString($request->input('name'));
        $price = \StringHelper::filterString($request->input('price'));
        $description = \StringHelper::filterString($request->input('description'));
        $destinationPath = 'uploads/'; // upload path
        $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
        $fileName = rand(11111, 99999) . '.' . $extension; // renameing image
        Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
        $cat_id = \StringHelper::filterString($request->input('cat'));

        if ($name != "" && $price != "") {
            $dish = new Dish;
            $dish->dish_name = $name;
            $dish->dish_price = $price;
            $dish->dish_description = $description;
            $dish->dish_image = $destinationPath . $fileName;
            $dish->active = 1;
            $dish->save();

            $cat = new DishCategory;
            $cat->category_id = $cat_id;
            $cat->dish_id = $dish->dish_id;
            $cat->save();
        }
        return Redirect::back()->with('message', 'Success');
    }

    public function updateDish(Request $request) {
        $name = \StringHelper::filterString($request->input('name'));
        $price = \StringHelper::filterString($request->input('price'));
        $description = \StringHelper::filterString($request->input('description'));
        $destinationPath = 'uploads/'; // upload path
        $dish_id = \StringHelper::filterString($request->input('dish_id'));
        if ($name != "" && $price != "") {
            $dish = Dish::find($dish_id);
            $dish->dish_name = $name;
            $dish->dish_price = $price;
            $dish->dish_description = $description;

            $dish->active = 1;
        }
        if (Input::file('image')) {
            $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
            $fileName = rand(11111, 99999) . '.' . $extension; // renameing image
            Input::file('image')->move($destinationPath, $fileName); // uploading file to given path

            $image = $destinationPath . $fileName;
            $dish->dish_image = $image;
        }
        $dish->save();
        return Redirect::back()->with('message', 'Success');
    }

    public function deleteDish(Request $request) {
        $dish_id = \StringHelper::filterString($request->input('dish_id'));
        $deletedRows = Dish::where('dish_id', $dish_id)->delete();
        $catRow = \App\DishCategory::where('dish_id', $dish_id)->delete();
        return Redirect::back()->with('message', 'Success');
    }

    public function detailDish(Request $request) {
        $dish_id = \StringHelper::filterString($request->input('dish_id'));
        $results = DB::select('select * from tbl_dish WHERE tbl_dish.dish_id = :dish_id', ['dish_id' => $dish_id]);
        return $results;
    }

}
