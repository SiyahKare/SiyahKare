<?php
namespace App\Http\Controllers;
use App\Models\Article;


class ArticleController extends Controller
{
    protected $data = []; // the information we send to the view

    public function index()
    {
        // $articles = Article::latest()->get();
        // $articles = $model->with(['tags', 'category'])->get();
        $articles = Article::all();
        return view('blog', ['articles'=>$articles]);
    }

    public function apifeed()
    {
        return response()->json(Article::all());
    }

    public function detailView($slug, $subs = null)
    {
        $article = Article::findBySlug($slug);

        if (!$article)
        {
            abort(404, 'Please go back to our <a href="'.url('').'">homepage</a>.');
        }

        $this->data['title'] = $article->title;
        $this->data['article'] = $article->withFakes();

        return view('pages.'.'articles', $this->data);

    }
}