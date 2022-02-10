<?php

namespace App\Http\Controllers\Autorize;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateRecordRequest;
use App\Models\Post;
use App\Models\Record;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class RecordController extends Controller
{
    public function index()
    {
        if(auth()->user()->autorize == 'admin'):
            $posts = Post::all();
                return view('admin.create-record', ['posts'=>$posts]);
        else:
            return redirect()->back();
        endif;
    }

    public function store(CreateRecordRequest $request)
    {
        if(Auth::user()-> autorize == 'admin'):
            $records = new Record();
            $records->title = $request->title;
            $records->description = $request->description_records;
            $records->post_category = $request->post_category;

        if($request->hasFile('image') && $request->image->isValid()):

            $nameImage = Str::slug($request->title, '-').'.'.$request->image->extension();
            $image = $request->image->storeAs('public/records',$nameImage);
            $records->image = $nameImage;
            $records->save();
        endif;

    endif;
        return redirect()->back()->with('msg', "Registro $records->title Criado com Sucesso!");
    }

    public function delete($id)
    {
        if(Auth::user()->autorize == 'admin'):
            $record = Record::findOrFail($id);

            if(Storage::exists($record->image)):
                Storage::delete($record->image);
            endif;
            $record->delete();

        endif;

            return redirect()->back();
    }

}
