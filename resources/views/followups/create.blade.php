@extends('layouts.app')

@section('title')
New Production Batch
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
        <h2>Ajouter un job pour le Batch No {{ $batch->product->code}} {{ $batch->number}}</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="/batches/{{ $batch->id }}/followups" method="POST" class="pb-4">

                @include('followups.form')

                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>

    <hr>

@endsection


