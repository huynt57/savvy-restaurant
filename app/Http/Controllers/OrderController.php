<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Response;
use DB;
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

	public static function listOrderAdmin()
        {
            return Order::all();
        }
        
        public function orderDetail(Request $request)
        {
             $order_id = \StringHelper::filterString($request->input('order_id'));
             $results = DB::select('SELECT * FROM tbl_order JOIN tbl_order_detail ON tbl_order.id = tbl_order_detail.order_id '
                     . ' JOIN tbl_dish ON tbl_order_detail.dish_id = tbl_dish.dish_id WHERE tbl_order.id = :order_id', ['order_id' => $order_id]);
             return $results;
        }
        
        public function updateOrder(Request $request)
        {
            
        }
        
        public function deleteOrder(Request $request) {
             $order_id = \StringHelper::filterString($request->input('order_id'));
             $deletedRows = Order::where('id', $order_id)->delete();
             $catRow = OrderDetail::where('order_id', $order_id)->delete();
             return Redirect::back()->with('message', 'Success');
        }

}
