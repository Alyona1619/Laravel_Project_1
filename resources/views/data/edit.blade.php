<!-- task Laravel: working with data -->

@extends('layouts.app')

@section('content')
    <h1>Edit Data</h1>
    <form method="POST" action="{{ route('data.update', $item->id) }}">
        @csrf
        @method('PUT')
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('data.index') }}">Back to list</a>
@endsection
