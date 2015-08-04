@extends('mainpage')

@section('content')

<div id="content" ng-controller="StoreController" ng-app="" ng-init="init()">
    <div id="rst-banner" data-background="img/post/banner02.jpg">
        <div class="container">
            <div class="rst-inner-banner clearfix">
                <div class="rst-banner-content pull-left">
                    <h1>Store</h1>
                    <p>We opened. Tasty food &amp; drinks.</p>
                </div>
                <ul class="breadcrumb pull-right">
                    <li><a href="<?php echo url('main') ?>">Home</a></li>
                    <li><a href="<?php echo url('menu') ?>">Store</a> </li>
                </ul>
            </div>
        </div>
    </div><!-- Banner -->
    <div class="container rst-main-content">
        <?php if (Session::get('message') != ""): ?>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="alert alert-success" role="alert">
                        <?php echo Session::get('message'); ?>
                    </div>

                </div>
            </div>
        <?php endif; ?>
        <div class="text-center">
            <p>Sed at dictum aliquam porta felis et semper venenatis. Praesent condimentum laoreet leo, sit amet luctus <br /> est semper non. Mauris tincidunt lorem vel lorem venenatis volutpat. </p>
        </div>
        <div class="rst-product-list">
            <div class="row">
                <div class="col-sm-3">
                    <h4>Categories</h4>
                    <ul class="list-category">
                        <li class="menu-cat" id="all"><a ng-click="init()" href="#">All</a></li>
                        <?php foreach ($categories as $category): ?>                       
                        <li class="menu-cat" id="cat-<?php echo $category->category_id ?>"><a ng-class="class" href="#" ng-click="loadDish(<?php echo $category->category_id ?>)"><?php echo $category->category_name; ?></a></li>       
                        <?php endforeach; ?>
                    </ul>
                    <hr />

                </div>
                <div class="col-sm-9">
                    <div class="row" style="margin-bottom: 20px;">
                        <div class="col-sm-3">
                            <form action="#" class="rst-form-input">
                                <div class="form-group">

                                </div>
                            </form>
                        </div>
                        <div class="col-sm-9">
                            <div class="rst-view">
                                <a href="#" class="rst-tile"></a>
                                <a href="#" class="rst-list active"></a>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="loading" style="height: 700px;">
                        <img src="{{asset('img/bx_loader.gif')}}" style=" position: absolute;
                             top: 0; bottom:0; left: 0; right:0;
                             margin: auto;"/>
                    </div>
                    <div class="row product-list view-list" id="list-product">
                        <div class="col-sm-12 product-item" ng-repeat="item in data">
                            <div class="rst-thumbnail">
                                <a href="<?php echo url('dish') ?>/@{{item.dish_name}}-@{{item.dish_id}}"><img src="@{{item.dish_image}}" alt="" /></a>
                                <div class="rst-hover">
                                    @{{item.category_name}}
                                    <a href="#" class="addtocard" ng-click="addCart(@{{item.dish_id}})"></a>
                                </div>
                            </div>
                            <div class="rst-product-info">
                                <h3><a href="">@{{item.dish_name}}</a></h3>
                                <span class="price-product"><sup>$</sup> @{{item.dish_price}}</span>
                                <hr />
                                <div class="rst-product-content">
                                    <p>@{{item.dish_description}}</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Product List-->
                    <nav class="wp-pagenavi" ng-if="pages.length != 0">
                        <a class="btn btn-sm btn-success page-prev" href="" ng-click="previous()">Previous</a>
                        <a href="#" class="page-numbers" ng-repeat="page in pages" id="page-@{{page}}" ng-click="setActive(@{{page}})">@{{page}}</a>

                        <a class="btn btn-sm btn-success page-next" href="" ng-click="next()">Next</a>
                    </nav>
                </div>
            </div>
        </div>
    </div><!-- End Content -->

</div>

<script type="text/javascript">
                    function StoreController($scope, $http, $element) {
                        $scope.currentPage = 0;
                        $scope.records = 0;
    $scope.loadDish = function(id) {
        //  $event.currentTarget.class = "red";
        
        var elem = angular.element(document.querySelector('#loading'));
        var setActive = angular.element(document.querySelector('#cat-' + id));
        var list = angular.element(document.querySelector('#list-product'));
        var menu = angular.element(document.querySelector('.active'));
        list.hide();
        elem.show();
        menu.removeClass('active');
       
        var record = 3;
        setActive.addClass('active');
        $http({
            method: 'POST',
            url: 'listDishByCategory',
            data: $.param({
                id: id, 
            }),
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
            },
        }).success(function(response) {
            elem.hide();
            list.show();
            $scope.data = response;
            var num = 0;
             
            if (response.count % record == 0) {
                num = response.count / record
            } else {
                num = response.count / record + 1;
            }
            $scope.records = num;
            pages = [];
            for (var i = 1; i <= num; i++) {
                pages.push(i);
            }
            $scope.pages = pages;
            // console.log(response);
        }).error(function(response) {

        });
    };
    $scope.addCart = function(dish_id, dish_price, dish_name) {
        toastr.options = {
            "positionClass": "toast-top-center",
        };
        toastr["info"]("Buying, Please wait !!");
        $http({
            method: 'POST',
            url: 'addCart',
            data: $.param({
                dish_id: dish_id
            }),
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
            },
        }).success(function(response) {
            $.ajax({
                type: 'GET',
                url: 'getCartAjax',
                dataType: 'json',
                success: function(response) {
                    $('#cart-count').html(response.count);
                    $('#cart-price').html(response.total);     
                    $('#cart-product').empty();
                    $.each(response.content, function(index, element) {
                        $('#cart-product').append(
                                 '<div class="rst-product-item">'+
                                      '<a href="#">'+element.name+'<span class="count">'+element.qty+'</span> <span class="price">$'+element.price+'</span></a>'+
                                 '</div>'
                           );
                        })
                    
                },
            });
            
           toastr["success"]("Awesome !!!. Buy Success !!");
            

        }).error(function(response) {
            toastr["error"]("Oop !!!. Something wrong :(. Please try again later");
        });
    };
    $scope.loadPage = function(page) {
        var elem = angular.element(document.querySelector('#loading'));
        var list = angular.element(document.querySelector('#list-product'));
        list.hide();
        elem.show();
        var record = 3;
        $http({
            method: 'POST',
            url: 'getDish',
            data: $.param({
                page: page,
                number: record
            }),
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
            },
        }).success(function(response) {
            elem.hide();
            list.show();
            // users from your api
           
            $scope.data = response.results;
            var num = 0;
            if (response.count % record == 0) {
                num = response.count / record
            } else {
                num = response.count / record + 1;
            }
             $scope.records = num;
            pages = [];
            for (var i = 1; i <= num; i++) {
                pages.push(i);
            }
            $scope.pages = pages;
        });
    };
    $scope.init = function() {
        var activeAll = angular.element(document.querySelector('#all'));
        var menu = angular.element(document.querySelector('.active'));
        activeAll.addClass('active');
        menu.removeClass('active');
        $scope.setActive(1);
       
    };
    
    $scope.setActive = function(id) {
        $scope.loadPage(id);
        var elem = angular.element(document.querySelector('#page-' + id));
        var other = angular.element(document.querySelector('.current'));
        // elem.removeClass('btn btn-sm btn-success current');
        elem.addClass('btn btn-sm btn-success current');
        other.removeClass('btn btn-sm btn-success current');
        $scope.currentPage = id;
    }
    
    $scope.next = function() {
        if($scope.currentPage < $scope.records ) {
            $scope.setActive($scope.currentPage + 1);  
        }
    }
    
    $scope.previous = function() {
        if($scope.currentPage > 1 ) {
            $scope.setActive($scope.currentPage - 1);  
        }
    }
    
}

</script>
@endsection