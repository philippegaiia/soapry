@extends('layouts.app')

@section('title')
Modifier Suivi Production
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <h2>Modifier tâche pour le Batch No {{ $followup->batch->product->code}} - {{ $followup->batch->number}} ({{ $followup->batch->product->name }} - {{ $followup->batch->product->weight }}G )</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="/followups/{{ $followup->id }}" method="POST" class="pb-4">

                @method('PATCH')

                @include('followups.form')

                <button type="submit" class="btn btn-primary">MODIFIER</button>
            </form>
        </div>
    </div>

    <hr>

@endsection


