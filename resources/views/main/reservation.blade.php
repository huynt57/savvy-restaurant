@extends('mainpage')

@section('content')
<!-- Hero Sliders -->
<div id="content">
    <div id="rst-banner" data-background="img/post/banner01.jpg">
        <div class="container">
            <div class="rst-inner-banner clearfix">
                <div class="rst-banner-content pull-left">
                    <h1>Book a table</h1>
                    <p>We opened. Tasty food &amp; drinks.</p>
                </div>
                <ul class="breadcrumb pull-right">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Book a table</a> </li>
                </ul>
            </div>
        </div>
    </div><!-- Banner -->
    <div class="container rst-main-content">
        <div class="rst-form-input">
            <form class="rst-form-reservation" action="http://themeforces.com/">
                <h4><span class="rst-circle">1</span>Basic info</h4>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <input type="text" placeholder="Name" class="form-control" name="name">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <input type="text" placeholder="Your email" class="form-control" name="email">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <input type="text" placeholder="Phone" class="form-control" name="phone">
                        </div>
                    </div>
                </div>
                <h4><span class="rst-circle">2</span>More details</h4>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <select name="" class="form-control">
                                <option value="">Numbers guests</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <select name="" class="form-control">
                                <option value="">Month</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <select name="" class="form-control">
                                <option value="">Day</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <select name="" class="form-control control-inline">
                                <option value="">Hour</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                            <select name="" class="form-control control-inline">
                                <option value="">Min</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                            <select name="" class="form-control control-inline">
                                <option value="AM">AM</option>
                                <option value="PM">PM</option>
                            </select>
                        </div>
                    </div>
                </div>
                <textarea placeholder="Comments" rows="10" class="form-control" name="comments"></textarea>
                <input type="submit" value="Book a table" class="btn btn-lg btn-danger">
            </form>
        </div>
    </div><!-- End Content -->
</div>
@endsection
