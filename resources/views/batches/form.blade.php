<div class="form-row">

    <div class="form-group col-md-2">
        <label for="number">Batch No</label>
        <input type="text" name="number" value="{{ $batch->number == '' ? 'TEMP' . ($lastBatch + '1000') : $batch->number}}" class="form-control">
        <p class="text-muted"> {{ $errors->first('number') }}</p>
    </div>

   <div class="form-group col-md-5">
    <label for="product_id">Product</label>
    <select name="product_id" id="product_id" class="form-control">
        <option value="" disabled>Select a Product</option>
        @foreach ($products as $product)
    <option value="{{ $product->id }}" {{ $product->id == $batch->product_id ? 'selected' : ''  }}> {{ $product->code }}  - {{ $product->name}} {{$product->weight}}G</option>
        @endforeach
    </select>
    </div>

    <div class="form-group col-md-5">
    <label for="status">Status</label>
    <select name="status" id="status" class="form-control">
        <option value="" disabled>Sélectionner une situation</option>

        @foreach ($batch->statusOptions() as $statusOptionKey => $statusOptionValue)
            <option value="{{ $statusOptionKey }}" {{ $batch->status == $statusOptionValue ? 'selected' : '' }}>{{ $statusOptionValue }}</option>
        @endforeach
    </select>

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
    <div class="form-group col-md-4">
        <label class="" for="production_date">Date Production</label>
        <input type="date" name="production_date" value="{{ old('production_date') ?? $batch->production_date}}" class="form-control">
        <p class="text-muted"> {{ $errors->first('production_date') }} </p>
    </div>
    <div class="form group col-md-2">
        <label for="produced">Production OK</label>
        <select name="produced" id="produced" class="form-control">
            <option value="" disabled>Sélectionner une situation</option>

            @foreach ($batch->producedOptions() as $producedOptionKey => $producedOptionValue)
                <option value="{{ $producedOptionKey }}" {{ $batch->produced == $producedOptionValue ? 'selected' : '' }}>{{ $producedOptionValue }}</option>
            @endforeach
        </select>
    </div>
     <div class="form-group col-md-6">
                <label class="" for="ready_date">Date Disponible Vente</label>
                <input type="date" name="ready_date" value="{{ old('ready_date') ?? $batch->ready_date}}" class="form-control">
                <p class="text-muted"> {{ $errors->first('ready_date') }} </p>
            </div>
</div>

<div class="form-group">
    <label for="comments">Informations Suivi de Production</label>
    <textarea class="form-control" name="comments" id="comments">{{ $batch->comments }}</textarea>
    <p class="text-muted"> {{ $errors->first('comments') }} </p>
</div>


@csrf
