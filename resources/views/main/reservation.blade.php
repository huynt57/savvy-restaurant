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
        <?php if (Session::get('message') != ""): ?>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="alert alert-success" role="alert">
                        <?php echo Session::get('message'); ?>
                    </div>

                </div>
            </div>
        <?php endif; ?>
        <div class="rst-form-input">
            <form class="rst-form-reservation" action="<?php echo url('bookTable') ?>" method="POST" id="reserveForm">
                <h4><span class="rst-circle">1</span>Basic info</h4>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <input type="text" placeholder="Name" class="form-control" name="name" required="">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <input type="text" placeholder="Your email" class="form-control" name="email" required="">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <input type="text" placeholder="Phone" class="form-control" name="phone" required="">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <h4><span class="rst-circle">2</span>More details</h4>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <select name="number" class="form-control" required>
                                <option value="">Numbers guests</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <select name="month" class="form-control" required>
                                <option value="">Month</option>
                                <?php for ($i = 1; $i <= 12; $i++): ?>
                                    <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                <?php endfor; ?>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <select name="day" class="form-control" required>
                                <option value="">Day</option>
                                <?php for ($i = 1; $i <= 31; $i++): ?>
                                    <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                <?php endfor; ?>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <select name="hour" class="form-control control-inline">
                                <option value="">Hour</option>
                                <?php for ($i = 1; $i <= 12; $i++): ?>
                                   
                                    <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                <?php endfor; ?>
                            </select>
                          
                            <select name="min" class="form-control control-inline">
                                <option value="">Min</option>
                                <?php for ($i = 1; $i <= 60; $i++): ?>
                                    <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                <?php endfor; ?>
                            </select>
                           
                            <select name="a_p" class="form-control control-inline">
                                <option value="AM">AM</option>
                                <option value="PM">PM</option>
                            </select>
                            
                        </div>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <textarea placeholder="Comments" rows="10" class="form-control" name="comments" required></textarea>
                <div class="help-block with-errors"></div>
                <input type="submit" value="Book a table" class="btn btn-lg btn-danger">
            </form>
        </div>
    </div><!-- End Content -->
</div>

<script>
    $(document).ready(function() {
         $('#reserveForm').validator();
    });
</script>
@endsection
