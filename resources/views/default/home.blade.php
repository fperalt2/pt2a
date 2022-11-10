@extends('layout')

@section('title', 'Home')

@section('stylesheets')
    @parent
@endsection

@section('content')
    <div>
      <img src="{{ asset ('img/logo.png') }}" alt="">
      <h2>UF2-Pt2a</h2>
      <hr>
      <h3>Pràctica per iniciar-se en els conceptes bàsics de Laravel</h3>
    </div>
@endsection