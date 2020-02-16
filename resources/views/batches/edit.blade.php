@extends('layouts.app')

@section('title', 'Edit Detail for batch ' . $batch->number)


@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Edit Batch {{ $batch->number ?? ''}} ({{ $batch->product->name }})</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7">
            <form action="{{ route('batches.update', ['batch' => $batch]) }}" method="POST" class="pb-4">
                @method('PATCH')

                @include('batches.form')

                <button type="submit" class="btn btn-primary">Update Batch</button>
            </form>
        </div>
    <div class="row">
        <div class="col-md-12 overflow-auto">
            <h3>Liste des Batches</h3>
            <div class="table-responsive">
                <table class="table table-striped table-sm table-over">
                <thead>
                    <tr>
                    <th>Batch No</th>
                    <th>Product</th>
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
                            <td> {{ $batch->product->name }} {{ $batch->product->weight }}G</td>
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
@endsection
