@extends('layout')

@section('title', 'Hello array')

@section('contant')
<div class="flex-center position-ref full-height">
           <div class="content">
                <div class="title m-b-md">
                    <ul>
                        @foreach (@names as name)

                            <li>{{ $name }}</li>
                   
                        @endforeach
                    </ul>
                </div>
            </div>
</div>
@endsection