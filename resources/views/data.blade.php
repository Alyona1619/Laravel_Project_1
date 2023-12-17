<!-- task Laravel: Beginning -->

@extends('layouts.app')

@section('content')
    <h1>Данные из файлов JSON</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Имя</th>
                <th>Возраст</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item['name'] ?? 'Нет данных' }}</td>
                    <td>{{ $item['age'] ?? 'Нет данных' }}</td>
                    <td>{{ $item['email'] ?? 'Нет данных' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

