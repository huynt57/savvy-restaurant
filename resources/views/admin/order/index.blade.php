@extends('admin')

@section('content')
<div id="main" ng-app="" ng-controller="OrderController">
    <div class="container-fluid">
        <div class="page-header">
            <div class="pull-left">
                <h1>Order Management</h1>
            </div>
            <div class="pull-right">

                <ul class="stats">

                    <li class='lightred'>
                        <i class="icon-calendar"></i>
                        <div class="details">
                            <span class="big">February 22, 2013</span>
                            <span>Wednesday, 13:56</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="breadcrumbs">
            <ul>
                <li>
                    <a href="<?php echo url('main') ?>">Home</a>
                    <i class="icon-angle-right"></i>
                </li>

                <li>
                    <a href="<?php echo url('admin/order') ?>">Orders</a>
                </li>
            </ul>
            <div class="close-bread">
                <a href="#">
                    <i class="icon-remove"></i>
                </a>
            </div>
        </div>
        <hr>
         <?php if (Session::get('message') != ""): ?>
        <div class="alert alert-success">
											<button type="button" class="close" data-dismiss="alert">&times;</button>
											 <?php echo Session::get('message'); ?>
										</div>                                                       
                <?php endif; ?>
        <div class="row-fluid">
            <div class="span12">
                <div class="box box-color box-bordered">
                    <div class="box-title">
                        <h3>
                            <i class="icon-table"></i>
                            List of orders
                    </div>
                    <div class="box-content nopadding">
                        <table class="table table-hover table-nomargin dataTable table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Order Name</th>
                                    <th>Order Address</th>

                                    <th>Phone</th>
                                    <th>Comment</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $order -> id}}</td>
                                    <td>{{ $order -> order_name}}</td>
                                    <td>{{ $order -> order_address}}</td>

                                    <td>{{ $order -> order_phone}}</td>
                                    <td>{{ $order -> order_comment}}</td>
                                    <td>{{ $order -> order_status}}</td>
                                    <td>
                                        <a href="#modal-detail" ng-click="detailOrder({{$order -> id}})" data-toggle="modal">Detail</a>                                       
                                        <a href="<?php echo url('admin/order/delete?order_id=')?>{{$order -> id}}"onclick="if(!confirm('Are you sure ?? Cannot rollback !!!')){return false;}">Delete</a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
 @include('admin.order.detail')
       
</div>


<script>
 function OrderController($http, $scope) {
     $scope.detailOrder = function(id) {
         $scope.sum = 0;
         $http({
             method: 'POST',
             url: '<?php echo url('admin/order/detail') ?>',
             data: $.param({
                 order_id: id
             }),
             headers: {
                 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
             },
         }).success(function(response) {
             $scope.detail = response;
             
             for (var i in response){
                $scope.sum += response[i].dish_price*response[i].dish_number;
                //alert(i);
             }
             //alert('t');
         }).error(function(response) {
             // console.log(response);
         });
     }
 }
</script>
@endsection