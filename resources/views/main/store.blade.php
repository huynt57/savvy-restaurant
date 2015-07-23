@extends('mainpage')

@section('content')

<div id="content" ng-controller="StoreController" ng-app="">
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
        <div class="text-center">
            <p>Sed at dictum aliquam porta felis et semper venenatis. Praesent condimentum laoreet leo, sit amet luctus <br /> est semper non. Mauris tincidunt lorem vel lorem venenatis volutpat. </p>
        </div>
        <div class="rst-product-list">
            <div class="row">
                <div class="col-sm-3">
                    <h4>Categories</h4>
                    <ul class="list-category">
                        <?php foreach ($categories as $category): ?>                       
                            <li ><a href="#" onclick="setActive()" ng-click="loadDish(<?php echo $category->category_id ?>)"><?php echo $category->category_name; ?></a></li>       
                        <?php endforeach; ?>
                    </ul>
                    <hr />

                </div>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-3">
                            <form action="http://themeforces.com/" class="rst-form-input">
                                <div class="form-group">
                                    <select class="form-control" name="country" id="InputCountry">
                                        <option value="Popular">Popular</option>
                                        <option value="Price">Price</option>
                                    </select>
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

                    <div class="row product-list view-list">
                        <div class="col-sm-12 product-item" ng-repeat="item in data">
                            <div class="rst-thumbnail">
                                <a href="<?php echo url('dish') ?>/@{{item.dish_name}}-@{{item.dish_id}}"><img src="@{{item.dish_image}}" alt="" /></a>
                                <div class="rst-hover">
                                    @{{item.category_name}}
                                    <a href="#" class="addtocard"></a>
                                </div>
                            </div>
                            <div class="rst-product-info">
                                <h3><a href="">@{{item.dish_name}}</a></h3>
                                <span class="price-product"><sup>$</sup>@{{item.dish_price}}</span>
                                <hr />
                                <div class="rst-product-content">
                                    <p>@{{item.dish_description}}</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Product List-->
                    <nav class="wp-pagenavi">
                        <a class="btn btn-sm btn-success page-prev" href="#">Previous</a>
                        <span class="btn btn-sm btn-success page-numbers current">1</span>
                        <a class="page-numbers" href="#">2</a>
                        <a class="page-numbers" href="#">3</a>
                        <a class="page-numbers" href="#">4</a>
                        <a class="page-numbers" href="#">5</a>
                        <a class="btn btn-sm btn-success page-next" href="#">Next</a>
                    </nav>
                </div>
            </div>
        </div>
    </div><!-- End Content -->

</div>

<script type="text/javascript">
    function StoreController($scope, $http) {
        $scope.loadDish = function(id) {
            $http({
                method: 'POST',
                url: 'listDishByCategory',
                data: $.param({id: id}),
                headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'},
            }).success(function(response) {
                $scope.data = response;

                // console.log(response);
            }).error(function(response) {

            });
        };

    }

    function setActive()
    {
        $('li').removeClass('active');
        $(this).parent().addClass('active');
    }


</script>
@endsection