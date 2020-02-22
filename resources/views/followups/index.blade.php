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
        <th></th>
        </tr>
    </thead>
    <tbody>
        @forelse ($followups as $followup)
            <tr>
                <td>{{ $followup->task->id}}</td>
                <td>{{ $followup->due_date}}</td>
                <td>{{ $followup->done}}</td>
                <td>
                    <a href="/followups/{{ $followup->id }}/edit" class="btn btn-sm btn-secondary"><i class="far fa-edit"></i></a>
                    <form action="/followups/{{ $followup->id }}"  method="POST" class="fm-inline">
                    @method('DELETE')
                    @csrf
                        <button
                            type="submit"
                            class="btn btn-sm btn-danger fm-inline"
                            onclick="return confirm('Etes-vous certain d\'effacer la tâche de suivi de production - {{ $followup->task->name }} - prévue le {{ $followup->due_date }} ?')">
                           <i class="far fa-trash-alt"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @empty
        <p>no records yet</p>

        @endforelse
    </tbody>
</div>

@endsection
