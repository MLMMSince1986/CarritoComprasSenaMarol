<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Category=Category::all();
        return view('dashboard.Category.index',['Category'=>$Category]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.Category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Category= new Category();
        $Category->name=$request->input('name');
        $Category->description=$request->input('description');
        $Category->state=$request->input('state');
        $Category->save();
        return view("dashboard.Category.message",['msg'=>"Categoria agregada con Exito"]);
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
        $Category=Category::find($id);
        return view('dashboard.Category.edit',['Category'=>$Category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $Category=Category::find($id);
        $Category->name=$request->input('name');
        $Category->description=$request->input('description');
        $Category->state=$request->input('state');
        $Category->save();
        return view("dashboard.Category.message",['msg'=>"Categoria Actualizada con Exito"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Category=Category::find($id);
        $Category->delete();
        return redirect("dashboard/Category");
    }
}
