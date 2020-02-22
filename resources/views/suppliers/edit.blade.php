@extends('layouts.app')

@section('title', 'SM | Modifier Fournisseur')

@section('content')
    <div class="row">
        <div class="col-md-10 mx-auto">
            <h1>Modifier un fournisseur</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 mx-auto">
            <form action={{ route('suppliers.update', $supplier->id) }} method="POST" class="pb-4">
                @method('PATCH')

                @include('suppliers.form')

                <button type="submit" class="btn btn-primary">Modifier</button>
            </form>
        </div>
    </div>
@endsection
