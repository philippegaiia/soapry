@extends('layouts.app')

@section('title', 'SM | Nouvel Ingredient')

@section('content')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h1>Modifier un ingredient</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <form action={{ route('ingredients.update', $ingredient->id) }} method="POST" class="pb-4">
                @method('PATCH')
                @include('ingredients.form')

                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>
@endsection
