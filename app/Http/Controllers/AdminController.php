<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}
        
        public function dishAdmin()
        {
            return view('admin/dish');
        }
        
        public function categoryAdmin()
        {
            return view('admin/category');
        }
        
        public function orderAdmin()
        {
            return view('admin/order');
        }
        
        public function contactAdmin()
        {
            return view('admin/contact');
        }
        
        public function tableAdmin()
        {
            return view('admin/table');
        }
        
        public function userAdmin()
        {
            return view('admin/user');
        }
        
        public function dishCategoryAdmin()
        {
            return view('admin/dishCategory');
        }

}
