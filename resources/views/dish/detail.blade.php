@extends('mainpage')

@section('content')
<div id="content">
    <div id="rst-banner" data-background="{{ asset('img/post/banner08.jpg')}}">
        <div class="container">
            <div class="rst-inner-banner clearfix">
                <div class="rst-banner-content pull-left">
                    <h1><?php echo $dish->dish_name; ?></h1>
                    <p>We opened. Tasty food &amp; drinks.</p>
                </div>
                <ul class="breadcrumb pull-right">
                    <li><a href="<?php echo url('main') ?>">Home</a></li>
                    <li><a href="<?php echo url('menu') ?>">Menu</a> </li>
                    <li><?php echo $dish->dish_name; ?></li>
                </ul>
            </div>
        </div>
    </div><!-- Banner -->
    <div class="container rst-main-content rst-product-detail">

        <div class="row">
            <div class="col-sm-5">
                <div class="rst-product-images">
                    <ul class="bxslider">
                        <li><img src="{{ asset('img/post/product-slider.jpg')}}" alt="" /></li>
                        <li><img src="{{ asset('img/post/product-slider.jpg')}}" alt="" /></li>
                        <li><img src="{{ asset('img/post/product-slider.jpg')}}" alt="" /></li>
                    </ul>
                    <div id="product-pager" class="bx-pager">
                        <a data-slide-index="0" href="#"><img alt="" src="{{ asset('img/post/product-slider-thumb.jpg')}}" /></a>
                        <a data-slide-index="1" href="#"><img alt="" src="{{ asset('img/post/product-slider-thumb.jpg')}}" /></a>
                        <a data-slide-index="2" href="#"><img alt="" src="{{ asset('img/post/product-slider-thumb.jpg')}}" /></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="rst-product-info main-product-detail">
                    <div class="price-product"><sup>$</sup> <?php echo $dish->dish_price; ?></div>
                    <span class="rst-star"><span style="width: 80%"></span></span>
                    <p> <?php echo $dish->dish_description ?> </p>
                    <p style="color:#abb1b8">Side dishes</p>
                    <hr />
                    <p class="stock-status"><span class="rst-stock in-stock"></span> In stock</p>

                    <button class="btn btn-success btn-lg btn-add-to-cart" onclick = "addCartWithNumber()">Add to cart</button>


                    <div class="inline qty-large quantity"><input type="number" id="number"step="1" min="0"  name="cart[8fe0093bb30d6f8c31474bd0764e6ac0][qty]" value="2" title="Qty" class="input-text qty text" size="4" /></div>

                    <hr />
                    <div class="rst-share">
                        <a href="http://www.facebook.com/share.php?u=<?php echo url('dish') . "/" . $dish->dish_name . "-" . $dish->dish_id ?>&title=<?php echo $dish->dish_name ?>"><i class="fa fa-facebook"></i></a>
                        <a href="http://twitter.com/intent/tweet?status=<?php echo $dish->dish_name ?>+<?php echo url('dish') . "/" . $dish->dish_name . "-" . $dish->dish_id ?>"><i class="fa fa-twitter"></i></a>
                        <a href="https://plus.google.com/share?url=<?php echo url('dish') . "/" . $dish->dish_name . "-" . $dish->dish_id ?>"><i class="fa fa-google-plus"></i></a>

                    </div>
                </div>
            </div>
        </div>

        <div class="woocommerce-tabs">
            <ul class="tabs">
                <li class="description_tab active">
                    <a href="#tab-description">Description</a>
                </li>

            </ul>
            <div class="panel entry-content" id="tab-description">
                <div class="row">
                    <div class="col-sm-12">
                        <p><?php echo $dish->dish_description ?></p>
                    </div>

                </div>
            </div>

            <hr /><br />
            <div class="row">
                <div class="col-sm-12">
                    <div class="fb-comments" data-width="100%" data-href="<?php echo url('dish') . "/" . $dish->dish_name . "-" . $dish->dish_id ?>" data-numposts="5"></div>
                </div>

            </div>

            <div class="rst-recent-products">
                <h3>Related products</h3>
                <div class="row product-list view-tile">
                    <div class="product-item col-sm-3">
                        <div class="rst-thumbnail">
                            <a href="products_detail.html"><img alt="" src="{{ asset('img/post/gallery01.jpg')}}"></a>
                            <div class="rst-hover">
                                Main courses
                                <a class="addtocard" ng-click="addCart(<?php echo $dish->dish_id ?>)" href="#"></a>
                            </div>
                        </div>
                        <div class="rst-product-info">
                            <h3><a href="products_detail.html">Hamburger</a></h3>
                            <span class="price-product"><sup>$</sup> 135</span>
                            <span data-original-title="In stock" data-placement="bottom" data-toggle="tooltip" class="rst-stock in-stock"></span>
                            <hr>
                        </div>
                    </div>
                    <div class="product-item col-sm-3">
                        <div class="rst-thumbnail">
                            <a href="products_detail.html"><img alt="" src="{{ asset('img/post/gallery02.jpg')}}"></a>
                            <div class="rst-hover">
                                Main courses
                                <a class="addtocard" ng-click="addCart(<?php echo $dish->dish_id ?>)" href="#"></a>
                            </div>
                        </div>
                        <div class="rst-product-info">
                            <h3><a href="products_detail.html">Sushi</a></h3>
                            <span class="price-product"><sup>$</sup> 135</span>
                            <span data-original-title="Low stock" data-placement="bottom" data-toggle="tooltip" class="rst-stock low-stock"></span>
                            <hr>
                        </div>
                    </div>
                    <div class="product-item col-sm-3">
                        <div class="rst-thumbnail">
                            <a href="products_detail.html"><img alt="" src="{{ asset('img/post/gallery03.jpg')}}"></a>
                            <div class="rst-hover">
                                Main courses
                                <a class="addtocard" ng-click="addCart(<?php echo $dish->dish_id ?>)" href="#"></a>
                            </div>
                        </div>
                        <div class="rst-product-info">
                            <h3><a href="products_detail.html">Coffee desert</a></h3>
                            <span class="price-product"><sup>$</sup> 135</span>
                            <span data-original-title="No stock" data-placement="bottom" data-toggle="tooltip" class="rst-stock no-stock"></span>
                            <hr>
                        </div>
                    </div>
                    <div class="product-item col-sm-3">
                        <div class="rst-thumbnail">
                            <a href="products_detail.html"><img alt="" src="{{ asset('img/post/gallery04.jpg')}}"></a>
                            <div class="rst-hover">
                                Main courses
                                <a class="addtocard" ng-click="addCart(<?php echo $dish->dish_id ?>)" href="#"></a>
                            </div>
                        </div>
                        <div class="rst-product-info">
                            <h3><a href="products_detail.html">Pizza</a></h3>
                            <span class="price-product"><sup>$</sup> 135</span>
                            <span data-original-title="In stock" data-placement="bottom" data-toggle="tooltip" class="rst-stock in-stock"></span>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Content -->

    </div>
    <script>
        function addCartWithNumber() {
            var number = $('#number').val();
            $.ajax({
                type: 'POST',
                url: '<?php echo url('addCartWithNumber'); ?>',
                data: {dish_id: <?php echo $dish->dish_id ?>, number: number},
                success: function(response) {
                    toastr.options = {
            "positionClass": "toast-top-center",
        };
                    $.ajax({
                        type: 'GET',
                        url: '<?php echo url('getCartAjax') ?>',
                        dataType: 'json',
                        success: function(response) {
                            toastr.options = {
                                "positionClass": "toast-top-center",
                            };
                            $('#cart-count').html(response.count);
                            $('#cart-price').html(response.total);
                            $('#cart-product').empty();
                            $.each(response.content, function(index, element) {
                                $('#cart-product').append(
                                        '<div class="rst-product-item">' +
                                        '<a href="#">' + element.name + '<span class="count">' + element.qty + '</span> <span class="price">$' + element.price + '</span></a>' +
                                        '</div>'
                                        );
                            });

                        }
                    });

                    toastr["success"]("Awesome !!!. Buy Success !!");
                }
            });
        }
    </script>
    @endsection