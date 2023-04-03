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
                        @foreach ($notes as $item)
                            <tr>
                                <td>{{$item->title}}</td>
                                <td>{{$item->created_at}}</td>
                                <td class="d-flex">
                                    <a class="btn me-1 btn-sm btn-primary" href="{{route('notes.show',$item->id)}}"><i class="fa-solid fa-eye"></i></a>
                                    <a class="btn me-1 btn-sm btn-warning" href="{{route('notes.edit',$item->id)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <form method="POST" action="{{route('notes.destroy',$item->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
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
