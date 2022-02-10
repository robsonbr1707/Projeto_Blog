@extends('layouts.app')

@section('content')

    <div class="section-post">

        @foreach ($posts as $record)
            <h1>{{$record->category}}</h1>

            <a class="link-post" href="{{route('show-post', ['post' => $record])}}"> 
                @foreach ($record->records as $record)
                    <div class="div-post-search">
                        <h5>{{$record->title}}</h5>
                        <figure>
                            <img src="{{asset("storage/records/{$record->image}")}}" alt="{{$record->post_category}}">
                        </figure>
                    </div>
                @endforeach

            </a>
        @endforeach
        
        @if(!isset($record))
            <p style="color:#FFF;">Não encontramos está pesquisa!</p>
        @endif
    </div>
    
@endsection