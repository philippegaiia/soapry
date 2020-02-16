@extends('layouts.app')

@section('title', 'detail for batch no' . $product->name)


{{-- // , 'Detail for' . {{ $batch->number ?? '' }}) --}}


@section('content')
    <div class="row mb-3">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h2> <strong>{{ $product->code}} - {{ $product->name}}   ({{ $product->weight}}G)</strong> </h2>
                </div>
                <div class="card-body">
                    <h4><strong>Catégorie: </strong>{{ $product->productCategory->name }}</h4>
                    <br>
                    <h4><strong>Poids: </strong>{{ $product->weight }}</h4>
                    <br>
                    <h4><strong>Statut: </strong>{{ $product->active }}</h4>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 mx-auto">

            <a href="{{ route('products.edit', ['product' => $product]) }}" class="btn btn-primary">Edit</a>

            <form action="{{ route('products.destroy', ['product' => $product]) }}" method="POST" class="fm-inline">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger ">DELETE</button>
            </form>

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


