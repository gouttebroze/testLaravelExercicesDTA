@extends('layout')

@section('title', 'Hello with param')

@section('content')
<h1>Hello :{{ $name }} !</h1>
@endsection