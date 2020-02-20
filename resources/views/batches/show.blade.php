@extends('layouts.app')

@section('title', 'detail for batch no' . $batch->number)


{{-- // , 'Detail for' . {{ $batch->number ?? '' }}) --}}


@section('content')
    <div class="row mb-3">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3> <strong>Batch No: {{ $batch->product->code}} - {{ $batch->number ?? ''}}   ({{ $batch->product->name}} {{$batch->product->weight}}G)</strong> </h3>
                </div>
                <div class="card-body">
                    <h4><strong>Disponible le: </strong>{{ $batch->ready_date }}</h4>
                    <br>
                    <h4><strong>Quantité: </strong>{{ $batch->units }}</h4>
                    <br>

                    <h4><strong>Date Production: </strong>{{ $batch->production_date }}    <strong>Production OK: </strong>{{ $batch->produced }}</h4>
                    <br>
                    <h4><strong>Position: </strong>{{ $batch->status }}</h4>
                    <br>
                    <h4><strong>Chargement huiles: </strong>{{ $batch->oil_weight }}</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 mx-auto">

            <a href="{{ route('batches.edit', ['batch' => $batch]) }}" class="btn btn-primary">MODIFIER</a>

            <form action="{{ route('batches.destroy', ['batch' => $batch]) }}" method="POST" class="fm-inline">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger " onclick="return confirm('Etes-vous certain d\'effacer le Batch No {{ $batch->product->code }}-{{ $batch->number }} ?')">DELETE</button>
            </form>

            <a href="{{ route('batches.index') }}" class="btn btn-dark float">AJOUTER TACHE</a>

            <a href="{{ route('batches.index') }}" class="btn btn-info float-right">RETOUR LISTE</a>

        </div>
    </div>


    <hr>

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

@endsection


