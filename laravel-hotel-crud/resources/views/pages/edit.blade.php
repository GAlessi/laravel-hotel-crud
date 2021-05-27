@extends('layouts.main-layout')
@section('content')

<main>

    <form method="POST" action="{{ route('update', $employee -> id) }}">


        @csrf
        @method('POST')

        <div >
            <label for="firstname">Name</label>
            <div>
                <input id="firstname" type="text" name="firstname" value="{{ $employee -> firstname }}">
            </div>
        </div>
        <div >
            <label for="lastname" >Lastname</label>
            <div >
                <input id="lastname" type="text" name="lastname" value="{{ $employee -> lastname }}">
            </div>
        </div>
        <div>
            <label for="role">Role</label>
            <div>
                <input id="role" type="text" name="role" value="{{ $employee -> role }}">
            </div>
        </div>
        <div>
            <label for="ral">Salario</label>
            <div>
                <input id="ral" type="number" name="ral" value="{{ $employee -> ral }}">
            </div>
        </div>
        <div>
            <div>
                <button type="submit">
                    UPDATE
                </button>
            </div>
        </div>
    </form>
</main>
@endsection
