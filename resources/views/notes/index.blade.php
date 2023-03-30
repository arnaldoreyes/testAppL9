@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a href="{{route('notes.create')}}">Crear Nueva Nota</a>
                <table class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Título</th>
                        <th>Creada en</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach (\App\Models\Note::all() as $item)
                            <tr>
                                <td>{{$item->title}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>
                                    <a href="{{route('notes.show',$item->id)}}">Mostrar</a>
                                    <a href="{{route('notes.edit',$item->id)}}">Editar</a>
                                    <form method="POST" action="{{route('notes.destroy',$item->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection
