@extends('layouts.main-layout')
@section('content')
    <main class="home">
        <ul>
            @foreach ($employees as $employee)
                <li>
                    <a href="{{ route('show', $employee -> id) }}">
                        {{$employee -> firstname}}
                        {{$employee -> lastname}}
                    </a>
                    <a href="#">
                        &#9998;
                    </a>
                    <a href="#">
                        &#10060;
                    </a>
                </li>
            @endforeach
        </ul>
    </main>
@endsection
