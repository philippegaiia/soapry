@extends('layouts.app')

@section('title', 'SM | Nouvel Ligne commande Fournisseur')

@section('content')
    <div class="row">
        <div class="col-md-8 mx-auto">
        <h2>Ajouter un ingredient pour la commande {{ $supplierOrder->order_ref}} ({{ $supplierOrder->supplier->name }})</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <form action={{ route('supplier_orders.supplies.store', ['supplier_order' => $supplierOrder]) }} method="POST" class="pb-4">

                @include('supplier_orders.supplies.form')

                <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Ajouter Listing</button>
            </form>
        </div>
    </div>
@endsection
