<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Utils\Parsedown;

class ArticleController extends Controller
{
    public function index($id)
    {
        $article = Post::find($id);
        $parsedown = new Parsedown();
        $article->content = $parsedown->text($article->content);
        return view('front.article', compact('article'));
    }
}
