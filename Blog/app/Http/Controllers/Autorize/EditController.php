<?php

namespace App\Http\Controllers\Autorize;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditRecordRequest;
use App\Models\Post;
use App\Models\Record;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class EditController extends Controller
{
    public function index()
    {
        $records = Record::orderBy('post_category')->with('post')->paginate(3);
            return view('autorize.edit', ['records' => $records]);
    }

    public function show(Record $record)
    {
        $record = Record::findOrFail($record->id);
        $posts = Post::all();
            return view('autorize.edit-show', ['record' => $record, 'posts' => $posts]); 
    }

    public function update(EditRecordRequest $request)
    {
        if(Record::findOrFail($request->id)){
            $records = $request->all();
        }

        if($request->hasFile('image') && $request->image->isValid()):
            
            $nameImage = Str::slug($request->title, '-').'.'.$request->image->extension();
            $image = $request->image->storeAs('public/records',$nameImage);
            $records['image'] = $nameImage;

            if(Storage::exists($request->image)):
                Storage::delete($request->image);
            endif;
            
            Record::findOrFail($request->id)->update($records);
        endif;

        return redirect()->route('edit-records');
    }
}
