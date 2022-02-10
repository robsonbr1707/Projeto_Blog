@extends('layouts.app')

@section('content')

    <section>
        @if ($posts->isEmpty())
            <h2 class="message-success">Nenhum Post No Momento..</h2>
        @endif
        <div class="section-post">
            @foreach ($posts as $post)
           
                <a class="div-post" href="{{route('show-post', ['post'=>$post])}}"> 
                    <h5>{{$post->category}}</h5>
                    <figure>
                        <img src="{{asset("storage/posts/{$post->image}")}}" alt="{{$post->category}}">
                    </figure>
                    <p>{{$post->description}}</p>
                </a>
            @endforeach
        </div>
    </section>
    
@endsection
