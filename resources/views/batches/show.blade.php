@extends('layouts.app')

@section('title', 'detail for batch no' . $batch->number)

@section('content')
<h2> <strong>Batch No: </strong>{{ $batch->product->code}}-{{ $batch->number ?? ''}}   ({{ $batch->product->name}} {{$batch->product->weight}}G) </h2>
    <div class="row mb-3">
        <div class="col-lg-5">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="card-title">
                        <h4><strong>Détails</strong></h4>
                        <hr>
                    </div>
                    <h5><strong>Disponible le: </strong>{{ $batch->ready_date }}</h5>
                    <br>
                    <h5><strong>Quantité: </strong>{{ $batch->units }}</h5>
                    <br>
                    <h5><strong>Date Production: </strong>{{ $batch->production_date }}</h5>
                    <br>
                    <h5><strong>Production OK: </strong>{{ $batch->produced }}</h5>
                    <br>
                    <h5><strong>Position: </strong>{{ $batch->status }}</h5>
                    <br>
                    <h5><strong>Chargement huiles: </strong>{{ $batch->oil_weight }} KG</h5>
                </div>
            </div>

             <a href="{{ route('batches.edit', ['batch' => $batch]) }}" class="btn  btn-primary"><i class="far fa-edit"></i>  Modifier</a>

            <form action="{{ route('batches.destroy', ['batch' => $batch]) }}" method="POST" class="fm-inline">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn  btn-danger " onclick="return confirm('Etes-vous certain d\'effacer le Batch No {{ $batch->product->code }}-{{ $batch->number }} ?')"><i class="far fa-trash-alt"> </i>  DELETE</button>
            </form>

            <a href="{{ route('batches.index') }}" class="btn  btn-info float-right"><i class="fas fa-list"></i>  Liste</a>

        </div>
        <div class="col-lg-6">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="card-title">
                        <h4><strong>Suivi de Production</strong></h4>
                    </div>

                     <div class="table-responsive">
                        <table class="table table-striped table-sm table-over">
                            <thead>
                                <tr>
                                <th>Tâche</th>
                                <th>Date</th>
                                <th>Terminée</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($followups as $followup)
                                    <tr>
                                        <td>{{ $followup->task->name}}</td>
                                        <td>{{ $followup->due_date}}</td>
                                        <td>{{ $followup->done}}</td>
                                        <td>
                                            <a href="/followups/{{ $followup->id }}/edit" class="btn btn-sm btn-primary"><i class="far fa-edit"></i></a>
                                        <form action="/batches/{{ $batch->id}}/followups/{{ $followup->id }}"  method="POST" class="fm-inline">
                                                @method('DELETE')
                                                @csrf
                                                    <button
                                                        type="submit"
                                                        class="btn btn-sm btn-danger fm-inline"
                                                        onclick="return confirm('Etes-vous certain d\'effacer la tâche de suivi de production - {{ $followup->task->name }} - prévue le {{ $followup->due_date }} ?')">
                                                    <i class="far fa-trash-alt"></i>
                                                    </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                <p>Pas de tâches encore enregistrées</p>

                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>


              <a href="/batches/{{ $batch->id }}/followups/create" class="btn btn-dark d-block"><i class="far fa-plus-square"></i> Ajouter une tâche</a>

        </div>

    </div>

@endsection

    {{-- <div class="row">
        <div class="col-md-8 ">

            <a href="{{ route('batches.edit', ['batch' => $batch]) }}" class="btn btn-primary">MODIFIER</a>

            <form action="{{ route('batches.destroy', ['batch' => $batch]) }}" method="POST" class="fm-inline">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger " onclick="return confirm('Etes-vous certain d\'effacer le Batch No {{ $batch->product->code }}-{{ $batch->number }} ?')">DELETE</button>
            </form>

            <a href="/batches/{{ $batch->id }}/followups/create" class="btn btn-dark float">AJOUTER TACHE</a>

            <a href="{{ route('batches.index') }}" class="btn btn-info float-right">RETOUR LISTE</a>

        </div>
    </div> --}}







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
            <h5>{{ $product->name}}</h5>
            <ul>
                @foreach ($product->batches as $batch)
                    <li>{{$batch->number}} - {{ $batch->temp}}</li>
                @endforeach
            </ul>
            @endforeach

        </div>

    </div> --}}


