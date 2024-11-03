<?php

namespace App\Http\Controllers\Api;

use App\Models\Person;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Person=Person::all();
        return $Person;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Person=new Person();
        $Person->Type=$request->input('type');
        $Person->First_Name=$request->input('First_Name');
        $Person->Last_Name=$request->input('Last_Name');
        $Person->Document_Type=$request->input('Document_type');
        $Person->Document_Number=$request->input('Document_Number');
        $Person->Adress=$request->input('Adress');
        $Person->Phone=$request->input('Phone');
        $Person->Email=$request->input('Email');
        $Person->save();
        return $Person;
    }

    /**
     * Display the specified resource.
     */
    public function show(Person $person)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
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
        return $Person;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Person = Person::find($id);
        $Person->delete();
        return('Persona Eliminada');
    }
}
