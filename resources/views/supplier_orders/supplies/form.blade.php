    <div class="form-group">
        <label for="listing_id">Ingrédient à commander</label>
        <select name="listing_id" id="listing_id" class="form-control">
            <option value="" disabled>Sélectionner un ingrédient</option>
            @foreach ($listings as $listing)
                <option value="{{ $listing->id }}" {{ $listing->id == $supply->listing_id ? 'selected' : '' }}>{{ $listing->name }}</option>
            @endforeach
        </select>

    </div>

        <div class="form-group">
            <label for="quantity">Quantité (kg)</label>
            <input type="string" name="quantity" value="{{ old('quantity') ?? $supply->quantity}}" class="form-control">
            <small class="text-danger">  {{ $errors->first('quantity') }}</small>
        </div>

        <div class="form-group">
            <label for="price">Prix (/unité)</label>
            <input type="string" name="price" value="{{ old('price') ?? $supply->price}}" class="form-control">
            <small class="text-danger">  {{ $errors->first('price') }}</small>
        </div>

        <div class="form-group">
            <label for="expiry_date">Date Expiration</label>
            <input type="date" name="expiry_date" value="{{ old('expiry_date') ?? $supply->expiry_date->format('Y-m-d')}}" class="form-control">
            <small class="text-danger">  {{ $errors->first('expiry_date') }}</small>
        </div>

        <div class="form-group">
        <label for="status">Stock</label>
        <select name="status" id="status" class="form-control">
            <option value="" disabled>Choisir Disponibilité de l'ingrédient</option>
            @foreach ($supply->statusOptions() as $statusOptionKey => $statusOptionValue)
                <option value="{{ $statusOptionKey }}" {{ $supply->status == $statusOptionValue ? 'selected' : '' }}>{{ $statusOptionValue }}</option>
            @endforeach
        </select>
        </div>

@csrf
