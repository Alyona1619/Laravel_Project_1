
@extends('layouts.app')

@section('content')
    <h1>Adult Users</h1>

    @if($adultData->isEmpty())
        <p>No adult users found.</p>
    @else
        <ul>
            @foreach($adultData as $data)
                <li>
                    <strong>Name:</strong> {{ $data->user->name }}, 
                    <strong>Email:</strong> {{ $data->user->email }},
                    <strong>Age:</strong> {{ $data->age }},
                    <strong>Profession:</strong> {{ $data->profession }}
                </li>
            @endforeach
        </ul>
    @endif

    <a href="{{ route('users.index') }}">Back to all users</a>
@endsection



переделай роут data с 1 задания
доделай ридми
залей на гит
