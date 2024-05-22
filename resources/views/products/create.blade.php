@extends('templates.template')

@section('title','Epizon - Nuovo prodotto')

@section('main-content')

<div class="row justify-content-center">
   <div class="col-8">
        <h3 class="text-center">Aggiungi prodotto:</h3>
        
        <form method="POST" action="{{ route('products.index') }}">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="name" class="form-label">Nome del prodotto</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="name" id="name" placeholder="Zaino">
              </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="number" class="form-control" name="price" id="price" placeholder="150">
              </div>
            <div class="mb-3">
                <label for="img" class="form-label">Immagine del prodotto</label>
                <input type="src" class="form-control" name="img" id="img" placeholder="https://picsum.photos/600/640">
              </div>
              <div class="mb-3">
                <label for="description" class="form-label">Descrizione del prodotto</label>
                <textarea class="form-control" name="description" id="description" rows="5"></textarea>
              </div>
              <div class="d-flex justify-content-center"><button type="submit" class="btn btn-success">Aggiungi</button></div>
            </form>
   </div>
</div>

@endsection