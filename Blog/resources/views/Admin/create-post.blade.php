@extends('layouts.app')

@section('content')

    @if (session()->has('msg'))
        <div>
            <p class="message-success">{{ session('msg') }}</p>
        </div>
    @endif

<section id="form-posts">
        
    <div class="form">
        <form action="{{route('create-posts')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div>
                <label>Categoria</label>
                <input type="text" value="{{old('category')}}" name="category" placeholder="Ex: anime, jogos, tecnologia, filmes...">
                @error('category')  <p class="message-error">{{ $message }}</p> @enderror

            </div>

            <div>
                <label>Titulo Na URL</label>
                <input type="text" value="{{old('name_slug')}}" name="name_slug" placeholder="seu-titulo-ficara-desse-jeito-na-url">
                @error('name_slug')  <p class="message-error">{{ $message }}</p> @enderror
            </div>

            <div>
                <label>Descrição do Post</label>
                <input type="text" value="{{old('description')}}" name="description" placeholder="Uma pequena descrição do Post">
                @error('description')  <p class="message-error">{{ $message }}</p> @enderror
            </div>
            
            <div>
                <label>Imagem do Post</label>
                <input type="file" name="image">
                @error('image') <p class="message-error">{{ $message }}</p> @enderror
            </div>

            <div>
                <button type="submit" class="btn btn-success">Criar Post</button>
            </div>
        </form>
    </div>
</section>
@endsection