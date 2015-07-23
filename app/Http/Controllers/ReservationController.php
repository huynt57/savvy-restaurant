<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Http\Response;
use DB;
use App\Quotation;
use App\BookTable;

class ReservationController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Home Controller
      |--------------------------------------------------------------------------
      |
      | This controller renders your application's "dashboard" for users that
      | are authenticated. Of course, you are free to change or remove the
      | controller as you wish. It is just here to get your app started!
      |
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function bookTable(Request $request) {
        $email = \StringHelper::filterString($request->input('email'));
        $name = \StringHelper::filterString($request->input('name'));
        $phone = \StringHelper::filterString($request->input('phone'));
        $number = \StringHelper::filterString($request->input('number'));
        $month = \StringHelper::filterString($request->input('month'));
        $day = \StringHelper::filterString($request->input('day'));
        $hour = \StringHelper::filterString($request->input('hour'));
        $min = \StringHelper::filterString($request->input('min'));
        $a_p = \StringHelper::filterString($request->input('a-p'));
        $content = \StringHelper::filterString($request->input('comments'));

        if ($email != "" && $name != "" && $phone != "" && $number != "" && $month != "" && $day != "") {

            $book_table = new BookTable;
            $book_table->name = $name;
            $book_table->email = $email;
            $book_table->phone = $phone;
            $book_table->number = $number;
            $book_table->comments = $content;
            $book_table->active = 1;
            $book_table->status = 1;
            $book_table->date = $day . "-" . $month . " " . $hour . ":" . $min . " " . $a_p;
            $book_table->save();
        }
        return Redirect::back()->with('message', 'Success');
    }

}
