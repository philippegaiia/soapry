@extends('layouts.app')

@section('title', 'SM | Modifier Commande Fournisseur')

@section('content')
    <div class="row">
        <div class="col-md-8 mx-auto">
        <h2>Modifier une commande pour le fournisseur {{ $supplier->name}}</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <form action={{ route('suppliers.supplier_orders.update', ['supplier' => $order->supplier_id, 'supplier_order' => $order->id]) }} method="POST" class="pb-4">
                @method('PATCH')
                @include('suppliers.supplier_orders.form')

                <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Modidifer Commande Fournisseur</button>
            </form>
        </div>
    </div>
@endsection
