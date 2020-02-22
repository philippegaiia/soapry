@extends('layouts.app')

@section('title')
Product List
@endsection

@section('content')

<div class="table-responsive">
    <table class="table table-striped table-sm table-over">
    <thead>
        <tr>
        <th>Tâche</th>
        <th>Date</th>
        <th>Terminée</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($followups as $followup)
            <tr>
                <td>{{ $followup->task->id}}</td>
                <td>{{ $followup->due_date}}</td>
                <td>{{ $followup->done}}</td>
            </tr>
        @empty
        <p>no records yet</p>

        @endforelse
    </tbody>
</div>

@endsection
