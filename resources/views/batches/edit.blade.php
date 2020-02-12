@extends('layouts.app')

@section('title', 'Edit Detail for batch ' . $batch->number)


@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Edit Batch {{ $batch->number ?? ''}} ({{ $batch->product->name }})</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="{{ route('batches.update', ['batch' => $batch]) }}" method="POST" class="pb-4">
                @method('PATCH')
                @include('batches.form')

                <button type="submit" class="btn btn-primary">Update Batch</button>
            </form>
        </div>
    </div>
@endsection
