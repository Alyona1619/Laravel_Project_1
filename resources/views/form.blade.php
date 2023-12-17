<!-- task Laravel: Beginning -->

@extends('layouts.app')

@section('content')
<form method="POST" action="{{ url('/form') }}">
    @csrf
    <div class="form-group">
        <label for="name">Имя:</label>
        <input type="text" name="name" id="name" class="form-control">
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="age">Возраст:</label>
        <input type="text" name="age" id="age" class="form-control">
        @error('age')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" class="form-control">
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Отправить</button>
</form>

@endsection

