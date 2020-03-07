@extends('layouts.app')

@section('title')
Commandes Fournisseurs
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1>Liste des Commandes Fournisseurs</h1>
            <p><a href="{{ route('suppliers.index') }}">Ajouter une commande</a></p>
            <div class="table-responsive">
                <table class="table table-striped table-sm table-over">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Fournisseur</th>
                            <th>Date Cde</th>
                            <th>Date Livraison</th>
                            <th>Statut</th>
                            <th>Montant</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr class="{{ $order->status == 'Livrée' ? 'table-success' : ''}}">
                        <td>{{ $order->order_ref }}</td>
                        <td>{{ $order->supplier->name}} </td>
                        <td>{{ $order->order_date->format('d F') }}</td>
                        <td>{{ $order->delivery_date->format('d F') }}</td>
                        <td>{{ $order->status}}</td>
                        <td>Montant</td>
                        <td>
                            {{-- <a href="{{ route('suppliers.supplier_orders.create', ['supplier' => $order->supplier->id])}}" class="btn btn-sm btn-secondary"><i class="fas fa-plus"></i> Commande </a> --}}
                            <a href="{{ route('supplier_orders.show', ['supplier_order' => $order])}}" class="btn btn-sm btn-info"><i class="far fa-eye"></i> </a>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
    @endsection
