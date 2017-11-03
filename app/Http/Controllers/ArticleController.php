<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class ArticleController extends Controller
{
    public function index($id)
    {
        $article = Post::find($id);
        return view('front.article', compact('$article'));
    }
}
