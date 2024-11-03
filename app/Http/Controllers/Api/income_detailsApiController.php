<?php

namespace App\Http\Controllers\Api;

use App\Models\income_details;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class income_detailsApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $income_details=income_details::all();
        return $income_details;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $income_details= new income_details();
        $income_details->income_id=$request->input('income_id');
        $income_details->article_id=$request->input('article_id');
        $income_details->quantity=$request->input('quantity');
        $income_details->price=$request->input('price');
        $income_details->save();
        return $income_details;
    }

    /**
     * Display the specified resource.
     */
    public function show(income_details $income_details)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $income_details=income_details::find($id);
        $income_details->income_id=$request->input('income_id');
        $income_details->article_id=$request->input('article_id');
        $income_details->quantity=$request->input('quantity');
        $income_details->price=$request->input('price');
        $income_details->save();
        return $income_details;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $income_details = income_details::find($id);
        $income_details->delete();
        return('Detalle de Ingreso Eliminado');
    }
}
