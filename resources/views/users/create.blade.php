<!-- task Laravel: working with data -->
@extends('layouts.app')

@section('content')
    <h1>Create User</h1>
    <form method="POST" action="{{ route('users.store') }}">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>

        <div>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required>
        </div>

        <div>
            <label for="profession">Profession:</label>
            <input type="text" id="profession" name="profession" required>
        </div>

        <button type="submit">Create</button>
    </form>
    <a href="{{ route('users.index') }}">Back to list</a>
@endsection


