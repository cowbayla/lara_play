@extends('layout')

@section('content') 
<h2>Sign up Account</h2>
<h3> Old Way</h3>
name:  <input id="name" type="text"/> <br/>
email: <input id="email" type="text"/> <br/>
password: <input id="password" type="password"/> <br>
password again:  <input id="re_password" type="password"/> <br/>
<input type="submit" value="Submit"/>


<!--BETTER using framwork-->
<hr/>
<h3>Using blade template</h3>

{{ Form::open() }}

	<!-- name with class attr-->
	{{	Form::label('name','Name',array('class'=>'name')).Form::text('name',null,Array('class'=>'name_text'))	}}

	{{	Form::label('eamil','E-Mail').Form::text('email')	}}

	{{	Form::label('Password').Form::password('password')	}}

	{{	Form::label('Retype Password').Form::password('re_password')	}}

	{{	Form::submit('Create Acc!')	}}

	{{	Form::close()	}}

@stop