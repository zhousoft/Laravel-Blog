<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utils\Parsedown;
use App\Models\Post;

class IndexController extends Controller
{
   public function index()
   {
        //$str = '# 见习勇者的博客';
        $articles = Post::all();
        $parsedown = new Parsedown();
        foreach ($articles as $article) {
            $article->content = $parsedown->text($article->content);;
        }
        //$data = $parsedown->text($str);
        return view('front.index', compact('articles'));
   } 
}
