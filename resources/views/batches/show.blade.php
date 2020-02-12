@extends('layouts.app')

@section('title', 'detail for batch no' . $batch->number)


{{-- // , 'Detail for' . {{ $batch->number ?? '' }}) --}}


@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Detail for batch {{ $batch->number ?? ''}} ({{ $batch->product->name }})</h1>
            <p ><a href="{{ route('batches.edit', ['batch' => $batch]) }}" class="btn btn-primary fm-inline">Edit</a></p>

            <form action="{{ route('batches.destroy', ['batch' => $batch]) }}" method="POST" class="fm-inline">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger ">DELETE</button>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <p><strong>Status: </strong>{{ $batch->status }}</p>
            <p><strong>Temp: </strong>{{ $batch->temp }}</p>
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


