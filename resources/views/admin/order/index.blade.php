@extends('admin')

@section('content')
<div id="main" ng-app="" ng-controller="DishController">
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
                    <a href="more-login.html">Home</a>
                    <i class="icon-angle-right"></i>
                </li>

                <li>
                    <a href="tables-dynamic.html">Orders</a>
                </li>
            </ul>
            <div class="close-bread">
                <a href="#">
                    <i class="icon-remove"></i>
                </a>
            </div>
        </div>
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
                                        <a href="#" ng-click="editOrder({{$order -> id}})">Edit</a>
                                        <a href="#" ng-click="deleteOrder({{$order -> id}})">Delete</a>
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
    <div id="modal-detail" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" ng-repeat="item in detail">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">@{{item.dish_name}}</h3>
        </div>
        <div class="modal-body">
            <p>One fine body…</p>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            <button class="btn btn-primary" data-dismiss="modal">Save changes</button>
        </div>
    </div>
</div>


<script>
 function DishController($http, $scope) {
     $scope.detailOrder = function(id) {
         $http({
             method: 'POST',
             url: '<?php echo url('
             admin / dish / detail ') ?>',
             data: $.param({
                 dish_id: id
             }),
             headers: {
                 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
             },
         }).success(function(response) {
             $scope.detail = response;
             //alert('t');
         }).error(function(response) {
             // console.log(response);
         });
     }
     
     $scope.deleteDish = function(id) {
        $http({
             method: 'POST',
             url: '<?php echo url('
             admin/dish/delete ') ?>',
             data: $.param({
                 dish_id: id
             }),
             headers: {
                 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
             },
         }).success(function(response) {
             $scope.detail = response;
             //alert('t');
         }).error(function(response) {
             // console.log(response);
         }); 
     }

 }

</script>
@endsection