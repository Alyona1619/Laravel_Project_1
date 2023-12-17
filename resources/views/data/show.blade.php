<!-- task Laravel: working with data -->
@extends('layouts.app')

@section('content')
    <h1>Data Details</h1>
    <p>Name: {{ $item->name }}</p>
    <p>Age: {{ $item->age }}</p>
    <p>Profession: {{ $item->profession }}</p>
    <a href="{{ route('data.index') }}">Back to list</a>
@endsection
