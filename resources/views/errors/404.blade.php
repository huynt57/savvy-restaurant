@extends('mainpage')

@section('content')
<div id="content" class="page-404">
		<div class="container">
			<h1><img class="rst-img-404" src="{{ asset('img/404.png') }}" alt="" /></h1>
			<h3>Page not found</h3>
			<p>Sed in massa metus. Vestibulum eu felis fermentum.</p>
			<a href="<?php echo url('main')?>" class="btn btn-danger btn-lg rst-go-home">Main page</a>
		</div>
</div>
@endsection