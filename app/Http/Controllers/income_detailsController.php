<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\income_details;
use App\Models\Income;
use App\Models\Articles;

class income_detailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $income_details=income_details::all();
        return view('dashboard.income_details.index',['income_details'=>$income_details]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Income=Income::all();
        return view('dashboard.income_details.create',['Income'=>$Income]);

        $Article=Article::all();
        return view('dashboard.income_details.create',['Article'=>$Article]);
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
        return view("dashboard.income_details.message",['msg'=>"Ingreso Exitoso"]);
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
        $income_details=income_details::find($id);
        return view('dashboard.income_details.edit',['income_details'=>$income_details,'Income'=>Income::all()]);

        $income_details=Income_details::find($id);
        return view('dashboard.income_details.edit',['income_details'=>$income_details,'Article'=>Article::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $income_details=income_details::find($id);
        $income_details->income_id=$request->input('income_id');
        $income_details->article_id=$request->input('article_id');
        $income_details->quantity=$request->input('quantity');
        $income_details->price=$request->input('price');
        $income_details->save();
        return view("dashboard.income_details.message",['msg'=>"Actualizacion Exitosa"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $income_details=Income_details::find($id);
        $income_details->delete();
        return redirect("dashboard/income_details");
    }
}
