@extends('layout')
@section('titulo-pagina')
contactos
@endsection
@section('header')
Fale connosco
@endsection
@section('conteudo')

<form method="post" action="{{route('processar.form')}}">
	@csrf
	<label for="nome">Nome</label>
	<input type="text" name="nome">
	<br>
	<label for="morada">Morada</label>
	<input type="text" name="morada">
	<br>
	<label for="automovel">Automóvel</label>
	<select name="automovel">
		<option value="volvo"> Volvo </option>
		<option value="saab"> Saab </option>
		<option value="mercedes"> Mercedes </option>
		<option value="audi"> VAudi </option>

		
	</select>
	<br>
	<button type="submit">Enviar</button>
</form>
	
@endsection





