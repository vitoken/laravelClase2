@extends('layout');
@section('content');
@if($libros->count())
<table class="table table-bordered table-striped">
    <thead>
        <th>Titulo</th>
        <th>Autor</th>
        <th>Editorial</th>
        <th>Acciones</th>
    </thead>
        @foreach($libros as $libro)
            <tr>
                <td>{{$libro->titulo}}</td>
                <td>{{$libro->autor}}</td>
                <td>{{$libro->editorial}}</td>
                <td><a class="btn btn-primary btn-xs" href="{{action('LibroController@edit',$libro->id)}}"><span class="glyphicon glyhicon-pencil"></span>Editar</a></td>
            </tr>
        @endforeach
</table>

@else
No hay registros
@endif
@endsection