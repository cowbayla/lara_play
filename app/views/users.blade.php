@extends('layout')

@section('content')
    List Users!

    @foreach($users as $user)
    	<p>{{$user->name}}</p>
    	<p>{{$user->email}}</p>
    @endforeach   
    
    <hr>


@stop