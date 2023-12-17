<!-- task Laravel: working with data -->
@extends('layouts.app')

@section('content')
    <h1>Edit User</h1>
    <form method="POST" action="{{ route('users.update', $user->id) }}">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $user->name }}" required>
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $user->email }}" required>
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
        </div>

        <div>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" value="{{ optional($user->data)->age }}" required>
        </div>

        <div>
            <label for="profession">Profession:</label>
            <input type="text" id="profession" name="profession" value="{{ optional($user->data)->profession }}" required>
        </div>

        <button type="submit">Update</button>
    </form>

    <form method="POST" action="{{ route('users.destroy', $user->id) }}" style="margin-top: 20px;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Are you sure you want to delete this user?')">Delete User</button>
    </form>

    <a href="{{ route('users.index') }}">Back to list</a>
@endsection



