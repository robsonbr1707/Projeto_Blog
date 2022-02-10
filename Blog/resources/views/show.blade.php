@extends('layouts.app')

@section('content')

@if($post->isEmpty())
    <h1 style="color: #FFF" class="text-center">Nenhum registro no momento</h1>
@else
    <section class="section-record">
        @foreach ($post as $record)

        <div class="div-record">
             
            <div class="div-record-description">
                <h3>{{$record->title}}</h3>
                <div class="div-record-image">
                    <figure>
                        <img src="{{asset("storage/records/{$record->image}")}}" alt="{{$record->title}}">
                    </figure>
                </div> 
                
                <p>{{ $record->description }}</p>
                <span>{{$record->created_at->format('d/m/Y') }}</span>
            </div>
        </div>
        
        @endforeach 
    </section>

    <section id="section-form-comment">
        <div>
            <h2>Comente sobre o Post</h2>
            <p>Oque achou? Alguma dúvida? comente!</p>
        </div>

        <div>
            <form action="{{route('comment-post', ['category' => $record->post_category])}}" method="POST">
                @csrf

                <div>
                    <textarea name="comment" id="" cols="80" rows="3"></textarea>
                    @error('comment')  <p class="message-error">{{ $message }}</p> @enderror

                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Enviar comentario</button>
                </div>
            </form>
        </div>
    </section>

        {{ $post->links() }}

    <section id="section-comment">
        @foreach ($comments as $item)

        <div class="div-comment">
            <div>
                <h4>{{ucwords($item->user->name)}}</h4>
                <p>{{$item->comment}}</p>
                <span>{{$item->created_at->format('d/m/Y') }}</span>
            </div>
            @auth
                
            @if (Auth::user()->autorize == 'mod' || Auth::user()->autorize == 'admin' || Auth::user()->id == $item->user_id)
                    
                <form action="{{route('comment-delete', $item->id)}}" method="POST">
                    @csrf
                    @method('DELETE')

                    <div class="comment-icon">
                        <button><i><img src="{{url('icons/x.svg')}}" alt="X"></i></button>
                    </div>
                </form>
            @endif
            @endauth

        </div>
        
        @endforeach
    </section>

    @endif
    
@endsection