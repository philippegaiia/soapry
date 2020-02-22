@extends('layouts.app')

@section('title')
SM | Mise à jour Catégorie
@endsection

@section('content')


        <div class="col-md-8 mb-3 mx-auto">
            <form action="{{route('product_categories.update', $product_category->id)}}" method="post" >
                @method('PATCH')
                @csrf
                <div class="card mb-3">
                    <div class="card-body">

                        <div class="card-title">
                            <h3> Modifier une catégorie ({{ $product_category->code }} - {{ $product_category->name }})</h3>
                        </div>

                        <div class="form-group">
                            <label for="code">Code</label>
                            <input type="text" name="code" class="form-control" id="code" value="{{ old('code') ?? $product_category->code }}" required>
                            <small class="text-danger">  {{ $errors->first('code') }}</small>
                        </div>

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name" value="{{ old('name') ?? $product_category->name }}" required>
                            <small class="text-danger">  {{ $errors->first('name') }}</small>
                        </div>
                    </div>
                </div>


                  <span class="d-block"><button class="btn btn-primary " type="submit"><i class="far fa-plus-square"> </i> Modifier Catégorie</button></span>


            </form>
        </div>
    </div>



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




