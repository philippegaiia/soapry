@extends('layouts.app')

@section('title', 'SM | Order No' . $supplierOrder->order_ref)

@section('content')
<h3> <strong>Commande: {{ $supplierOrder->order_ref ?? ''}} </strong>({{ $supplierOrder->supplier->name}})</h3>
    <div class="row mb-3">
        <div class="col-lg-5">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="card-title">
                        <h4><strong>Détails de la commande</strong></h4>
                        <hr>
                    </div>
                    <h5><strong>Date Commande: </strong>{{ $supplierOrder->order_date->format('D d M') }}</h5>
                    <br>
                    <h5><strong>Date Livraison: </strong>{{ $supplierOrder->delivery_date->format('D d M') }}</h5>
                    <br>
                    <h5><strong>Statut: </strong>{{ $supplierOrder->status }}</h5>
                    <br>
                    <h5><strong>No Confirmation : </strong>{{ $supplierOrder->confirmation_no }}</h5>
                    <br>
                    <h5><strong>No BL: </strong>{{ $supplierOrder->bl_no }}</h5>
                    <br>
                    <h5><strong>No Facture: </strong>{{ $supplierOrder->invoice_no }}</h5>
                    <br>
                <h5><strong>Montant HT (Euros): </strong>{{ $supplierOrder->amount}}</h5>
                </div>
            </div>

             <a href="{{ route('suppliers.supplier_orders.edit', ['supplier' => $supplierOrder->supplier_id ,'supplier_order' => $supplierOrder->id]) }}" class="btn  btn-primary "><i class="far fa-edit"></i>  Modifier</a>

            <form action="{{ route('supplier_orders.destroy', ['supplier_order' => $supplierOrder->id]) }}" method="POST" class="fm-inline">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn  btn-danger " onclick="return confirm('Etes-vous certain d\'effacer cette commande ?')"><i class="far fa-trash-alt"> </i>  DELETE</button>
            </form>

            <a href="{{ route('supplier_orders.index') }}" class="btn  btn-info float-right"><i class="fas fa-list"></i>  Liste</a>

        </div>
        <div class="col-lg-6">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="card-title">
                        <h4><strong>Ingrédients commandés</strong></h4>
                    </div>

                     <div class="table-responsive">
                        <table class="table table-striped table-sm table-over">
                            <thead>
                                <tr>
                                <th>Ingrédient</th>
                                <th>No Lot</th>
                                <th>Qté</th>
                                <th>Prix</th>
                                <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($supplies as $supply)
                                    <tr>
                                        <td>{{ $supply->listing->name}}</td>
                                        <td>{{ $supply->batch}}</td>
                                        <td>{{ $supply->quantity}}</td>
                                        <td>{{ $supply->price}}</td>
                                        <td>
                                            <a href="/supplies/{{ $supply->id }}/edit" class="btn btn-sm btn-primary"><i class="far fa-edit"></i></a>
                                            {{-- <form action="supplier_orders.destroy, []"  method="POST" class="fm-inline">
                                                @method('DELETE')
                                                @csrf
                                                    <button
                                                        type="submit"
                                                        class="btn btn-sm btn-danger fm-inline"
                                                        onclick="return confirm('Etes-vous certain d\'effacer la tâche de suivi de production - {{ $supply->task->name }} - prévue le {{ $supply->due_date }} ?')">
                                                    <i class="far fa-trash-alt"></i>
                                                    </button>
                                            </form> --}}
                                        </td>
                                    </tr>
                                @empty
                                <p>Pas de matières premières commandées</p>

                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>


              <a href="{{ route('supplier_orders.supplies.create', $supplierOrder->supplier_id )}}" class="btn btn-dark d-block"><i class="far fa-plus-square"></i> Ajouter un ingrédient à la commande</a>

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

            <a href="/batches/{{ $batch->id }}/supplys/create" class="btn btn-dark float">AJOUTER TACHE</a>

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


