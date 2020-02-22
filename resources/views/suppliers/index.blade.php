@extends('layouts.app')

@section('title', 'SM | Fournisseurs')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1>Liste des Fournisseurs</h1>

            <p><a href="{{ route('suppliers.create') }}" class="btn btn-primary "><i class="fas fa-plus"></i> Ajouter</a></p>

            <div class="table-responsive">
                <table class="table table-striped table-sm table-over">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Nom</th>
                        <th>Code Postal</th>
                        <th>Ville</th>
                        <th>Pays</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($suppliers as $supplier)
                        <tr>
                    <td>{{ $supplier->code }}</td>
                    <td>{{ $supplier->name }} </td>
                    <td>{{ $supplier->zip }}</td>
                    <td>{{ $supplier->city }}</td>
                    <td>{{ $supplier->country }}</td>
                    <td>{{ $supplier->active }}</td>
                    <td>
                        <a href="{{ route('suppliers.edit', ['supplier' => $supplier])}}" class="btn btn-sm btn-info">EDIT</a>
                        <a href="{{ route('suppliers.show', ['supplier' => $supplier])}}" class="btn btn-sm btn-info">VOIR</a>
                    </td>
                    </tr>

                    @empty
                    <h3>Il n'y a pas de Fournisseurs enregistrés</h3>

                    @endforelse
                </tbody>

        </div>
    </div>

    {{-- <div class="row">
        <div class="col-6">
            <h3>Confirmed Batches</h3>
            <ul>
                @foreach ($confirmed as $confirm)
                    <li>{{$confirm->supplier->code}} - {{$confirm->supplier->name}} - {{ $confirm->number}}</li>
                @endforeach
            </ul>
        </div>
         <div class="col-6">
             <h3>Planned Batches</h3>
            <ul>
                @foreach ($planned as $plan)
            <li>{{$plan->supplier->code}} - {{ $plan->supplier->name}} - {{ $plan->number}}</li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            @foreach ($suppliers as $supplier)
            <h4>{{ $supplier->name}}</h4>
            <ul>
                @foreach ($supplier->batches as $batch)
                    <li>{{$batch->number}} - {{ $batch->temp}}</li>
                @endforeach
            </ul>
            @endforeach

        </div>

    </div> --}}

@endsection


