<div class="form-group mb-3">
    <label for="number">Batch Number</label>
    <input type="text" name="number" value="{{ old('number') ?? $batch->number}}" class="form-control">
    <p class="text-muted"> {{ $errors->first('number') }}</p>
</div>

<div class="form-group">
    <label for="temp">Temporary Number</label>
    <input type="text" name="temp" value="{{ old('temp') ?? $batch->temp}}" class="form-control">
    <p class="text-muted"> {{ $errors->first('temp') }} </p>
</div>

<div class="form-group">
    <label for="status">Status</label>
    <select name="status" id="status" class="form-control">
        <option value="" disabled>Select Production Status</option>

        @foreach ($batch->statusOptions() as $statusOptionKey => $statusOptionValue)
            <option value="{{ $statusOptionKey }}" {{ $batch->status == $statusOptionValue ? 'selected' : '' }}>{{ $statusOptionValue }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="product_id">Product</label>
    <select name="product_id" id="product_id" class="form-control">
        <option value="" disabled>Select a Product</option>
        @foreach ($products as $product)
             <option value="{{ $product->id }}" {{ $product->id == $batch->product_id ? 'selected' : ''  }}> {{ $product->code }}   - {{ $product->name}}</option>
        @endforeach
    </select>
</div>
@csrf
