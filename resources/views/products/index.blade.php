@extends('layouts.app')

@section('title')
Product List
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1>Liste des Produits</h1>
            <p><a href="{{ route('products.create') }}">Ajouter un produit</a></p>
            <div class="table-responsive">
                <table class="table table-striped table-sm table-over">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Poids (g)</th>
                        <th>Categorie</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                    <td>{{ $product->code }}</td>
                    <td>{{ $product->name }} </td>
                    <td>{{ $product->weight }}</td>
                    <td>{{ $product->productCategory->name }}</td>
                    <td>{{ $product->active}}</td>
                    <td>
                        <a href="{{ route('products.edit', ['product' => $product])}}" class="btn btn-sm btn-primary"><i class="far fa-edit"></i> </a>
                        <a href="{{ route('products.show', ['product' => $product])}}" class="btn btn-sm btn-info"><i class="far fa-eye"></i> </a>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
        </div>
    </div>

    {{-- <div class="row">
        <div class="col-6">
            <h3>Confirmed Batches</h3>
            <ul>
                @foreach ($confirmed as $confirm)
                    <li>{{$confirm->product->code}} - {{$confirm->product->name}} - {{ $confirm->number}}</li>
                @endforeach
            </ul>
        </div>
         <div class="col-6">
             <h3>Planned Batches</h3>
            <ul>
                @foreach ($planned as $plan)
            <li>{{$plan->product->code}} - {{ $plan->product->name}} - {{ $plan->number}}</li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            @foreach ($products as $product)
            <h4>{{ $product->name}}</h4>
            <ul>
                @foreach ($product->batches as $batch)
                    <li>{{$batch->number}} - {{ $batch->temp}}</li>
                @endforeach
            </ul>
            @endforeach

        </div>

    </div> --}}

@endsection


