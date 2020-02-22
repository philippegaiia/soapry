@extends('layouts.app')

@section('title', 'SM | Nouvel Ingredient')

@section('content')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h1>Ajouter un ingredient</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <form action={{ route('ingredients.store') }} method="POST" class="pb-4">

                @include('ingredients.form')

                <button type="submit" class="btn btn-primary">Modifier</button>
            </form>
        </div>
    </div>
@endsection
