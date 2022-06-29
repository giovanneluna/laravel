@extends('layouts.app')

@section('title'," Editar o usúario { $user->name }")

@section('content')

<h1>Editar o usúario {{ $user->name }}</h1>

@include('includes.validations-form')

<form action="{{ route('users.update',$user->id) }}" method="post">
    @method ('PUT')
    @include('users._partials.form')

</form>

@endsection