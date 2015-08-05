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
                        <?php $cart = Cart::content();
                            foreach($cart as $item):
                        ?>
                                <tr ng-class="class" id="row-<?php echo $item->id ?>">
                                    <td class="product-name">
                                        <a class="remove" href="#" ng-click="removeItemCart(<?php echo $item->id ?>)" onclick="removeItem()"><i class="fa fa-close"></i></a>
                                        <img class="img-circle" src="img/post/product-card-0<?php echo $item->id % 3 ?>.jpg" alt="" />
                                        <?php echo $item->name; ?>
                                    </td>
                                    <td>$<span id="price-<?php echo $item->id?>"><?php echo $item->price ?></span></td>
                                    <td>
                                        <div class="quantity"><input type="number" step="1" dish_id = "<?php echo $item->id?>" min="0"  name="number" value="<?php echo $item->qty ?>" title="Qty" class="input-text qty text" size="4" /></div>
                                    </td>
                                    <td class="price" >$<span class="price-each" id="total-<?php echo $item->id?>"><?php echo $item->qty * $item->price ?></span></td>
                                </tr>
                               <?php endforeach;?>

                        <tr class="subtotal">
                            <th></th>
                            <th></th>
                            <th>subtotal</th>
                            <th class="price">$<span id="total"><?php echo Cart::total(); ?></span></th>
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
         $('input[name=number]').change(function() {
             var dish_id = $(this).attr('dish_id');
             var price = $('#price-'+dish_id).text();
             var number = $(this).val();
             price = parseInt(price);
             number = parseInt(number);
             if(number < 0 || number > 99) {
                 alert('Wrong number !!');
             } else {
                $('#total-'+dish_id).html(price*number);
             }
             
             $.ajax({
                 type: 'POST',
                 url: '<?php echo url('updateCartAjax'); ?>',
                 dataType: 'json',
                 data: {dish_id: dish_id, number: number},
                 success: function(response) {
                     $.ajax({
                         beforeSend: function() {
                             toastr["info"]("Updating, Please wait !!");
                         },
                type: 'GET',
                url: '<?php echo url('getCartAjax'); ?>',
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
                        toastr["success"]("Success !!");
                    
                },
            });
                 }
             });
              var total = 0;
             $('.price-each').each(function() {
                var price = $(this).text();
                price = parseInt(price);
               
                total+=price;
               
             });
              $('#total').html(total);
         });
    });
</script>
@endsection