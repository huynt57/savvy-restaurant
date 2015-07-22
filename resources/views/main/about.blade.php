@extends('mainpage')

@section('content')
<div id="content">
    <div id="rst-banner" data-background="img/post/banner01.jpg">
        <div class="container">
            <div class="rst-inner-banner clearfix">
                <div class="rst-banner-content pull-left">
                    <h1>About</h1>
                    <p>We opened. Tasty food &amp; drinks.</p>
                </div>
                <ul class="breadcrumb pull-right">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a> </li>
                </ul>
            </div>
        </div>
    </div><!-- Banner -->
    <div class="container rst-main-content">
        <div class="row">
            <div class="col-sm-6">
                <h3>Who we?</h3>
                <p>Sed in massa metus. Vestibulum eu felis fermentum.</p>
            </div>
            <div class="col-sm-6">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed lectus ac augue suscipit lacinia nec vitae quam. Nulla non diam risus. Nulla et nisi tincidunt, fringilla metus quis, lobortis ex. Quisque tincidunt molestie elit sit amet molestie. Nunc feugiat interdum vehicula. Nullam eget ipsum arcu. </p>

                <p>Nullam pharetra metus vel magna semper, vel dignissim nisl sagittis. Nunc at tellus dignissim turpis porta vulputate consequat ut mauris. Morbi porta pretium varius. Nullam auctor luctus sem et venenatis.</p>
            </div>
        </div><br />
        <div class="row">
            <div class="col-sm-6">
                <h3>What we do?</h3>
                <p>Sed in massa metus. Vestibulum eu felis fermentum.</p>
            </div>
            <div class="col-sm-6">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed lectus ac augue suscipit lacinia nec vitae quam. Nulla non diam risus. Nulla et nisi tincidunt, fringilla metus quis, lobortis ex. Quisque tincidunt molestie elit sit amet molestie. Nunc feugiat interdum vehicula. Nullam eget ipsum arcu. </p>

                <p>Nullam pharetra metus vel magna semper, vel dignissim nisl sagittis. Nunc at tellus dignissim turpis porta vulputate consequat ut mauris. Morbi porta pretium varius. Nullam auctor luctus sem et venenatis.</p>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-sm-4">
                <div class="rst-author">
                    <div class="rst-author-img">
                        <img class="img-circle" src="img/post/author-1.png" alt="" />
                        <h3>John Doe</h3>
                        <span>Designer</span>
                    </div>
                    <hr class="line top" />
                    <blockquote class="style-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam et vestibulum tellus, sit amet hendrerit enim. Nullam at pharetra mauris. Vivamus ipsum diam, hendrerit sed mi sit amet</blockquote>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="rst-author">
                    <div class="rst-author-img">
                        <img class="img-circle" src="img/post/author-2.png" alt="" />
                        <h3>Sam Doe</h3>
                        <span>Manager</span>
                    </div>
                    <hr class="line top" />
                    <blockquote class="style-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam et vestibulum tellus, sit amet hendrerit enim. Nullam at pharetra mauris. Vivamus ipsum diam, hendrerit sed mi sit amet</blockquote>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="rst-author">
                    <div class="rst-author-img">
                        <img class="img-circle" src="img/post/author-3.png" alt="" />
                        <h3>Lisa Doe</h3>
                        <span>Photographer</span>
                    </div>
                    <hr class="line top" />
                    <blockquote class="style-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam et vestibulum tellus, sit amet hendrerit enim. Nullam at pharetra mauris. Vivamus ipsum diam, hendrerit sed mi sit amet</blockquote>
                </div>
            </div>
        </div>
    </div><!-- End Content -->

    <!--- Contact Detail/Map -->
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
    </div><!--- end Contact Detail/Map -->
</div><!--- end container -->
@endsection
