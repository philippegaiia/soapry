
{{-- <div class="row">
    <div class="col-md-8 mx-auto"> --}}
        <div class="form-group">
            <label for="code">Code</label>
            <input type="text" name="code" value="{{ old('code') ?? $product->code}}" class="form-control">
            <small class="text-danger">  {{ $errors->first('code') }}</small>
         </div>

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ old('name') ?? $product->name}}" class="form-control">
            <small class="text-danger">  {{ $errors->first('name') }}</small>
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
            <small class="text-danger">  {{ $errors->first('weight') }}</small>
        </div>

         <div class="form-group">
            <label for="ean">EAN13</label>
            <input type="number" name="ean" id="ean" class="form-control" value="{{ old('ean') ?? $product->ean}}">
            <small class="text-danger">  {{ $errors->first('ean') }}</small>
        </div>

         <div class="form-group">
            <label for="wpcode">Code WP</label>
            <input type="text" name="wpcode" id="wpcode" class="form-control" value="{{ old('wpcode') ?? $product->wpcode}}">
            <small class="text-danger">  {{ $errors->first('wpcode') }}</small>
            <p class="text-muted"> {{ $errors->first('wpcode') }}</p>
        </div>

        <div class="form-group">
            <label for="comments">Informations sur le produit</label>
            <textarea class="form-control" name="comments" id="comments">{{ $product->comments }}</textarea>
            <p class="text-muted"> {{ $errors->first('comments') }} </p>
        </div>






@csrf
