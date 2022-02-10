<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
   {
       $posts = Post::all();
       return view('home', ['posts' => $posts]);
   }

   public function search(Request $request)
   {
        $posts = Post::whereHas('records', function($query) use ($request){
            $query->where('title', 'LIKE', "%{$request->search}%");
            
        })->with(['records' => function($query) use ($request){
            $query->where('title', 'LIKE', "%{$request->search}%");
        }])->get();
        
            return view('search', compact('posts'));
   }
}
