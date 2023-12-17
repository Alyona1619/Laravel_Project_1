<!-- task Laravel: working with data -->
@extends('layouts.app')

@section('content')
    <h1>User List</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Age</th>
                <th>Profession</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->password }}</td>
                    <td>
                        @if($user->data)
                            {{ $user->data->age }}
                        @endif
                    </td>
                    <td>
                        @if($user->data)
                            {{ $user->data->profession }}
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('users.show', $user->id) }}">Show</a>
                        <a href="{{ route('users.edit', $user->id) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
