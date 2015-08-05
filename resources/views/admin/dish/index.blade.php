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
         <?php if (Session::get('message') != ""): ?>
        <div class="alert alert-success">
											<button type="button" class="close" data-dismiss="alert">&times;</button>
											 <?php echo Session::get('message'); ?>
										</div>             
        <?php endif;?>
        <div class="row-fluid">
           
            <div class="span12">
                 
                <div class="box box-color box-bordered">
                    <button class="btn btn-primary" style="margin-top: 15px;" ng-click="addDish()">Add new dish</button>
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

                                    <td style="width: 10%;"><img src="{{ asset($dish -> dish_image)}}" /></td>
                                    <td style="width: 55%;">{{ substr($dish -> dish_description,0, 400)}}....</td>
                                    <td style="width: 10%">
                                        <a href="#" ng-click="detailDish({{$dish -> dish_id}})">Detail</a>
                                        <a href="#" ng-click="editDish()">Edit</a>
                                        <a href="<?php echo url('admin/dish/delete?dish_id=') ?>{{$dish -> dish_id}}" ng-click="deleteDish({{$dish -> dish_id}})" onclick="if(!confirm('Are you sure ?? Cannot rollback !!!')){return false;}">Delete</a>
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
   @include('admin.dish.detail')
       @include('admin.dish.edit')
          @include('admin.dish.add')
</div>


<script>
 function DishController($http, $scope) {
     $scope.addDish = function() {
         $("#modal-add").modal("show");
          
     }
     
     $scope.editDish = function() {
         $("#modal-edit").modal("show"); 
     }
     $scope.detail = {};
     $scope.detailDish = function(id) {
         $("#modal-detail").modal("show");
         $("#loading").show();
         $("#modal-label").hide();
         $("#des").hide();
         $('#price').hide();
         $('#image').hide();
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
             $("#loading").hide();
             $("#modal-label").show();
             $("#des").show();
             $('#price').show();
             $('#image').show();
             $scope.detail = response[0];
             
         }).error(function(response) {
             // console.log(response);
         });
     }
     
    

 }

</script>
@endsection