@extends('layout')

@section('title', 'User')

@section('content')
<div>ID : {{ $user->id }} </div>
<div>FirstName : {{ $user->firstname }} </div>
<div>Lastname : {{ $user->lastname }} </div>
    
@endsection 