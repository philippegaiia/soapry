@extends('layouts.app')

@section('title', 'SM|' . $supplier->name)


@section('content')
    <div class="row mb-3">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h2> <strong>{{ $supplier->code}} - {{ $supplier->name}}</strong> </h2>
                </div>
                <div class="card-body">
                    <div class="row mb-2">

                        <div class="col-md-4">
                            <h4><strong>Contact: </strong>{{ $supplier->contact }}</h4>
                        </div>

                        <div class="col-md-4">
                            <h4><strong>Email: </strong>{{ $supplier->email }}G </h4>
                        </div>

                        <div class="col-md-4">
                            <h4>
                                <strong>Tel: </strong>{{ $supplier->tel }}
                            </h4>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-4">
                            <h4>
                               <strong>Code Postal: </strong>{{ $supplier->zip }}
                            </h4>
                        </div>
                        <div class="col-md-4">
                             <h4>
                                <strong>Ville: </strong>{{ $supplier->city }}
                             </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 mx-auto">

            <a href="{{ route('suppliers.edit', ['supplier' => $supplier]) }}" class="btn btn-primary">Edit</a>

            <form action="{{ route('suppliers.destroy', ['supplier' => $supplier]) }}" method="POST" class="fm-inline">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger ">DELETE</button>
            </form>

             <a href="{{ route('suppliers.index') }}" class="btn btn-info float-right">RETOUR LISTE</a>

        </div>
    </div>


    <hr>
{{-- <div class="row">
    <div class="col-md-10 mx-auto">
        <div class="table-responsive">
            <table class="table table-striped table-sm table-over">
            <thead>
                <tr>
                <th>Batch No</th>
                <th>Date supplierion</th>
                <th>supplierion Ok</th>
                <th>Quantité</th>
                <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($batches as $batch)
                    <tr>
                        <td><a href="{{ route('batches.show', ['batch' => $batch])}}"> {{ $batch->supplier->code }}-{{ $batch->number }} </a></td>
                        <td>{{ $batch->supplierion_date}}</td>
                        <td>{{ $batch->produced}}</td>
                        <td>{{ $batch->units}}</td>
                        <td>{{ $batch->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </div>
    </div>
</div> --}}


@endsection


