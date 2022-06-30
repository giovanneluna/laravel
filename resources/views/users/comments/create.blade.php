@extends('layouts.app')

@section('title',"Novo Comentario Para o Usuario {$user->name}")

@section('content')
<p class="text-sm"  class = "italic" class ="bg-blue-50">Novo Comentario Para o Usuario {{$user->name}} </p>


@include('includes.validations-form')

<form action="{{ route ('comments.store',$user->id) }}" method="post">
    @csrf
    @include('users.comments._partials.form')

    <div class="shadow-md "></div>
</form>

@endsection