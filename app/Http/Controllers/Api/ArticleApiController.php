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
        $article=Article::all();
        return ($article);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $article = new Article();
        $article->code = $request->input('code');
        $article->name = $request->input('name');
        $article->Sale_Price = $request->input('Sale_Price');
        $article->stock = $request->input('stock');
        $article->description = $request->input('description');
        $article->state = $request->input('state');
        $article->idCategory = $request->input('idCategory');
        $article->save();
        return $article;
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
    public function update(Request $request, string $id)
    {
        $article = Article::find($id);
        $article->name = $request->input('name');
        $article->Sale_Price = $request->input('Sale_Price');
        $article->stock = $request->input('stock');
        $article->description = $request->input('description');
        $article->state = $request->input('state');
        $article->idCategory = $request->input('idCategory');
        $article->save();
        return $article;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article =Article::find($id);
        $article->delete();
        return ('Articulo Eliminado');
    }
}
