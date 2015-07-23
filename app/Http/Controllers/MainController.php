<?php

namespace App\Http\Controllers;

use App\Category;
use App\Dish;

class MainController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Welcome Controller
      |--------------------------------------------------------------------------
      |
      | This controller renders the "marketing page" for the application and
      | is configured to only allow guests. Like most of the other sample
      | controllers, you are free to modify or remove it as you desire.
      |
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        //$this->middleware('guest');
    }

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index() {
        return view('main/homepage');
    }

    public function contact() {
        return view('main/contact');
    }

    public function reservation() {
        return view('main/reservation');
    }

    public function checkOut() {
        return view('main/checkout');
    }

    public function menu() {
        return view('main/menu');
    }

    public function recipe() {
        return view('main/recipe');
    }

    public function about() {
        return view('main/about');
    }

    public function store() {
        
        $categories = $this->showCategory();
        $dishes = $this->listDish();
        return view('main/store', array('categories' => $categories,
            'dishes' => $dishes));
    }

    public function detail() {
        return view('main/detail');
    }

    public function showCategory() {
        $categories = Category::all();
        return $categories;
    }

    public function listDish() {
        $dishes = Dish::all();
        return $dishes;
    }

}
