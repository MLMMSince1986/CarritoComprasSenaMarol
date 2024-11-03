<?php

namespace App\Http\Controllers\Api;

use App\Models\Income;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IncomeApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Income=Income::all();
        return $Income;
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
        return $Income;
    }

    /**
     * Display the specified resource.
     */
    public function show(Income $income)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
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
        return $Income;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Income = Income::find($id);
        $Income->delete();
        return('Ingreso Eliminado');
    }
}
