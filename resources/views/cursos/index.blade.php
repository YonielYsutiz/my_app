@extends('layouts.plantilla')

@section('title','curso')

@section('content')
    <h1>Bienvenido a la pagina cursos</h1> 
    <a href="{{route('cursos.create')}}">Crear curso</a>

    <ul>
        @foreach ($curso as $cursos)
            <li>
                <a href="{{route('cursos.show',$cursos)}}">{{$cursos->name}}</a>
            </li>
        @endforeach
    </ul>

    {{$curso->links()}}
@endsection
