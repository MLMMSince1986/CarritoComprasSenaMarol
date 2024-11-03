<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Article=Article::all();
        return view('dashboard.Article.index',['Article'=>$Article]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Category=Category::all();
        return view('dashboard.Article.create',['Category'=>$Category]);
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
        $Article->idCategory=$request->input('Category');
        $Article->save();
        return view("dashboard.Article.message",['msg'=>"Articulo Creado Con Exito"]);
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
        $Article=Article::find($id);
        return view('dashboard.Article.edit',['Article'=>$Article,'Category'=>Category::all()]);
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
        $Article->idCategory=$request->input('Category');
        $Article->save();
        return view("dashboard.Article.message",['msg'=>"Articulo Actualizado Con Exito"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Article=Article::find($id);
        $Article->delete();
        return redirect("dashboard/Article");
    }
}
