@extends('layouts.app')

@section('title')
Categories List
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Categories</h1>
            <div class="table-responsive">
                <table class="table table-striped table-sm table-over">
                    <thead>
                        <tr>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->code }}</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <a href="{{ route('ingredient_categories.edit', ['category' => $category])}}" class="btn btn-sm btn-primary"><i class="far fa-edit"></i></a>
                                    <a href="{{ route('ingredient_categories.show', ['category' => $category])}}" class="btn btn-sm btn-info"><i class="far fa-eye"></i></a>
                                     <form action="{{ route('ingredient_categories.destroy', ['ingredient_categories' => $category]) }}"  method="POST" class="fm-inline">
                                        @method('DELETE')
                                        @csrf
                                        <button
                                            type="submit"
                                            class="btn btn-sm btn-danger fm-inline"
                                            onclick="return confirm('Etes-vous certain d\'effacer la catégorie ingredient {{ $category->code }}-{{ $category->name }} ?')">
                                            <i class="far fa-trash-alt"> </i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <form action="{{route('ingredient_categories.store')}}" method="post" >
            @csrf
            <div class="col-12">

                <div class="form-inline">

                    <div class="col-md-4 mb-3">
                        <label for="code">Code</label>
                        <input type="text" name="code" class="form-control" id="code" value="{{ old('code') ?? '' }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{ old('name') ?? '' }}" required>
                    </div>

                    <button class="btn btn-primary fm-inline" type="submit">Add Category</button>

                </div>
            </div>
        </form>
    </div>
@endsection

    {{-- <div class="row">
        <div class="col-6">
            <h3>Confirmed Batches</h3>
            <ul>
                @foreach ($confirmed as $confirm)
                    <li>{{$confirm->ingredient->code}} - {{$confirm->ingredient->name}} - {{ $confirm->number}}</li>
                @endforeach
            </ul>
        </div>
         <div class="col-6">
             <h3>Planned Batches</h3>
            <ul>
                @foreach ($planned as $plan)
            <li>{{$plan->ingredient->code}} - {{ $plan->ingredient->name}} - {{ $plan->number}}</li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            @foreach ($ingredients as $ingredient)
            <h4>{{ $ingredient->name}}</h4>
            <ul>
                @foreach ($ingredient->batches as $batch)
                    <li>{{$batch->number}} - {{ $batch->temp}}</li>
                @endforeach
            </ul>
            @endforeach

        </div>

    </div> --}}




