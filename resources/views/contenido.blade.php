@extends('layouts.app')

@section('content')
@if (\Session::has('edit'))
    <div class="alert alert-success">
        <p> {{\Session::get('edit')}}</p>
    </div>
@endif
@if (\Session::has('fallo'))
    <div class="alert alert-danger">
        <p> {{\Session::get('fallo')}}</p>
    </div>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('contenido')}}" accept-charset="UTF-8" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <label for="archivo"><b>Archivo: </b></label><br>
                        <input type="file" name="archivo" required>
                        <div class="form-group">
                            <label >Seleccionar Categoria</label>
                            <select class="form-control" name="categoria">
                            @foreach($categorias as $categorias)
                            <option>{{$categorias->nom_categoria}}</option>
                            @endforeach
                            </select>
                        </div>
                        <input class="btn btn-success" type="submit" value="Enviar" >
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
