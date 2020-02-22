@extends('layouts.app')

@section('title')
Batches List
@endsection

@section('content')

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
                        <th>Date Prod</th>
                        <th>Prod Ok</th>
                        <th>Disponible</th>
                        <th>Quantité</th>
                        <th>Status</th>
                        <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($batches as $batch)
                            <tr>
                              <small>  <td> {{ $batch->product->code }}-{{ $batch->number }}</td>
                                <td> {{ $batch->product->name }} {{ $batch->product->weight }}G</td>
                                <td>{{ $batch->production_date}}</td>
                                <td>{{ $batch->produced}}</td>
                                <td>{{ $batch->ready_date}}</td>
                                <td>{{ $batch->units}}</td>
                                <td>{{ $batch->status }}</td>
                                <td>
                                     <a href="{{ route('batches.edit', ['batch' => $batch])}}" class="btn btn-sm btn-secondary">EDIT</a>
                                    <a href="{{ route('batches.show', ['batch' => $batch])}}" class="btn btn-sm btn-info">VOIR</a>
                                </td>
                                </small>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

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


