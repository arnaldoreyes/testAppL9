@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Nota') }}</div>

                    <div class="card-body">
                        <form action="{{$isEdit ? route('notes.update',$note->id) : route('notes.store')}}" method="POST">
                            @csrf
                            @if ($isEdit)
                                @method('PUT')
                            @endif
                            <div class="row mb-3">
                                <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Titulo') }}</label>
                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title" value="{{$isEdit ? $note->title : ''}}" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="descipcion" class="col-md-4 col-form-label text-md-end">{{ __('Descripcion') }}</label>
                                <div class="col-md-6">
                                    <textarea name="description" id="description" type="text" class="form-control" required>{{$isEdit ? $note->description : ''}}</textarea>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">{{$isEdit ? "Actualizar" : "Crear"}}</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
