@extends('layouts.app')

@section('title', 'SM | Nouveazu Listing')

@section('content')
    <div class="row">
        <div class="col-md-8 mx-auto">
        <h2>Ajouter un ingredient pour le fournisseur {{ $supplier->name}}</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <form action={{ route('suppliers.listings.store', ['supplier' => $supplier]) }} method="POST" class="pb-4">

                @include('suppliers.listings.form')

                <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Ajouter Listing</button>
            </form>
        </div>
    </div>
@endsection
