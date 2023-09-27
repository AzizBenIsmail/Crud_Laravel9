<!-- resources/views/products/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Créer un nouveau produit</h1>

    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Nom du produit</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="description">Description du produit</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="price">Prix du produit</label>
            <input type="text" name="price" id="price" class="form-control">
        </div>

        <div class="form-group">
            <label for="stock">Stock du produit</label>
            <input type="text" name="stock" id="stock" class="form-control">
        </div>

        <!-- Ajoutez d'autres champs selon vos besoins -->

        <button type="submit" class="btn btn-primary">Créer</button>
    </form>
@endsection
