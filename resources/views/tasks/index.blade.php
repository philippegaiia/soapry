 @extends('layouts.app')

@section('title')
Liste des tâches
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1>Liste des Tâches</h1>
            <p><a href="{{ route('tasks.create') }}">Ajouter une tâche</a></p>
            <div class="table-responsive">
                <table class="table table-striped table-sm table-over">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Statut</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($tasks as $task)
                        <tr>
                    <td>{{ $task->code }}</td>
                    <td>{{ $task->name }} </td>
                    <td>{{ $task->active }}</td>

                    <td>
                        <a href="{{ route('tasks.edit', ['task' => $task])}}" class="btn btn-sm btn-info">EDIT</a>
                        <a href="{{ route('tasks.show', ['task' => $task])}}" class="btn btn-sm btn-info">VOIR</a>
                    </td>
                    </tr>
                    @empty
                    <p>
                        Pas de tâche encore enregistré
                    </p>


                    @endforElse
                </tbody>

        </div>
    </div>

@endsection


