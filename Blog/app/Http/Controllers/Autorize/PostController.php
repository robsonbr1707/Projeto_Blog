<?php

namespace App\Http\Controllers\Autorize;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePostRequest;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Record;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function store(CreatePostRequest $request)
    {
        if(Auth::user()->autorize == 'admin'):
        
            $posts = new Post;
            $posts->category = $request->category;
            $posts->description = $request->description;
            $posts->name_slug = $request->name_slug;

        if($request->hasFile('image') && $request->image->isValid()):
            
            $nameImage = $request->category.'.'.$request->image->extension();
            $image = $request->image->storeAs('public/posts',$nameImage);
            $posts->image = $nameImage;
            $posts->save();
        endif;     

    endif;

        return redirect()->back()->with('msg', "Post $posts->category Criado com Sucesso!");
    }

    public function show(Post $post)
    {
        
        $comments = Comment::where('record_category', $post->category)->get();
        $records = Record::where('post_category', $post->category)->paginate(3);

            return view('show',['post' => $records, 'comments' => $comments->load('user')]);
    }

}
