@extends('layouts.app')

@section('content')
    <h1>Create Data</h1>
    <form method="POST" action="{{ route('data.store') }}">
        @csrf
        <button type="submit">Create</button>
    </form>
    <a href="{{ route('data.index') }}">Back to list</a>
@endsection
