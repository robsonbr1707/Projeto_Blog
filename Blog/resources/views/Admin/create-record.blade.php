@extends('layouts.app')

@section('content')

    @if (session()->has('msg'))
        <div>
            <p class="message-success">{{ session('msg') }}</p>
        </div>
    @endif
    <section id="form-records">
        <div class="form">

            <form action="{{route('create-records')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div>
                    <label>Titulo</label>
                    <input type="text" name="title" value="{{old('title')}}">
                    @error('title') <p class="message-error">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label>Categorias</label>
                    <select name="post_category">
                        <option disabled selected>Categorias Criadas</option>
                        @foreach ($posts as $item)
                            <option value="{{$item->category}}">{{$item->category}}</option>
                        @endforeach
                    </select>
                    @error('post_category')  <p class="message-error">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label>Descrição do Registro</label>
                </div>
                @error('description_records')  <p class="message-error">{{ $message }}</p> @enderror

                    <textarea name="description_records" id="" cols="60" rows="3">{{old('description_records')}}</textarea>
                
                <div>
                    <label>Imagem do Registro</label>
                    <input type="file" name="image">
                    @error('image')  <p class="message-error">{{ $message }}</p> @enderror
                </div>
                
                <div>
                    <button type="submit" class="btn btn-success">Criar Registro</button>
                </div>
            </form>
        </div>
    </section>
@endsection