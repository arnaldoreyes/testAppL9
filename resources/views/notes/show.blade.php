@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Nota') }}</div>

                    <div class="card-body">

                        <div class="row mb-3">
                            <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Titulo') }}</label>
                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ $note->title }}" required readonly>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="descipcion" class="col-md-4 col-form-label text-md-end">{{ __('Descripcion') }}</label>
                            <div class="col-md-6">
                                <input id="descipcion" type="text" class="form-control" name="descipcion" value="{{ $note->description }}" required readonly>
                            </div>
                        </div>

                        <div class="d-flex">
                            <a class="btn me-1 btn-warning" href="{{route('notes.edit',$note->id)}}">Edit</a>

                            <form method="POST" action="{{route('notes.destroy',$note->id)}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
