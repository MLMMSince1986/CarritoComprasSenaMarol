<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\users;
use App\Models\Person;
use App\Models\sales;

class salesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sales=sales::all();
        return view('dashboard.sales.index',['sales'=>$sales]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        $Person=Person::all();
        return view('dashboard.sales.create',['Person'=>$Person]);

        $users=users::all();
        return view('dashboard.sales.create',['users'=>$users]);
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sales= new sales();
        $sales->client_id=$request->input('client_id');
        $sales->user_id=$request->input('user_id');
        $sales->receipt_type=$request->input('receipt_type');
        $sales->receipt_series=$request->input('receipt_series');
        $sales->receipt_number=$request->input('receipt_number');
        $sales->tax=$request->input('tax');
        $sales->total=$request->input('total');
        $sales->status=$request->input('status');
        $sales->save();
        return view("dashboard.sales.message",['msg'=>"Venta Exitosa"]);
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
        $sales=sales::find($id);
        return view('dashboard.sales.edit',['sales'=>$sales,'Person'=>Person::all()]);
        
        $sales=sales::find($id);
        return view('dashboard.sales.edit',['sales'=>$sales,'users'=>users::all()]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $sales=sales::find($id);
        $sales->client_id=$request->input('client_id');
        $sales->user_id=$request->input('user_id');
        $sales->receipt_type=$request->input('receipt_type');
        $sales->receipt_series=$request->input('receipt_series');
        $sales->receipt_number=$request->input('receipt_number');
        $sales->tax=$request->input('tax');
        $sales->total=$request->input('total');
        $sales->status=$request->input('status');
        $sales->save();
        return view("dashboard.sales.message",['msg'=>"Venta Modificada Exitosa"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sales=sales::find($id);
        $sales->delete();
        return redirect("dashboard/sales");
    }
}
