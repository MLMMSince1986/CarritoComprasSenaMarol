<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Person=Person::all();
        return view('dashboard.Person.index',['Person'=>$Person]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Person=Person::all();
        return view('dashboard.Person.create',['Person'=>$Person]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Person= new Person();
        $Person->Type=$request->input('Type');
        $Person->First_Name=$request->input('First_Name');
        $Person->Last_Name=$request->input('Last_Name');
        $Person->Document_Type=$request->input('Document_Type');
        $Person->Document_Number=$request->input('Document_Number');
        $Person->Adress=$request->input('Adress');
        $Person->Phone=$request->input('Phone');
        $Person->Email=$request->input('Email');
        $Person->save();
        return view("dashboard.Person.message",['msg'=>"Persona Creada Con Exito"]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $Person=Person::find($id);
        return view('dashboard.Person.show',['Person'=>$Person]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $Person=Person::find($id);
        return view('dashboard.Person.edit',['Person'=>$Person]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $Person=Person::find($id);
        $Person->Type=$request->input('Type');
        $Person->First_Name=$request->input('First_Name');
        $Person->Last_Name=$request->input('Last_Name');
        $Person->Document_Type=$request->input('Document_Type');
        $Person->Document_Number=$request->input('Document_Number');
        $Person->Adress=$request->input('Adress');
        $Person->Phone=$request->input('Phone');
        $Person->Email=$request->input('Email');
        $Person->save();
        return view("dashboard.Person.message",['msg'=>"Persona Actualizada Con Exito"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Person=Person::find($id);
        $Person->delete();
        return redirect("dashboard/Person");
    }
}
