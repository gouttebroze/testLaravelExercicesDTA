@extends('layout')

@section('title', 'Users')
@section('content')
<table class="table table-hover">

    <thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">>FirstName</th>
			<th scope="col">>LastName</th>
            
        </tr>
	</thead>
<tboby>
@foreach ($users as $user)
        <tr>

        <td><a href="{{ url('users/' .$user->id) }}">{{ $user->id }}</a></td>
            
            <td> {{ $user->id }}  </td>
			<td> {{ $user->firstname }}</td>
			<td> {{ $user->lastname }}</td> 

        </tr>


@endforeach

</tboby>

</table>

@endsection


