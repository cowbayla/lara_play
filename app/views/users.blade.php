@extends('layout')

@section('content')
    List Users!

    @foreach($users as $user)
    	<p>{{$user->name}}</p>
    	<p>{{$user->email}}</p>
    @endforeach   
    
    <hr/>
    member registration workshop <br/>
    <a href="./signup"/>Sign Up</a>
    <hr/>


@stop