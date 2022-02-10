@extends('layouts.app')

@section('content')
       
<div id="card-edit">

    <div class="card-edit">
             
        <form action="{{route('edit-records-update', $record->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

            <div class="image-edit">
                <img src="{{asset("storage/records/{$record->image}")}}" alt="{{$record->title}}">
            </div>
                <div class="input-edit">
                    <label>Titulo</label>
                    <input type="text" name="title" value="{{$record->title}}">
                        @error('title') <p class="message-error">{{ $message }}</p> @enderror
                </div>
            
            <div class="input-edit">
                <label>Categorias</label>
                <select name="post_category">
                    <option disabled selected>Categorias Criadas</option>
                    @foreach ($posts as $post)
                        <option value="{{$post->category}}">{{$post->category}}</option>
                    @endforeach
                </select>
                    @error('post_category')  <p class="message-error">{{ $message }}</p> @enderror
            </div>
            
            <div class="input-edit">
                <label>Descrição do Registro</label>
            </div>
                @error('description')  <p class="message-error">{{ $message }}</p> @enderror
                <textarea name="description">{{$record->description}}</textarea>
                            
            <div class="input-edit">
                <label>Imagem do Registro</label>
                <input type="file" name="image">
                    @error('image')  <p class="message-error">{{ $message }}</p> @enderror
            </div>
                            
            <div>
                <button type="submit" class="btn btn-success">Atualizar Registro</button>
            </div>
        </form>

    </div>  
</div>
@endsection 
