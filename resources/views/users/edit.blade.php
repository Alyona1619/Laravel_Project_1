@extends('layouts.app')

@section('content')
    <h1>Edit User</h1>
    <form method="POST" action="{{ route('users.update', $user->id) }}">
        @csrf
        @method('PUT')
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('users.index') }}">Back to list</a>
@endsection
