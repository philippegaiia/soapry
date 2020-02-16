
{{-- <div class="row">
    <div class="col-md-8 mx-auto"> --}}
        <div class="form-group">
            <label for="code">Code</label>
            <input type="text" name="code" value="{{ old('code') ?? $product->code}}" class="form-control">
            <p class="text-muted"> {{ $errors->first('code') }}</p>
         </div>

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ old('name') ?? $product->name}}" class="form-control">
            <p class="text-muted"> {{ $errors->first('name') }}</p>
        </div>

        <div class="form-group">
        <label for="product_category_id">Categorie</label>
        <select name="product_category_id" id="product_category_id" class="form-control">
            <option value="" disabled>Sélectionner une catégorie</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id}}" {{ $category->id == $product->product_category_id ? 'selected' : ''  }}> {{ $category->name }}</option>
            @endforeach
        </select>
        </div>

        <div class="form-group">
        <label for="active">Statut</label>
            <select name="active" id="active" class="form-control">
                <option value="" disabled>Sélectionner une situation</option>
                @foreach ($product->activeOptions() as $activeOptionKey => $activeOptionValue)
                    <option value="{{ $activeOptionKey }}" {{ $product->active == $activeOptionValue ? 'selected' : '' }}>{{ $activeOptionValue }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="weight">Poids (g)</label>
            <input type="number" name="weight" id="weight" class="form-control" value="{{ old('weight') ?? $product->weight}}">
            <p class="text-muted"> {{ $errors->first('weight') }}</p>

        </div>

        <div class="form-group">
            <label for="comments">Informations Suivi de Production</label>
            <textarea class="form-control" name="comments" id="comments">{{ $product->comments }}</textarea>
            <p class="text-muted"> {{ $errors->first('comments') }} </p>
        </div>
   {{-- </div>
</div> --}}





@csrf
