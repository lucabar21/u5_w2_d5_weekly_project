@extends('templates.template')

@section('title', 'Epizon - Indice')

@section('main-content')

@if ($products->count())
<h3 class="text-center">Prodotti disponibili:</h3>
<div class="row justify-content-center my-3 gap-3">
    @foreach ( $products as $product)
  <div class="col-3">
        <div class="card h-100 d-flex flex-column justify-content-between">
            <img src="{{$product->img}}" class="card-img-top" alt="photo">
            <div class="card-body d-flex flex-column align-items-center justify-content-between">
              <h5 class="card-title text-center">{{$product->name}}</h5>
              <p class="card-text text-center">{{$product->description}}</p>
                <a href="{{route('products.show', ['id'=>$product])}}" class="btn btn-primary">Dettagli</a>
              </div>
          </div>
  </div>
    @endforeach
</div>
@else
<div class="alert alert-danger" role="alert">
    Non ci sono prodotti disponibili!
  </div>
@endif
@endsection