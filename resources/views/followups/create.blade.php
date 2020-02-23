@extends('layouts.app')

@section('title')
New Production Batch
@endsection

@section('content')
    <div class="row mb-3">
        <div class="col-md-8 mx-auto">
            <h3><strong>Modifier tâche pour le Batch No {{ $batch->product->code}} - {{ $batch->number}} </strong> </h3>
            <h3><strong>({{ $batch->product->name }} - {{ $batch->product->weight }}G )</strong></h3>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-8 mx-auto">
            <form action="/batches/{{ $batch->id }}/followups" method="POST" class="pb-4">

                @include('followups.form')

                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>
@endsection


