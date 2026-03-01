@extends('layouts.app')

@section('content')

<div class="breadcrumb">
    <a href="{{ route('home') }}">Accueil</a>
    <span>/</span>
    <strong>{{ $label }}</strong>
</div>

<h1 class="page-title">💻 {{ $label }}</h1>

<div class="products-grid">

    @foreach ($products as $p)
        <div class="product-card">

            <div class="product-image">
                <img src="{{ asset('images/' . $p['image']) }}" alt="{{ $p['name'] }}">
            </div>

            <div class="product-info">
                <div class="product-name">{{ $p['name'] }}</div>
                <div class="product-price">{{ number_format($p['price'],2,',',' ') }} €</div>
                <div class="product-description">{{ $p['description'] }}</div>

                <a href="{{ route('product.show', $p['id']) }}" class="btn">Détails</a>
            </div>

        </div>
    @endforeach

</div>

@endsection