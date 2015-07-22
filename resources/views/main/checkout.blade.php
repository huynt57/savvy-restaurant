@extends('mainpagew')

@section('content')
<div id="content">
    <div class="container rst-main-content">
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
                        <tr>
                            <td class="product-name">
                                <a class="remove" href="#"><i class="fa fa-close"></i></a>
                                <img class="img-circle" src="img/post/product-card-01.jpg" alt="" />
                                Sashimi & vasabi
                            </td>
                            <td>$10</td>
                            <td>
                                <div class="quantity"><input type="number" step="1" min="0"  name="cart[8fe0093bb30d6f8c31474bd0764e6ac0][qty]" value="2" title="Qty" class="input-text qty text" size="4" /></div>
                            </td>
                            <td class="price">$20</td>
                        </tr>
                        <tr>
                            <td class="product-name">
                                <a class="remove" href="#"><i class="fa fa-close"></i></a>
                                <img class="img-circle" src="img/post/product-card-02.jpg" alt="" />
                                Hamburger 
                            </td>
                            <td>$10</td>
                            <td>
                                <div class="quantity"><input type="number" step="1" min="0"  name="cart[8fe0093bb30d6f8c31474bd0764e6ac0][qty]" value="1" title="Qty" class="input-text qty text" size="4" /></div>
                            </td>
                            <td class="price">$25</td>
                        </tr>
                        <tr>
                            <td class="product-name">
                                <a class="remove" href="#"><i class="fa fa-close"></i></a>
                                <img class="img-circle" src="img/post/product-card-03.jpg" alt="" />
                                Pizza menu 
                            </td>
                            <td>$10</td>
                            <td>
                                <div class="quantity"><input type="number" step="1" min="0"  name="cart[8fe0093bb30d6f8c31474bd0764e6ac0][qty]" value="1" title="Qty" class="input-text qty text" size="4" /></div>
                            </td>
                            <td class="price">$25</td>
                        </tr>
                        <tr class="subtotal">
                            <th></th>
                            <th></th>
                            <th>subtotal</th>
                            <th class="price">$70</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br /><br /><br />
        <div class="rst-form-input form-checkout">
            <div class="row">
                <div class="col-sm-6 checkout-address">
                    <h4><span class="rst-circle">1</span>Address</h4>
                    <div class="form-group">
                        <label>Full name</label>
                        <input type="text" name="name" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Adress</label>
                        <input type="text" name="name" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Country</label>
                        <select name="" class="form-control">
                            <option value="">USA</option>
                            <option value="1">VietNam</option>
                            <option value="2">England</option>
                            <option value="3">Russia</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <input type="text" name="name" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Phone number</label>
                        <input type="text" name="name" class="form-control" value="+1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Comments</label>
                        <textarea class="form-control" name="comments" rows="10" placeholder=""></textarea>
                    </div>
                </div>
                <div class="col-sm-6 checkout-payment">
                    <h4><span class="rst-circle">2</span>Payment system</h4>
                    <div class="form-group">
                        <label>Select payment system</label>
                        <select name="" class="form-control">
                            <option value="">Mastercard</option>
                            <option value="1">Visa</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Name on cart</label>
                        <input type="text" name="name" class="form-control" value="" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Credit card detail</label>
                        <input type="text" name="name" class="form-control" value="" placeholder="×××× — ×××× — ×××× — ××××">
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Credit card detail</label>
                                <select name="" class="form-control">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label> &nbsp; </label>
                                <select name="" class="form-control">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>CVC</label>
                                <input type="text" name="name" class="form-control" value="" placeholder="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <input class="btn btn-lg btn-success" type="submit" value="Check out">
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Content -->
</div>
@endsection