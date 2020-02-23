@extends('layouts.app')

@section('title', 'Edit Detail for batch ' . $product->name)


@section('content')
    <div class="row">
        <div class="col-md-8 mx-auto">
        <h1>Modifier Produit {{ $product->name }} {{ $product->weight}}G</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7 mx-auto">
            <form action="{{ route('products.update', ['product' => $product]) }}" method="POST" class="pb-4">
                @method('PATCH')

                @include('products.form')

                <button type="submit" class="btn btn-primary"><i class="far fa-edit"></i> Modifier Produit</button>
            </form>
        </div>
</div
@endsection
