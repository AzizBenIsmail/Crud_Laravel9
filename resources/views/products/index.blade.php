<!-- resources/views/products/index.blade.php -->

@extends('layouts.app')
<head>
    @vite(['resources/sass/app.scss'])
    @vite(['resources/js/app.js'])
</head>
@section('content')
    <h1>Liste des produits</h1>

    <table>
        <thead>
        <tr>
            <th>Nom</th>
            <th>Description</th>
            <th>Prix</th>
            <th>Stock</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->stock }}</td>
                <td>
                    <a href="{{ route('products.show', $product->id) }}">Voir</a>
                    <a href="{{ route('products.edit', $product->id) }}">Éditer</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <a href="{{ route('products.create') }}">Ajouter un produit</a>
@endsection
