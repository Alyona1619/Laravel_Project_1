@extends('layouts.app')

@section('content')
    <h1>Soft Delete User</h1>
    <p>Are you sure you want to soft delete user: {{ $user->name }}?</p>
    <form method="POST" action="{{ route('users.softdelete', $user->id) }}">
        @csrf
        <button type="submit">Soft Delete</button>
    </form>
    <a href="{{ route('users.index') }}">Back to list</a>
@endsection
