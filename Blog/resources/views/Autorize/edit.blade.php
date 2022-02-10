@extends('layouts.app')

@section('content')

    <section>
        @if ($records->isEmpty())
            <h2 class="message-success">Nenhum Registro No Momento..</h2>
        @else
        <div id="table-content">
            <table>
                <thead>
                    <tr>
                        <th>Imagem</th>
                        <th>Categoria</th>
                        <th>Titulo</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($records as $record)
                    <tr>
                        <td>
                            <img src="{{asset("storage/records/{$record->image}")}}" alt="{{$record->title}}">
                        </td>
                        <td>{{$record->post_category}}</td>
                        <td>{{$record->title}}</td>
                        <td class="td-buttons">
                            <a class="btn btn-primary btn-edit" href="{{route('edit-records-show', $record)}}">Editar</a>
                        @if (Auth::user()->autorize == 'admin')
                                
                            <form action="{{route('record-delete', $record->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
            
                                <div class="delete-icon">
                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                </div>
                            </form>
                        @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </section>

    {{$records->links()}}

@endsection