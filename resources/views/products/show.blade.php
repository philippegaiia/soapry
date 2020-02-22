@extends('layouts.app')

@section('title', 'detail for batch no' . $product->name)


{{-- // , 'Detail for' . {{ $batch->number ?? '' }}) --}}


@section('content')
    <div class="row mb-3">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h2>{{ $product->code}} - {{ $product->name}}   ({{ $product->weight}}G)</h2>


                    <a href="{{ route('products.edit', ['product' => $product]) }}" class="btn btn-sm btn-primary">MODIFIER</a>

                    <form action="{{ route('products.destroy', ['product' => $product]) }}"  method="POST" class="fm-inline">
                        @method('DELETE')
                        @csrf
                        <button
                            type="submit"
                            class="btn btn-sm btn-danger fm-inline"
                            onclick="return confirm('Etes-vous certain d\'effacer le Batch No {{ $product->code }}-{{ $product->name }} ?')">
                            EFFACER
                        </button>
                    </form>

                    <a href="{{ route('batches.index') }}" class="btn btn-sm btn-info float-right">LISTE PRODUITS</a>

                </div>
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-4">
                         <h5><strong>Catégorie: </strong>{{ $product->productCategory->name }}</h5>

                    </div>
                    <div class="col-md-4">
                        <h5><strong>Poids: </strong>{{ $product->weight }}G </h5>
                    </div>
                        <div class="col-md-4">
                            <h5>
                                <strong>Statut: </strong>{{ $product->active }}
                            </h5>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-4">
                            <h5>
                               <strong>EAN13: </strong>{{ $product->ean }}
                            </h5>
                        </div>
                        <div class="col-md-4">
                             <h5>
                                <strong>Code WP: </strong>{{ $product->wpcode }}
                             </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>
<div class="row">
    <div class="col-md-10 mx-auto">
        <div class="table-responsive">
            <table class="table table-striped table-sm table-over">
            <thead>
                <tr>
                <th>Batch No</th>
                <th>Date Production</th>
                <th>Production Ok</th>
                <th>Quantité</th>
                <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($batches as $batch)
                    <tr>
                        <td><a href="{{ route('batches.show', ['batch' => $batch])}}"> {{ $batch->product->code }}-{{ $batch->number }} </a></td>
                        <td>{{ $batch->production_date}}</td>
                        <td>{{ $batch->produced}}</td>
                        <td>{{ $batch->units}}</td>
                        <td>{{ $batch->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </div>
    </div>
</div>

    {{-- <div class="row">
        <div class="col-6">
            <h5>Confirmed Batches</h5>
            <ul>
                @foreach ($confirmed as $confirm)
                    <li>{{$confirm->product->code}} - {{$confirm->product->name}} - {{ $confirm->number}}</li>
                @endforeach
            </ul>
        </div>
         <div class="col-6">
             <h5>Planned Batches</h5>
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
            <h5>{{ $product->name}}</h5>
            <ul>
                @foreach ($product->batches as $batch)
                    <li>{{$batch->number}} - {{ $batch->temp}}</li>
                @endforeach
            </ul>
            @endforeach

        </div>

    </div> --}}

@endsection


