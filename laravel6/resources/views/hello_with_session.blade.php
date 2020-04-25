@extends('layout')

@section('title', 'Hello with session')

@section('content')
<h1>Hello :{{ session('name') }} !</h1>
    
@endsection 