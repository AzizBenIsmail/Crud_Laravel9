<!-- resources/views/products/edit.blade.php -->

@extends('layouts.app')
<head>
    @vite(['resources/sass/app.scss'])
    @vite(['resources/js/app.js'])
</head>
@section('content')
    <h1>Éditer le produit</h1>

    <form method="POST" action="{{ route('products.update', $product->id) }}">
        @csrf
        @method('PUT')
        <label for="name">Nom du produit</label>
        <input type="text" name="name" id="name" value="{{ $product->name }}">

        <!-- Ajoutez d'autres champs pré-remplis pour la description, le prix, le stock, etc. -->

        <button type="submit">Mettre à jour</button>
    </form>

    <a href="{{ route('products.index') }}">Retour à la liste des produits</a>
@endsection
