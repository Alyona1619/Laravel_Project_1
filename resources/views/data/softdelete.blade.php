<!-- task Laravel: working with data -->
@extends('layouts.app')

@section('content')
    <h1>Soft Delete Data</h1>
    <p>Are you sure you want to soft delete data: {{ $data->name }}?</p>
    <form method="POST" action="{{ route('data.softdelete', $data->id) }}">
        @csrf
        <button type="submit">Soft Delete</button>
    </form>
    <a href="{{ route('data.index') }}">Back to list</a>
@endsection
