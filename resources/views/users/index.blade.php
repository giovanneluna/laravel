@extends('layouts.app')

@section('title','Listagem do Usuário')

@section('content') 
<h1 class="text-2xl font-semibold leading-tigh py-2">

         Listagem dos usuários 
         <a href="{{ route('users.create') }}" class="bg-blue-900 rounded-full text-white px-4 text-sm">+</a>
</h1>

<form action="{{ route('users.index') }}" method="get">
<input type="text" name="search" placeholder="Pesquisar" class="md:w-1/6 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
<h1 class="text-2x1 font-semibold leading-tigh py-2 text-black text-left">

    <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Pesquisar</button>
    </div>
</h1>
</form>
<table class="min-w-full leading-normal shadow-md rounded-lg overflow-hidden">
    <thead>
        <tr>
            <th
            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
          >
          Nome
        </th>
        <th
            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
          >
            E-mail
          </th>
          <th
            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
          >
            Editar
          </th>
          <th
            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
          >
            Detalhes
          </th>
          <th
            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
          >
            Comentários (0)
          </th>
        </tr>
      </thead>
      <tbody>
        

<ul>
@foreach ($users as $user)
<tr>
    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
        @if ($user->image)
            <img src="{{ url("storage/{$user->image}") }}" alt="{{ $user->name }}" class="object-cover w-20">
        @else
            <img src="{{ url("images/cn.png") }}" alt="{{ $user->name }}" class="object-cover w-20">
        @endif
    {{ $user->name }}
    <li>
        {{$user->name}} 
        {{$user->email}} 
            <a href="{{route('users.edit', $user->id)}}"><button type="button" class="text-red-500 hover:text-red-600 border border-red-500 font-semibold rounded-md text-xs px-1 py-1 focus:outline-none">Editar</button></a>
            <a href="{{route('users.show', $user->id)}}"><button type="button" class="text-red-500 hover:text-red-600 border border-red-500 font-semibold rounded-md text-xs px-1 py-1 focus:outline-none">Detalhes</button></a>
            <a href="{{route('comments.index', $user->id)}}"><button type="button" class="text-red-500 hover:text-red-600 border border-red-500 font-semibold rounded-md text-xs px-1 py-1 focus:outline-none">Comentarios((0)</button></a>
    </li>
@endforeach
</ul>

    
@endsection