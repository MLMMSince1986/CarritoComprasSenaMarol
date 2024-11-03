<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryapiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Category::all();
        return($categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Category=new Category();
        $Category->name=$request->input('name');
        $Category->description=$request->input('description');
        $Category->state=$request->input('state');
        $Category->save();
        return $Category;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Category=Category::findOrFail($id);
        return response()->json($Category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'string|max:50|unique:categories,name,' . $id,
            'description' => 'nullable|string|max:256',
            'state' => 'boolean',
        ]);

        $Category = Category::find($id);
        $Category->name=$request->input('name');
        $Category->description=$request->input('description');
        $Category->state=$request->input('state');
        $Category->save();
        return $Category;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Category = Category::find($id);
        $Category->delete();
        return('Categoria Eliminada');
    }
}
