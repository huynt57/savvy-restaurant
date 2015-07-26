<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Order;
use App\OrderDetail;

class OrderController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	public function listOrderAdmin()
        {
            return Order::all();
        }
        
        public function orderDetail(Request $request)
        {
             $order_id = \StringHelper::filterString($request->input('order_id'));
             $order_detail = OrderDetail::where('order_id', $order_id);
             return $order_detail;
        }
        
        public function updateOrder()
        {
            
        }

}
