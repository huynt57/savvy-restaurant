@extends('login')

@section('content')

<body class='login'>
    <div class="wrapper">
        <h1><a href="index.html"><img src="img/logo-big.png" alt="" class='retina-ready' width="59" height="49">Restaurant</a></h1>
        <div class="login-body">
            <h2>SIGN IN</h2>
            <form action="<?php echo url('admin/plogin') ?>" method='post' class='form-validate' id="test">
                <div class="control-group">
                    <div class="email controls">
                        <input type="text" name='uname' placeholder="Username" class='input-block-level' data-rule-required="true" data-rule-email="true">
                    </div>
                </div>
                <div class="control-group">
                    <div class="pw controls">
                        <input type="password" name="upw" placeholder="Password" class='input-block-level' data-rule-required="true">
                    </div>
                </div>
                <div class="submit">
                    
                    <input type="submit" value="Sign me in" class='btn btn-primary'>
                </div>
            </form>
            <div class="forget">
                <a href="#"><span>Restaurant</span></a>
            </div>
            <?php if (Session::get('message') != ""): ?>
        <div class="alert alert-danger">
											<button type="button" class="close" data-dismiss="alert">&times;</button>
											 <?php echo Session::get('message'); ?>
										</div>             
        <?php endif;?>
        </div>
    </div>
</body>

@endsection