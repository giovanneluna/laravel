<h1>Listagem de usuarios</h1>
<ul>
@foreach ($users as $user)
    <li>
        {{$users->name}}
        {{$users->email}}

    </li>
@endforeach
</ul>