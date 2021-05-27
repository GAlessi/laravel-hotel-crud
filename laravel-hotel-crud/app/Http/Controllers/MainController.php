<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class MainController extends Controller
{

//home
    public function home()
    {
        $employees = Employee::all();
        return view('pages.home', compact('employees'));
    }

//show singolo elemento
    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return view('pages.show', compact('employee'));
    }


//modifica elemento
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('pages.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $validData = $request -> validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'role' => 'required|string',
            'ral' => 'required|integer'
        ]);

        $employee = Employee::findOrFail($id);
        $employee -> update($validData);
        return redirect() -> route('show', $employee -> id);
    }

    //elimina elemento
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee -> delete();
        return redirect() -> route('home');
    }

    //crea nuovo elemento
    public function create()
    {
        return view('pages.create');
    }

    public function store(Request $request) {
        // dd($request -> all());

        $validData = $request -> validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'role' => 'required|string',
            'ral' => 'required|integer'
        ]);

        // dd($validate);
        $employee = Employee::create($validData);
        return redirect() -> route('show', $employee -> id);

    }
}
