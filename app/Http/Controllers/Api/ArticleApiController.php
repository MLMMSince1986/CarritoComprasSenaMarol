<?php

namespace App\Http\Controllers\Api;

use App\Models\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Article=Article::all();
        return $Article;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Article= new Article();
        $Article->code=$request->input('code');
        $Article->name=$request->input('name');
        $Article->Sale_Price=$request->input('Sale_Price');
        $Article->stock=$request->input('stock');
        $Article->description=$request->input('description');
        $Article->state=$request->input('state');
        $Article->idCategory=$request->input('idCategory');
        $Article->save();
        return $Article;
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $Article=Article::find($id);
        $Article->code=$request->input('code');
        $Article->name=$request->input('name');
        $Article->Sale_Price=$request->input('Sale_Price');
        $Article->stock=$request->input('stock');
        $Article->description=$request->input('description');
        $Article->state=$request->input('state');
        $Article->idCategory=$request->input('idCategory');
        $Article->save();
        return $Article;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
