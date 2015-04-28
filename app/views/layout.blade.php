@extends('master')
@section ('navigation')
    <li class="active"><a href="#">Login</a></li>
@stop
@section ('content')
	<h1 style="text-align: center;">Лена привет!</h1>
	{{Form::open(array('url' => '/login', 'class' => 'form-controll'))}}
	 {{Hash::make(123123)}}
		<div class="col-md-2 col-md-offset-5">
			<div class="form-group">
	    		<label>Email address</label>
		    	<input type="email" class="form-control" name="email" placeholder="Enter email">
		  	</div>
		  	<div class="form-group">
		    	<label>Password</label>
		    	<input type="password" class="form-control" name="password" placeholder="Password">
		  	</div>
			<input type="submit" class="btn btn-lg btn-success" value="Я ТУТ МАСТЕР!">
		</div>
	{{Form::close()}}
@stop