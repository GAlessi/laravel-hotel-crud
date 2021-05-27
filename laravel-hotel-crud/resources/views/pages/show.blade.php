@extends('layouts.main-layout')
@section('content')
    <main class="home">

        <h1>{{$employee -> firstname}} - {{$employee -> lastname}} <a href="{{route('edit', $employee -> id)}}">
            &#9998;
        </a></h1>
        <h3>Ruolo: {{$employee -> role}}</h3>
        <h3>Salario: {{$employee -> ral}}</h3>

    </main>
@endsection
