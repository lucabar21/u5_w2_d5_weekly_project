@extends('templates.template')

@section('title', 'Epizon - Dettaglio prodotto')

@section('main-content')
<div class="row justify-content-center">
    <div class="col-8">
<h3 class="text-center my-3">{{strToUpper($product->name)}}</h3>
<div style="border-radius: 20px; overflow:hidden"><img class="w-100" src="{{$product->img}}" alt="photo"></div>
<div class="text-center my-3">
    <p> <strong>Descrizione del prodotto:</strong> <br/>
        {{$product->description}}</p>
    <p> <strong>Prezzo:</strong> <br/>
        € {{$product->price}}</p>
</div>
@auth
<div class="d-flex justify-content-center gap-3">
    <a href="{{route('products.edit', ['id'=>$product])}}" class="btn btn-warning">Modifica</a>
    <form action="{{ route('products.destroy', ['id' => $product]) }}" method="POST">
        @method('DELETE')
        @csrf
    <button class="btn btn-danger">Cancella</button>
    </form>
</div>
    </div>
</div>
@endauth
@endsection