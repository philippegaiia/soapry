@extends('layouts.app')

@section('title')
Commandes Fournisseurs
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2>Liste des Approvisionnements</h2>
            <p><a href="{{ route('supplier_orders.index') }}">Ajouter une commande</a></p>
            <div class="table-responsive">
                <table class="table table-striped table-sm table-over">
                    <thead>
                        <tr>
                            <th>No Commande</th>
                            <th>Produit</th>
                            <th>Quantité</th>
                            <th>Prix Unitaire</th>
                            <th>Date Livraison</th>
                            <th>Statut</th>
                            <th>Stock</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($supplies as $supply)
                            <tr class="{{ $supply->supplierOrder->status == 'Livrée' ? 'table-success' : ''}}">
                                <td>{{ $supply->supplierOrder->order_ref }}</td>
                                <td>{{ $supply->listing->name}} </td>
                                <td>{{ number_format($supply->quantity, 2)}}</td>
                                <td>{{ number_format($supply->price, 2) }}</td>
                                <td>{{ $supply->supplierOrder->delivery_date->format('d F') }}</td>
                                <td>{{ $supply->supplierOrder->status}}</td>
                                <td>{{ $supply->status }}</td>
                                <td>
                                    <a href="{{ route('supplier_orders.show', ['supplier_order' => $supply->supplierOrder])}}" class="btn btn-sm btn-info"><i class="far fa-eye"></i> </a>
                                </td>
                        </tr>
                        @empty Pas de produits approvisionnés ou en commande
                        @endforelse
                    </tbody>
                </table>
            </div>
    </div>
    @endsection
