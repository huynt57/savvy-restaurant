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
              
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-3">
                            <form action="#" class="rst-form-input">
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
                        <?php foreach($result as $item):?>
                        <div class="col-sm-12 product-item">
                            <div class="rst-thumbnail">
                                <a href="<?php echo url('dish') ?>/<?php echo $item->dish_name?>-<?php echo $item->dish_id?>"><img src="<?php echo $item->dish_image?>" alt="" /></a>
                                <div class="rst-hover">
                                    <?php echo $item->category_name?>
                                    <a href="#" class="addtocard" ng-click="addCart(<?php echo $item->dish_id?>)"></a>
                                </div>
                            </div>
                            <div class="rst-product-info">
                                <h3><a href=""><?php echo $item->dish_name?></a></h3>
                                <span class="price-product"><sup>$</sup><?php echo $item->dish_price?></span>
                                <hr />
                                <div class="rst-product-content">
                                    <p><?php echo $item->dish_description?></p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
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


@endsection