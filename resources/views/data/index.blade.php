<!-- task Laravel: working with data -->
@extends('layouts.app')

@section('content')
    <h1>Data List</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Profession</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->age }}</td>
                    <td>{{ $item->profession }}</td>
                    <td>
                        <a href="{{ route('data.show', $item->id) }}">Show</a>
                        <a href="{{ route('data.edit', $item->id) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
