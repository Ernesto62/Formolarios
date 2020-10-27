@extends('layout')
@section('titulo-pagina')
contactos
@endsection
@section('header')
Fale connosco
@endsection
@section('conteudo')
<h2>esta é a minha primeira web APP Formulário em Laravel</h2>
<a href="{{route('mostrar.form')}}">Ir para o formulario</a>
@endsection