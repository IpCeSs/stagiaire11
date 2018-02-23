<?php

namespace App\Http\Controllers;
use App\Article;

use Illuminate\Http\Request;

class NewsController extends Controller
{


    public function postForm(Request $request)
    {
        $article=new Article;
        $article->title=$request->input('title');
        $article->content=$request->input('content');
        $article->save();
            return view('news.articles');
    }


    public function index()
    {
        //
    }


    public function create()
    {
        return view('news.formulaire');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'article' => [
                'title' => $request->input('title'),
                'content' => $request->input('content'),
            ]
        ];

        return view('news.articles', $data);

    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
