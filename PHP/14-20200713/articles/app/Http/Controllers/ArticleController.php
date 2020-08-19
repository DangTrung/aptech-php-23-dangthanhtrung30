<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = Article::all();
        return view('article.index',['article'=>$article]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      /*  $art = new Article();
        $art->title = $request->title;
        $art->description = $request->description;
        $art->content=$request->content; */
     /*   $title = $request->title;
        $slug = Str::slug($title, '-');
        $description = $request->description;
        $content = $request->content;*/
        Article::create([
            'title' => $request->title,
            'description' => $request->description,
            'slug' =>Str::slug('title','-'),
            'content' => $request->content
        ]);

        return redirect()->route('articles.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('article.show', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('article.edit',['article'=>$article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        
        $data = $request->all();
        $data['slug'] =  Str::slug($request->title,'-');
        // dd($data);

        $article->update($data);
        

        return redirect()->route('article.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $article = Article::find($id);
        $article->destroy($id);
        // Article::destroy($id);
        return redirect()->route('article.index');
    }
}
