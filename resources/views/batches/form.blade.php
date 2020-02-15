<div class="form-row">
   <div class="form-group col-md-6">
    <label for="product_id">Product</label>
    <select name="product_id" id="product_id" class="form-control">
        <option value="" disabled>Select a Product</option>
        @foreach ($products as $product)
             <option value="{{ $product->id }}" {{ $product->id == $batch->product_id ? 'selected' : ''  }}> {{ $product->code }}   - {{ $product->name}}</option>
        @endforeach
    </select>
    </div>

    <div class="form-group col-md-6">
        <label for="number">Numéro Batch</label>
        <input type="text" name="number" value="TEMP{{ $lastBatch + '1000'}}" class="form-control">
        <p class="text-muted"> {{ $errors->first('number') }}</p>
    </div>
</div>

<div class="form-row">
   <div class="form-group col-md-6">
    <label for="oil_weight">Chargement en huiles (kg)</label>
   <input type="number" name="oil_weight" id="oil_weight" class="form-control" value="{{ old('oil_weight') ?? $batch->oil_weight}}">
        <p class="text-muted"> {{ $errors->first('oil_weight') }}</p>

    </div>

    <div class="form-group col-md-6">
        <label for="units">Quantité (unitaire)</label>
        <input type="number" name="units" value="{{ old('units') ?? $batch->units }}" class="form-control">
        <p class="text-muted"> {{ $errors->first('units') }}</p>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <div class="form-row align-items-center">
            <div class="col-auto my-1">
                <label class="" for="production_date">Date Production</label>
                <input type="date" name="production_date" value="{{ old('production_date') ?? $batch->production_date}}" class="form-control">
                <p class="text-muted"> {{ $errors->first('production_date') }} </p>
            </div>
            <div class="col-auto my-1">
                <div class="custom-control custom-checkbox mr-sm-2">
                    <input name="" type="checkbox" class="custom-control-input" id="customControlAutosizing">
                    <label class="custom-control-label" for="customControlAutosizing">Production OK</label>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group col-md-6">
        <div class="form-row align-items-center">
            <div class="col-auto my-1">
                <label class="" for="ready_date">Date Disponible Vente</label>
                <input type="checkbox" name="ready_date" value="{{ old('ready_date') ?? $batch->ready_date}}" class="form-control">
                <p class="text-muted"> {{ $errors->first('ready_date') }} </p>
            </div>
            {{-- <div class="col-auto my-1">
                <div class="custom-control custom-checkbox mr-sm-2">
                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                    <label class="custom-control-label" for="customControlAutosizing">Dispo OK</label>
                </div>
            </div> --}}
        </div>
    </div>
</div>



<div class="form-group">
    <label for="status">Status</label>
    <select name="status" id="status" class="form-control">
        <option value="" disabled>Sélectionner une situation</option>

        @foreach ($batch->statusOptions() as $statusOptionKey => $statusOptionValue)
            <option value="{{ $statusOptionKey }}" {{ $batch->status == $statusOptionValue ? 'selected' : '' }}>{{ $statusOptionValue }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="comment">Informations Suivi de Production</label>
<textarea class="form-control" name="comment" id="comments">{{ $batch->comments }}</textarea>
                <p class="text-muted"> {{ $errors->first('ready_date') }} </p>

</div>


@csrf
