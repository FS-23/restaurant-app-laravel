liste des menus
<a href="/menus/create">Add new</a>
@foreach ($menus as $menu)
<div>
    <h1>{{ $menu -> title }}</h1>
    <p>{{ $menu -> ingredient  }}</p>
    <strong>{{ $menu -> price }} MAD</strong>
</div>
@endforeach