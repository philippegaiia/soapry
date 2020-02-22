@extends('layouts.app')

@section('title', 'SM|Nouveau Fournisseur')

@section('content')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h1>Ajouter un fournisseur</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <form action={{ route('suppliers.store') }} method="POST" class="pb-4">

                @include('suppliers.form')

                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>
@endsection
