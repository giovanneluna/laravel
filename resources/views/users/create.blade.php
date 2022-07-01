@extends('layouts.app')

@section('title','Novo Usuario')

@section('content')
<p class="text-sm"  class = "italic" class ="bg-blue-50">Novo Usuário</p>


@include('includes.validations-form')

<form action="{{ route ('users.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('users._partials.form')

    <div class="shadow-md "></div>
</form>

@endsection