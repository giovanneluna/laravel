@extends('layouts.app')

@section('title','Listagem do Usuário')

@section('content') 
<h1 class="text-2x1 font-semibold leading-tigh py-2 text-black text-center border bg-red-200 border-r-black">
         Listagem dos usuários 
(<a href="{{route('users.create') }}">+</a>)
</h1>

<form action="{{ route('users.index') }}" method="get">
<input type="text" name="search" placeholder="Pesquisar">
<h1 class="text-2x1 font-semibold leading-tigh py-2 text-black text-left">

    <button type="button" class="text-red-500 hover:text-red-600 border border-red-500 font-semibold rounded-md text-xs px-1 py-1 focus:outline-none">Pesquisar</button>
    </div>
</h1>

</form>

<ul>
@foreach ($users as $user)
    <li>
        {{$user->name}} - 
        {{$user->email}} 
            <a href="{{route('users.edit', $user->id)}}"><button type="button" class="text-red-500 hover:text-red-600 border border-red-500 font-semibold rounded-md text-xs px-1 py-1 focus:outline-none">Editar</button></a>
            <a href="{{route('users.show', $user->id)}}"><button type="button" class="text-red-500 hover:text-red-600 border border-red-500 font-semibold rounded-md text-xs px-1 py-1 focus:outline-none">Detalhes</button></a>
    </li>
@endforeach
</ul>
    
@endsection