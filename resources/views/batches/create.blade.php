@extends('layouts.app')

@section('title')
New Production Batch
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Add a Production Batch</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action={{ route('batches.store') }} method="POST" class="pb-4">

                @include('batches.form')


                <button type="submit" class="btn btn-primary">Add Batch</button>
            </form>
        </div>
    </div>

    <hr>

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

@endsection


