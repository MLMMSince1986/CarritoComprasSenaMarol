<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\sales_details;
use App\Models\Articles;
use App\Models\sales;

class sales_detailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sales_details=sales_details::all();
        return view('dashboard.sales_details.index',['sales_details'=>$sales_details]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sales=sales::all();
        return view('dashboard.sales_details.create',['sales'=>$sales]);
        
        $Article=Article::all();
        return view('dashboard.sales_details.create',['Article'=>$Article]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sales_details= new sales_details();
        $sales_details->sale_id=$request->input('sale_id');
        $sales_details->article_id=$request->input('article_id');
        $sales_details->quantity=$request->input('quantity');
        $sales_details->price=$request->input('price');
        $sales_details->discount=$request->input('discount');
        $sales_details->save();
        return view("dashboard.sales_details.message",['msg'=>"Detalle de Venta Exitosa"]);
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
        $sales_details=sales_details::find($id);
        return view('dashboard.sales_details.edit',['sales_details'=>$sales_details,'sales'=>sales::all()]);
        
        $sales_details=sales_details::find($id);
        return view('dashboard.sales_details.edit',['sales_details'=>$sales_details,'Article'=>Article::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $sales_details=sales_details::find($id);
        $sales_details->sale_id=$request->input('sale_id');
        $sales_details->article_id=$request->input('article_id');
        $sales_details->quantity=$request->input('quantity');
        $sales_details->price=$request->input('price');
        $sales_details->discount=$request->input('discount');
        $sales_details->save();
        return view("dashboard.sales_details.message",['msg'=>"Modificacion Exitosa"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sales_details=sales_details::find($id);
        $sales_details->delete();
        return redirect("dashboard/sales_details");
    }
}
