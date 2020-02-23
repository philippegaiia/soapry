@extends('layouts.app')

@section('title')
SM | Catégories Ingrédient
@endsection

@section('content')
<h1 class="mb-3">Categories Ingrédient</h1>
    <div class="row">
        <div class="col-md-8 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h3> Liste des catégories</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm table-over">
                            <thead>
                                <tr>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($categories as $category)
                                    <tr>
                                        <td>{{ $category->code }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>
                                            <a href="{{ route('ingredient_categories.edit', $category->id )}}" class="btn btn-sm btn-primary"><i class="far fa-edit"></i></a>
                                            <form action="{{ route('ingredient_categories.destroy', $category->id) }}"  method="POST" class="fm-inline">
                                                @method('DELETE')
                                                @csrf
                                                <button
                                                    type="submit"
                                                    class="btn btn-sm btn-danger fm-inline"
                                                    onclick="return confirm('Etes-vous certain d\'effacer la catégorie ingredient {{ $category->code }}-{{ $category->name }} ?')">
                                                    <i class="far fa-trash-alt"> </i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                <h3>Pas encore de catégories enregistrées</h3>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <form action="{{ route('ingredient_categories.store') }}" method="post" >
                @csrf
                <div class="card">
                    <div class="card-body">
                    <div class="card-title">
                        <h3> Ajouter une catégorie</h3>
                    </div>
                    <div class="form-group">
                        <label for="code">Code</label>
                        <input type="text" name="code" class="form-control" id="code" value="{{ old('code') ?? '' }}" required>
                        <small class="text-danger">  {{ $errors->first('code') }}</small>
                    </div>

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{ old('name') ?? '' }}" required>
                        <small class="text-danger">  {{ $errors->first('name') }}</small>
                    </div>

                    <button class="btn btn-primary btn-block" type="submit"><i class="far fa-plus-square"> </i> Ajouter Catégorie</button>

                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

    {{-- <div class="row">
        <div class="col-6">
            <h3>Confirmed Batches</h3>
            <ul>
                @foreach ($confirmed as $confirm)
                    <li>{{$confirm->product->code}} - {{$confirm->product->name}} - {{ $confirm->number}}</li>
                @endforeach
            </ul>
        </div>
         <div class="col-6">
             <h3>Planned Batches</h3>
            <ul>
                @foreach ($planned as $plan)
            <li>{{$plan->product->code}} - {{ $plan->product->name}} - {{ $plan->number}}</li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            @foreach ($products as $product)
            <h4>{{ $product->name}}</h4>
            <ul>
                @foreach ($product->batches as $batch)
                    <li>{{$batch->number}} - {{ $batch->temp}}</li>
                @endforeach
            </ul>
            @endforeach

        </div>

    </div> --}}




