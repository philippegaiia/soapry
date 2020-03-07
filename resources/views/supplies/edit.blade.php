@extends('layouts.app')

@section('title', 'SM | Mettre à jour Ingrédient Commandés')

@section('content')
    <div class="row">
        <div class="col-md-8 mx-auto mb-4">
            <h2>Mettre à jour ingredient {{ $supply->listing->name }} </h2>
            <h3>Commande {{ $supply->supplierOrder->order_ref}} ({{ $supply->supplierOrder->supplier->name }})</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <form action={{ route('supplies.update', ['supply' => $supply->id]) }} method="POST" class="pb-4">
                @method('PATCH')

                @include('supplies.form')

                <button type="submit" class="btn btn-primary"><i class="far fa-edit"></i> Mettre à jour</button>
            </form>
        </div>

@endsection
