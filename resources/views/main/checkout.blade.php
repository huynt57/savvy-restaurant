@extends('mainpage')

@section('content')
<div id="content">
     <div id="rst-banner" data-background="img/post/banner02.jpg">
        <div class="container">
            <div class="rst-inner-banner clearfix">
                <div class="rst-banner-content pull-left">
                    <h1>Checkout</h1>
                    <p>We opened. Tasty food &amp; drinks.</p>
                </div>
                <ul class="breadcrumb pull-right">
                    <li><a href="<?php echo url('main')?>">Home</a></li>
                    <li><a href="<?php echo url('checkout')?>">Checkout</a> </li>
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
            <h1>Check out</h1>
            <p class="description-heading">Sed in massa metus. Vestibulum eu felis fermentum.</p>
        </div>
        <br /><br /><br />
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <table class="table table-border-row table-card">
                    <thead>
                        <tr>
                            <th class="product-name">Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th class="price">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $cart = Session::all();
                        // var_dump($cart);
                        // die();
                        $total = 0;
                        ?>

                        <?php foreach ($cart as $key => $value): ?>
                            <?php if ($key != '_token' && $key != '_previous' && $key != 'flash'): ?>
                                <?php $item = DB::table('dish')->where('dish_id', $key)->first(); ?>
                                <tr ng-class="class" id="row-<?php echo $key ?>">
                                    <td class="product-name">
                                        <a class="remove" href="#" ng-click="removeItemCart(<?php echo $key ?>)" onclick="removeItem()"><i class="fa fa-close"></i></a>
                                        <img class="img-circle" src="img/post/product-card-0<?php echo $item->dish_id % 3 ?>.jpg" alt="" />
                                        <?php echo $item->dish_name; ?>
                                    </td>
                                    <td>$<?php echo $item->dish_price ?></td>
                                    <td>
                                        <div class="quantity"><input type="number" step="1" min="0"  name="number" value="<?php echo $value ?>" title="Qty" class="input-text qty text" size="4" /></div>
                                    </td>
                                    <td class="price">$<?php echo $value * $item->dish_price ?></td>
                                </tr>
                                <?php $total+=$value * $item->dish_price ?>
                            <?php endif; ?>
                        <?php endforeach; ?>

                        <tr class="subtotal">
                            <th></th>
                            <th></th>
                            <th>subtotal</th>
                            <th class="price">$<?php echo $total ?></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br /><br /><br />
        <div class="rst-form-input form-checkout">
            <div class="row">
                <form method="post" action="<?php echo url('processCheckOut') ?>" id="checkout">
                    <div class="col-sm-6 checkout-address">
                        <h4><span class="rst-circle">1</span>Address</h4>
                        <div class="form-group">
                            <label>Full name</label>
                            <input type="text" name="name" class="form-control" placeholder="" required>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label>Adress</label>
                            <input type="text" name="address" class="form-control" placeholder="" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-sm-6 checkout-address">
                         <h4><span class="rst-circle">1</span>Address</h4>
                        <div class="form-group">
                            <label>Phone number</label>
                            <input type="text" name="phone" class="form-control" placeholder="" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label>Comments</label>
                            <textarea class="form-control" name="comments" rows="10" placeholder=""></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input class="btn btn-lg btn-success" type="submit" value="Check out">
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div><!-- End Content -->
</div>

<script>
    $(document).ready(function() {
         $('#checkout').validator();
    });
</script>
@endsection