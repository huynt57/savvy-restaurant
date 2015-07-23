@extends('mainpage')

@section('content')
<div id="content">
    <div id="rst-banner" data-background="{{ asset('img/post/banner08.jpg') }}">
        <div class="container">
            <div class="rst-inner-banner clearfix">
                <div class="rst-banner-content pull-left">
                    <h1>Sushi</h1>
                    <p>We opened. Tasty food &amp; drinks.</p>
                </div>
                <ul class="breadcrumb pull-right">
                    <li><a href="<?php echo url('main') ?>">Home</a></li>
                    <li><a href="<?php echo url('menu') ?>">Menu</a> </li>
                    <li>Sushi</li>
                </ul>
            </div>
        </div>
    </div><!-- Banner -->
    <div class="container rst-main-content rst-product-detail">

        <div class="row">
            <div class="col-sm-5">
                <div class="rst-product-images">
                    <ul class="bxslider">
                        <li><img src="{{ asset('img/post/product-slider.jpg') }}" alt="" /></li>
                        <li><img src="{{ asset('img/post/product-slider.jpg') }}" alt="" /></li>
                        <li><img src="{{ asset('img/post/product-slider.jpg') }}" alt="" /></li>
                    </ul>
                    <div id="product-pager" class="bx-pager">
                        <a data-slide-index="0" href="#"><img alt="" src="{{ asset('img/post/product-slider-thumb.jpg') }}" /></a>
                        <a data-slide-index="1" href="#"><img alt="" src="{{ asset('img/post/product-slider-thumb.jpg') }}" /></a>
                        <a data-slide-index="2" href="#"><img alt="" src="{{ asset('img/post/product-slider-thumb.jpg') }}" /></a>
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
                    <form action="#">
                        <button class="btn btn-success btn-lg btn-add-to-cart">Add to cart</button>
                        <div class="inline qty-large quantity"><input type="number" step="1" min="0"  name="cart[8fe0093bb30d6f8c31474bd0764e6ac0][qty]" value="2" title="Qty" class="input-text qty text" size="4" /></div>
                    </form>
                    <hr />
                    <div class="rst-share">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
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
                    <div class="col-sm-6">
                        <p><?php echo $dish->dish_description ?></p>
                    </div>
                   
                </div>
            </div>
            <div class="panel entry-content" id="tab-reviews">
                <div id="reviews" class="row">
                    <div id="comments" class="col-sm-6">
                        <h4>5 reviews</h4>
                        <ol class="commentlist">
                            <li class="comment even thread-even depth-1">
                                <div class="comment_container">
                                    <img height="70" width="70" class="avatar avatar-70 photo" src="{{ asset('img/post/author-comment.jpg') }}" alt="">
                                    <div class="comment-text">
                                        <div class="comment-header">
                                            <span class="comment-author">
                                                <a href="#">John Doe</a>
                                            </span>
                                            <span title="Rated 4 out of 5" class="star-rating">
                                                <span style="width:80%"><strong>4</strong> out of 5</span>
                                            </span>
                                        </div>
                                        <div class="description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet vehicula mauris. Integer vitae magna massa.</p>
                                            <span class="comment-infor">
                                                <span class="comment-date">
                                                    25th March 2015</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="comment even thread-even depth-1">
                                <div class="comment_container">
                                    <img height="70" width="70" class="avatar avatar-70 photo" src="{{ asset('img/post/author-comment.jpg') }}" alt="">
                                    <div class="comment-text">
                                        <div class="comment-header">
                                            <span class="comment-author">
                                                <a href="#">John Doe</a>
                                            </span>
                                            <span title="Rated 4 out of 5" class="star-rating">
                                                <span style="width:80%"><strong>4</strong> out of 5</span>
                                            </span>
                                        </div>
                                        <div class="description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet vehicula mauris. Integer vitae magna massa.</p>
                                            <span class="comment-infor">
                                                <span class="comment-date">
                                                    25th March 2015</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="comment even thread-even depth-1">
                                <div class="comment_container">
                                    <img height="70" width="70" class="avatar avatar-70 photo" src="{{ asset('img/post/author-comment.jpg') }}" alt="">
                                    <div class="comment-text">
                                        <div class="comment-header">
                                            <span class="comment-author">
                                                <a href="#">John Doe</a>
                                            </span>
                                            <span title="Rated 4 out of 5" class="star-rating">
                                                <span style="width:80%"><strong>4</strong> out of 5</span>
                                            </span>
                                        </div>
                                        <div class="description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet vehicula mauris. Integer vitae magna massa.</p>
                                            <span class="comment-infor">
                                                <span class="comment-date">
                                                    25th March 2015</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="comment even thread-even depth-1">
                                <div class="comment_container">
                                    <img height="70" width="70" class="avatar avatar-70 photo" src="{{ asset('img/post/author-comment.jpg') }}" alt="">
                                    <div class="comment-text">
                                        <div class="comment-header">
                                            <span class="comment-author">
                                                <a href="#">John Doe</a>
                                            </span>
                                            <span title="Rated 4 out of 5" class="star-rating">
                                                <span style="width:80%"><strong>4</strong> out of 5</span>
                                            </span>
                                        </div>
                                        <div class="description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet vehicula mauris. Integer vitae magna massa.</p>
                                            <span class="comment-infor">
                                                <span class="comment-date">
                                                    25th March 2015</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="comment even thread-even depth-1">
                                <div class="comment_container">
                                    <img height="70" width="70" class="avatar avatar-70 photo" src="{{ asset('img/post/author-comment.jpg') }}" alt="">
                                    <div class="comment-text">
                                        <div class="comment-header">
                                            <span class="comment-author">
                                                <a href="#">John Doe</a>
                                            </span>
                                            <span title="Rated 4 out of 5" class="star-rating">
                                                <span style="width:80%"><strong>4</strong> out of 5</span>
                                            </span>
                                        </div>
                                        <div class="description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet vehicula mauris. Integer vitae magna massa.</p>
                                            <span class="comment-infor">
                                                <span class="comment-date">
                                                    25th March 2015</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div>
                    <div id="review_form_wrapper" class="col-sm-6">
                        <div id="review_form">
                            <div id="respond" class="comment-respond">
                                <h4 id="reply-title" class="comment-reply-title">Add review</h4>
                                <form action="http://downpublic.info/wpdemo/rs1238_Woo_Polenlivros/wp-comments-post.html" method="post" id="commentform" class="comment-form">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="comment-form-author"><input id="author" name="author" type="text" value="" size="50" placeholder="Name" aria-required="true" /></p>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="comment-form-email"><input id="email" name="email" type="text" value="" size="50" placeholder="Email" aria-required="true" /></p>
                                        </div>
                                    </div>
                                    <p class="comment-form-rating">
                                        <span class="rst-star">
                                            <span style="width: 80%"></span>
                                        </span>
                                        Good
                                    </p>
                                    <p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" placeholder="Comment" aria-required="true"></textarea></p>
                                    <p class="form-submit">
                                        <input name="submit" type="submit" id="submit" class="submit btn btn-danger btn-lg" value="Submit" />
                                    </p>
                                </form>
                            </div>
                            <!-- #respond -->
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <br /><br /><hr /><br /><br />
        <div class="rst-recent-products">
            <h3>Related products</h3>
            <div class="row product-list view-tile">
                <div class="product-item col-sm-3">
                    <div class="rst-thumbnail">
                        <a href="products_detail.html"><img alt="" src="{{ asset('img/post/gallery01.jpg') }}"></a>
                        <div class="rst-hover">
                            Main courses
                            <a class="addtocard" href="#"></a>
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
                        <a href="products_detail.html"><img alt="" src="{{ asset('img/post/gallery02.jpg') }}"></a>
                        <div class="rst-hover">
                            Main courses
                            <a class="addtocard" href="#"></a>
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
                        <a href="products_detail.html"><img alt="" src="{{ asset('img/post/gallery03.jpg') }}"></a>
                        <div class="rst-hover">
                            Main courses
                            <a class="addtocard" href="#"></a>
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
                        <a href="products_detail.html"><img alt="" src="{{ asset('img/post/gallery04.jpg') }}"></a>
                        <div class="rst-hover">
                            Main courses
                            <a class="addtocard" href="#"></a>
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
@endsection