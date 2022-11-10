@extends('layout')

@section('title', 'Editar Autor')

@section('stylesheets')
    @parent
@endsection

@section('content')
    <h1>Editar Autor</h1>
    <a href="{{ route('autor_list') }}">&laquo; Torna</a>
	<div style="margin-top: 20px">
        <form method="POST" action="{{ route('autor_edit', ['id' => $autor->id]) }}">
            @csrf
            <div>
                <label for="nom">Nom</label>
                <input type="text" name="nom" value="{{ $autor->nom }}" />
            </div>
            <div>            
                <label for="cognoms">Cognoms</label>
                <input type="text" name="cognoms" value="{{ $autor->cognoms }}"  />
            </div>
            <button type="submit">Desar</button>
        </form>
	</div>
@endsection