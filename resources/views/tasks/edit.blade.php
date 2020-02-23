@extends('layouts.app')

@section('title')
Modifier une tâche de suivi de production
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h1>Modifier une tâche</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <form action={{ route('tasks.update', ['task' => $task] )}} method="POST" class="pb-4">
                @method('PATCH')
                @include('tasks.form')

                <button type="submit" class="btn btn-primary"><i class="far fa-plus-square px-1"> </i>  Ajouter</button>
            </form>
        </div>
    </div>
@endsection
