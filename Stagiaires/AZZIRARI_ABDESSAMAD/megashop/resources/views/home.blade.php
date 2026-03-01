@extends('layouts.app')

@section('content')

<div class="hero">
    <h1>Bienvenue chez MegaShop</h1>
    <p>Découvrez notre sélection complète d'électronique et d'électroménager</p>
    <a href="#categories" class="btn">Voir nos catégories</a>
</div>

<section id="categories">
    <h2 class="page-title">Nos Catégories</h2>

    <div class="categories-grid">

        <div class="category-card">
            <h3>💻 {{ $categories['informatique']['name'] }}</h3>
            <p>{{ $categories['informatique']['description'] }}</p>
            <a href="{{ route('categories.show', 'informatique') }}" class="btn">
                Voir les produits
            </a>
        </div>

        <div class="category-card">
            <h3>🍳 {{ $categories['petit_electromenager']['name'] }}</h3>
            <p>{{ $categories['petit_electromenager']['description'] }}</p>
            <a href="{{ route('categories.show', 'petit_electromenager') }}" class="btn">
                Voir les produits
            </a>
        </div>

        <div class="category-card">
            <h3>❄️ {{ $categories['grand_electromenager']['name'] }}</h3>
            <p>{{ $categories['grand_electromenager']['description'] }}</p>
            <a href="{{ route('categories.show', 'grand_electromenager') }}" class="btn">
                Voir les produits
            </a>
        </div>

    </div>
</section>

<section class="featured-products">
    <h2 class="page-title">Produits en Vedette</h2>

    <div class="products-grid">

        {{-- Produit Vedette 1 --}}
        <div class="product-card">
            <div class="product-image">Image Produit 1</div>
            <div class="product-info">
                <div class="product-name">Ordinateur Portable</div>
                <div class="product-price">899,99 €</div>
                <div class="product-description">Puissant et léger, parfait pour le travail</div>
                <a href="#" class="btn">Voir les détails</a>
            </div>
        </div>

        {{-- Produit Vedette 2 --}}
        <div class="product-card">
            <div class="product-image">Image Produit 2</div>
            <div class="product-info">
                <div class="product-name">Cafetière Programmable</div>
                <div class="product-price">79,99 €</div>
                <div class="product-description">Réglez l'horaire de votre café</div>
                <a href="#" class="btn">Voir les détails</a>
            </div>
        </div>

        {{-- Produit Vedette 3 --}}
        <div class="product-card">
            <div class="product-image">Image Produit 3</div>
            <div class="product-info">
                <div class="product-name">Réfrigérateur Connecté</div>
                <div class="product-price">1499,99 €</div>
                <div class="product-description">La technologie au service de la cuisine</div>
                <a href="#" class="btn">Voir les détails</a>
            </div>
        </div>

    </div>
</section>

@endsection