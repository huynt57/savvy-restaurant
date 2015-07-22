@extends('mainpage')

@section('content')
<div id="content">
    <div id="rst-banner" data-background="img/post/banner02.jpg">
        <div class="container">
            <div class="rst-inner-banner clearfix">
                <div class="rst-banner-content pull-left">
                    <h1>Get in touch</h1>
                    <p>Simply call, email, or use the form below to get in touch.</p>
                </div>
                <ul class="breadcrumb pull-right">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Contact</a> </li>
                </ul>
            </div>
        </div>
    </div><!-- Banner -->
    <div class="container rst-main-content">
        <div class="row">
            <div class="col-sm-9">
                <h4>Contact form</h4>
                <div class="rst-form-input rst-contact-form">
                    <form  id="contactForm" action="http://themeforces.com/">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Your Email" data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <select id="problem" name="problem" class="form-control">
                                        <option value="">Problem type</option>
                                        <option value="">Problem type</option>
                                        <option value="">Problem type</option>
                                        <option value="">Problem type</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea id="message" name="comments" class="form-control" rows="10" placeholder="Comments" data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div id="success"></div>
                        <input type="submit" class="btn btn-lg btn-danger" value="Send" />
                    </form>
                </div>
            </div>
            <div class="col-sm-3 rst-contact-infor">
                <div class="rst-office">
                    <h4>Office</h4>
                    <p>USA</p>
                    <p>Street 15, Manhattan, New York</p>
                </div>
                <h4>Contact us</h4>
                <p><a href="mailto:foodup@gmail.com"><u>foodup@gmail.com</u></a></p>
                <p>+48 122 33 66</p>
                <p>+48 122 33 66</p>
            </div>
        </div>
    </div><!-- End Content -->

    <div class="rst-contact">
        <div id="map-canvas" class="rst-contact-maps" data-zoom="15" data-center="10.731688,122.5505356"> </div>
        <div class="rst-opacity"></div>
        <div class="rst-contact-add">
            <h3>Where are we?</h3>
            <p>Contact is right now!</p>
            <div class="rst-address">

                <i class="fa fa-map-marker"></i>
                <select name="" class="rst-drop-location">
                    <option value="Street 15, Manhattan, New York">USA</option>
                    <option value="Street 115, India">India</option>
                    <option value="Street 253, Russia">Russia</option>
                </select>
                <div class="address">Street 15, Manhattan, New York</div>

            </div>
        </div>
    </div>

</div>
@endsection
