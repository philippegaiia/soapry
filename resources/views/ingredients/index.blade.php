@extends('layouts.app')

@section('title', 'SM | Liste Ingredients')


@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1>Liste des Produits</h1>
            <p><a href="{{ route('ingredients.create') }}">Ajouter un Ingredient</a></p>
            <div class="table-responsive">
                <table class="table table-striped table-sm table-over">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Inci</th>
                        <th>Categorie</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ingredients as $ingredient)
                        <tr>
                            <td>{{ $ingredient->code }}</td>
                            <td>{{ $ingredient->name }} </td>
                            <td>{{ $ingredient->weight }}</td>
                            <td>{{ $ingredient->ingredientCategory->name }}</td>
                            <td>{{ $ingredient->active}}</td>
                            <td>
                                <a href="{{ route('ingredients.edit', ['ingredient' => $ingredient])}}" class="btn btn-sm btn-primary"><i class="far fa-edit"></i></a>
                                <a href="{{ route('ingredients.show', ['ingredient' => $ingredient])}}" class="btn btn-sm btn-info"><i class="far fa-eye"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

        </div>
    </div>
@endsection
    {{-- <div class="row">
        <div class="col-6">
            <h3>Confirmed Batches</h3>
            <ul>
                @foreach ($confirmed as $confirm)
                    <li>{{$confirm->ingredient->code}} - {{$confirm->ingredient->name}} - {{ $confirm->number}}</li>
                @endforeach
            </ul>
        </div>
         <div class="col-6">
             <h3>Planned Batches</h3>
            <ul>
                @foreach ($planned as $plan)
            <li>{{$plan->ingredient->code}} - {{ $plan->ingredient->name}} - {{ $plan->number}}</li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            @foreach ($ingredients as $ingredient)
            <h4>{{ $ingredient->name}}</h4>
            <ul>
                @foreach ($ingredient->batches as $batch)
                    <li>{{$batch->number}} - {{ $batch->temp}}</li>
                @endforeach
            </ul>
            @endforeach

        </div>

    </div> --}}




