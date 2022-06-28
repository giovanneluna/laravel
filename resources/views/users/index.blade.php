@extends('layouts.app')

@section('title','Listagem do Usuário')

@section('content') 
<h1>Listagem dos usuários </h1>
(<a href="{{route('users.create') }}">+</a>)

<ul>
@foreach ($users as $user)
    <li>
        {{$user->name}} - 
        {{$user->email}} 
            <a href="{{route('users.show', $user->id)}}">Detalhes</a>
    </li>
@endforeach
</ul>
    
@endsection