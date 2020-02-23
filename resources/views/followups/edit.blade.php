@extends('layouts.app')

@section('title')
Modifier Suivi Production
@endsection

@section('content')
    <div class="row mb-3">
        <div class="col-md-8 mx-auto">
            <h3><strong>Modifier tâche pour le Batch No {{ $followup->batch->product->code}} - {{ $followup->batch->number}} </strong> </h3>
            <h3><strong>({{ $followup->batch->product->name }} - {{ $followup->batch->product->weight }}G )</strong></h3>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-md-8 mx-auto">
            <form action="/followups/{{ $followup->id }}" method="POST" class="pb-4">

                @method('PATCH')

                @include('followups.form')

                <button type="submit" class="btn btn-lg btn-primary">Modifer</button>

                <form action="/followups/{{ $followup->id}}"  method="POST" class="fm-inline">
                    @method('DELETE')
                    @csrf
                        <button
                            type="submit"
                            class="btn btn-lg btn-danger float-right"
                            onclick="return confirm('Etes-vous certain d\'effacer la tâche de suivi de production - {{ $followup->task->name }} - prévue le {{ $followup->due_date }} ?')">
                        <i class="far fa-trash-alt pr-2"> </i>
                             Delete
                        </button>
                </form>
            </form>
        </div>
    </div>


@endsection


