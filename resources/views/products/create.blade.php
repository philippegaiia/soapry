@extends('layouts.app')

@section('title')
New Product
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h1>Ajouter un produit</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <form action={{ route('products.store') }} method="POST" class="pb-4">

                @include('products.form')

                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>
@endsection
