@extends('layouts.app')

@section('title')
Ajouter une tâche de suivi de production
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h1>Ajouter une tâche</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <form action={{ route('tasks.store') }} method="POST" class="pb-4">

                @include('tasks.form')

                <button type="submit" class="btn btn-primary"><i class="far fa-plus-square px-1"> </i>  Ajouter</button>
            </form>
        </div>
    </div>
@endsection
