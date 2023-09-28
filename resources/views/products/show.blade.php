<!-- resources/views/products/show.blade.php -->

@extends('layouts.app')
<head>
    @vite(['resources/sass/app.scss'])
    @vite(['resources/js/app.js'])
</head>
@section('content')
    <h1>Détails du produit</h1>

    <p><strong>Nom :</strong> {{ $product->name }}</p>
    <p><strong>Description :</strong> {{ $product->description }}</p>
    <p><strong>Prix :</strong> {{ $product->price }}</p>
    <p><strong>Stock :</strong> {{ $product->stock }}</p>

    <a href="{{ route('products.index') }}">Retour à la liste des produits</a>
@endsection
