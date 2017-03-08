<?php

namespace App\Http\Controllers;

use App\Article;
use App\Comment;
use App\Http\Controllers\CommentController;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Yaml\Tests\A;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articles = Article::with('User')->latest()->get();
//        dd($articles);
        return view('welcome',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
      $data= new Article();
      $data->user_id =Auth::user()->id;
      $data->title =$request->title;
      $data->body =$request->body;
      $data->description =$request->description;
      $data->save();
      \Session::flash('success','Article created successfully');
      return redirect(route('article.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $articles = Article::with('User')->where('id', '=', $id )->get();
        $article = Article::with('User')->where('id', '=', $id )->get();
        $article = $article[0];
        $temp= 0;

        $comments = new CommentController();
        $comments= $comments->show($id);
//        return ($comments->user()->id);

        return view('articles.show', compact('article', 'comments', 'temp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Article::find($id)->update($request->all());
        \Session::flash('success', ' Article updated');
        return back();

//        $data= new Article();
//        $data->user_id =Auth::user()->id;
//        $data->title =$request->title;
//        $data->body =$request->body;
//        $data->description =$request->description;
//        return ($data);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $user_id = Auth::id();
        $article = Article::find($id);
        if($user_id == $article->user_id){
            $article->delete();
            \Session::flash('success','Article deleted successfully');
            return view('myArticles.index');
        }
        else return back();


    }
}
