@extends('layouts.layout', ['title' => '404 ошибка. Вы попали не туда'])

@section('content')
    <div class="card">
        <h2 class="card-header">Ты зашел не в тот район, дружище!(404 Ошибка)</h2>
        <img src="{{ asset('img/default.png') }}">
    </div>

    <a href="" class="btn btn-outline-primary">Срочно вернуться на главную</a>
@endsection
