<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Income;
use App\Models\Person;
use App\Models\users;


class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Income=Income::all();
        return view('dashboard.Income.index',['Income'=>$Income]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Income=Income::all();
        return view('dashboard.Income.create',['Income'=>$Income]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Income= new Income();
        $Income->provider_id=$request->input('provider_id');
        $Income->user_id=$request->input('user_id');
        $Income->receipt_type=$request->input('receipt_type');
        $Income->receipt_series=$request->input('receipt_series');
        $Income->receipt_number=$request->input('receipt_number');
        $Income->date=$request->input('date');
        $Income->tax=$request->input('tax');
        $Income->total=$request->input('total');
        $Income->status=$request->input('status');
        $Income->save();
        return view("dashboard.Income.message",['msg'=>"Ingreso Exitoso"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $Income=Income::find($id);
        return view('dashboard.Income.edit',['Income'=>$Income,'Person'=>Person::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $Income=Income::find($id);
        $Income->provider_id=$request->input('provider_id');
        $Income->user_id=$request->input('user_id');
        $Income->receipt_type=$request->input('receipt_type');
        $Income->receipt_series=$request->input('receipt_series');
        $Income->receipt_number=$request->input('receipt_number');
        $Income->date=$request->input('date');
        $Income->tax=$request->input('tax');
        $Income->total=$request->input('total');
        $Income->status=$request->input('status');
        $Income->save();
        return view("dashboard.Income.message",['msg'=>"Ingreso Modificado con Exito"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Income=Income::find($id);
        $Income->delete();
        return redirect("dashboard/Income");
    }
}



