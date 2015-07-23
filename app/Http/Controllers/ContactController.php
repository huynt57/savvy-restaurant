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
    public function sendContact(Request $request) {
        $email = \StringHelper::filterString($request->input('email'));
        $name = \StringHelper::filterString($request->input('name'));
        $content = \StringHelper::filterString($request->input('comments'));
        
        if($email != "" && $name != "" && $content != "") {
            $contact = new Contact;
            $contact->contact_name = $name;
            $contact->contact_email = $email;
            $contact->contact_content = $content;
            $contact->save();
        }      
        return Redirect::back()->with('message', 'Success');
    }
}
