<h1>Liste  des produits</h1>
 - {{ $country }}

@if(true)
  is true
@else 
  is false
@endif


@foreach ( $tableau as $tab )
    {{ $tab }}
@endforeach