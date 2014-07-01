@extends('layout')

@section('content') 
<h2>Sign up Account</h2>

<h3>Using blade template</h3>
{{ Form::open(array('url'=>'createacc')) }}
	<!-- name with class attr-->
	{{	Form::label('name','Name',array('class'=>'name')).Form::text('name',null,Array('class'=>'name_text'))	}}
	{{	Form::label('eamil','E-Mail').Form::text('email')	}}
	{{	Form::label('Password').Form::password('password')	}}
	{{	Form::label('Retype Password').Form::password('re_password')	}}
	{{	Form::submit('Create Acc!')	}}
	{{	Form::close()	}}

@stop