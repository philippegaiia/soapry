@extends('layouts.app')

@section('title')
New Production Batch
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Ajouter un batch</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action={{ route('batches.store') }} method="POST" class="pb-4">

                @include('batches.form')


                <button type="submit" class="btn btn-primary">Ajouter</button>
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
    </div> --}}
    {{-- <div class="row">
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

    <div class="row">
        <div class="col-md-12">
            <h1>Liste des Batches</h1>
            <p><a href="{{ route('batches.create') }}">Ajouter un bacth</a></p>
            <div class="table-responsive">
                <table class="table table-striped table-sm table-over">
                <thead>
                    <tr>
                    <th>Batch No</th>
                    <th>Product</th>
                    <th>Quantité</th>
                    <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($batches as $batch)
                        <tr>
                            <td><a href="{{ route('batches.show', ['batch' => $batch])}}"> {{ $batch->number }} </a></td>
                            <td>{{ $batch->product->code }} - {{ $batch->product->name }} {{ $batch->product->weight }}G</td>
                            <td>{{ $batch->units}}</td>
                            <td>{{ $batch->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </div>
        </div>
    </div>

@endsection


