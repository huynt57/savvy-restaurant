@extends('admin')

@section('content')
<div id="main" ng-app="" ng-controller="DishController">
    <div class="container-fluid">
        <div class="page-header">
            <div class="pull-left">
                <h1>Dish Management</h1>
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
                    <a href="tables-dynamic.html">Dishes</a>
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
                            List of dishes
                    </div>
                    <div class="box-content nopadding">
                        <table class="table table-hover table-nomargin dataTable table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Dish Name</th>
                                    <th>Dish Price ($)</th>

                                    <th>Dish Image</th>
                                    <th>Dish Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dishes as $dish)
                                <tr>
                                    <td>{{ $dish -> dish_id}}</td>
                                    <td>{{ $dish -> dish_name}}</td>
                                    <td>${{ $dish -> dish_price}}</td>

                                    <td><img src="{{ asset($dish -> dish_image)}}"</td>
                                    <td style="width: 60%;">{{ $dish -> dish_description}}</td>
                                    <td style="width: 10%">
                                        <a href="#" ng-click="detailDish({{$dish -> dish_id}})">Detail</a>
                                        <a href="#" ng-click="editDish({{$dish -> dish_id}})">Edit</a>
                                        <a href="#" ng-click="deleteDish({{$dish -> dish_id}})">Delete</a>
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
    <div id="modal-detail" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">@{{detail.dish_name}}</h3>
        </div>
        <div class="modal-body">
            <p>@{{detail.dish_description}}</p>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            <button class="btn btn-primary" data-dismiss="modal">Save changes</button>
        </div>
    </div>
</div>


<script>
 function DishController($http, $scope) {
     $scope.detail = {};
     $scope.detailDish = function(id) {
         $("#modal-detail").modal("show");
         $("#myModalLabel").hide();
         $http({
             method: 'POST',
             url: '<?php echo url('admin/dish/detail') ?>',
             data: $.param({
                 dish_id: id
             }),
             headers: {
                 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
             },
         }).success(function(response) {
              $("#myModalLabel").show();
             $scope.detail = response[0];
             //viet day a ??
         }).error(function(response) {
             // console.log(response);
         });
     }
     
     $scope.editDish = function(id) {
        $http({
             method: 'POST',
             url: '<?php echo url('admin/dish/detail') ?>',
             data: $.param({
                 dish_id: id
             }),
             headers: {
                 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
             },
         }).success(function(response) {
             $scope.detail = response;
         }).error(function(response) {
             // console.log(response);
         });
     }
     
     $scope.deleteDish = function(id) {
        $http({
             method: 'POST',
             url: '<?php echo url('admin/dish/detail') ?>',
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