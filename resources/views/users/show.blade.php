<!-- task Laravel: working with data -->
@extends('layouts.app')

@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <h1>User Details</h1>
    <p>Name: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    @if ($user->data)
        <p>Age: {{ $user->data->age }}</p>
        <p>Profession: {{ $user->data->profession }}</p>
    @else
        <p>No additional data available for this user.</p>
    @endif

    <a href="{{ route('users.index') }}">Back to list</a>
@endsection
