<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Http\Response;
use DB;
use App\Quotation;
use App\Contact;

class ContactController extends Controller {
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
        $date = \StringHelper::filterString($request->input('date'));
        $content = \StringHelper::filterString($request->input('comments'));
        
        if($email != "" && $name != "" && $content != "") {
           
            $contact->save();
        }      
        return Redirect::back()->with('message', 'Success');
    }
}
