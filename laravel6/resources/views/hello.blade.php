@extends('layout')

@section('title', 'Hello')

@section('content')
<h1>
    {{ $msg }} {{ $name}} ! 
</h1>

<div id="app">
            <example-component></example-component>

            <contacts-component></contacts-component>

            <v-app></v-app>
</div>
@endsection
