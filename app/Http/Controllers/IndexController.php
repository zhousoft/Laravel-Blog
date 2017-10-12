<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utils\Parsedown;

class IndexController extends Controller
{
   public function index()
   {
        $str = '# 见习勇者的博客';
        $parsedown = new Parsedown();
        $data = $parsedown->text($str);
        return view('index', compact('data'));
   } 
}
