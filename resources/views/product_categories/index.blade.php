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
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->code }}</td>
                            <td>{{ $category->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </div>
        </div>
    </div>

    {{-- <div class="row"> --}}
        <div class="row">
            <form action="{{route('product_categories.store')}}" method="post" >
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

                    <button class="btn btn-primary" type="submit">Add Category</button>
                </div></div>
                </div>

            </form>
        </div>
    {{-- </div> --}}


@endsection

    {{-- <div class="row">
        <div class="col-6">
            <h3>Confirmed Batches</h3>
            <ul>
                @foreach ($confirmed as $confirm)
                    <li>{{$confirm->product->code}} - {{$confirm->product->name}} - {{ $confirm->number}}</li>
                @endforeach
            </ul>
        </div>
         <div class="col-6">
             <h3>Planned Batches</h3>
            <ul>
                @foreach ($planned as $plan)
            <li>{{$plan->product->code}} - {{ $plan->product->name}} - {{ $plan->number}}</li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            @foreach ($products as $product)
            <h4>{{ $product->name}}</h4>
            <ul>
                @foreach ($product->batches as $batch)
                    <li>{{$batch->number}} - {{ $batch->temp}}</li>
                @endforeach
            </ul>
            @endforeach

        </div>

    </div> --}}




