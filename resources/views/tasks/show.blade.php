@extends('layouts.app')

@section('title', 'detail for tasks' . $task->name)


@section('content')
    <div class="row mb-3">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h2> <strong>Tâche: {{ $task->name}} </strong> </h2>
                </div>
                <div class="card-body">
                    <h4><strong>Code: </strong>{{ $task->code }}</h4>
                    <br>

                        <h4><strong>Description </strong></h4>

                     <p class="border border-dark rounded-lg p-2">
                     {{ $task->description }}
                    <p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 mx-auto">

            <a href="{{ route('tasks.edit', ['task' => $task]) }}" class="btn btn-primary">Edit</a>

            <form action="{{ route('tasks.destroy', ['task' => $task]) }}" method="POST" class="fm-inline">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger ">DELETE</button>
            </form>

        </div>
    </div>
@endsection
