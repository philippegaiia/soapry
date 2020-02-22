
{{-- <div class="row">
    <div class="col-md-8 mx-auto"> --}}
        <div class="form-group">
            <label for="code">Code</label>
            <input type="text" name="code" value="{{ old('code') ?? $ingredient->code}}" class="form-control">
            <small class="text-danger">  {{ $errors->first('code') }}</small>
         </div>

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ old('name') ?? $ingredient->name}}" class="form-control">
            <small class="text-danger">  {{ $errors->first('name') }}</small>
        </div>

        <div class="form-group">
        <label for="ingredient_category_id">Categorie</label>
        <select name="ingredient_category_id" id="ingredient_category_id" class="form-control">
            <option value="" disabled>Sélectionner une catégorie</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id}}" {{ $category->id == $ingredient->ingredient_category_id ? 'selected' : ''  }}> {{ $category->name }}</option>
            @endforeach
        </select>
        </div>

        <div class="form-group">
        <label for="active">Statut</label>
            <select name="active" id="active" class="form-control">
                <option value="" disabled>Sélectionner une situation</option>
                @foreach ($ingredient->activeOptions() as $activeOptionKey => $activeOptionValue)
                    <option value="{{ $activeOptionKey }}" {{ $ingredient->active == $activeOptionValue ? 'selected' : '' }}>{{ $activeOptionValue }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="inci">INCI</label>
            <input type="text" name="inci" id="inci" class="form-control" value="{{ old('inci') ?? $ingredient->inci}}">
            <small class="text-danger">  {{ $errors->first('inci') }}</small>
        </div>

         <div class="form-group">
            <label for="cas">CAS</label>
            <input type="number" name="cas" id="cas" class="form-control" value="{{ old('cas') ?? $ingredient->cas}}">
            <small class="text-danger">  {{ $errors->first('cas') }}</small>
        </div>

         <div class="form-group">
            <label for="einecs">EINECS</label>
            <input type="text" name="einecs" id="einecs" class="form-control" value="{{ old('einecs') ?? $ingredient->einecs}}">
            <small class="text-danger">  {{ $errors->first('einecs') }}</small>
            <p class="text-muted"> {{ $errors->first('einecs') }}</p>
        </div>

        <div class="form-group">
            <label for="comments">Informations sur l'ingredient</label>
            <textarea class="form-control" name="comments" id="comments">{{ $ingredient->comments }}</textarea>
            <p class="text-muted"> {{ $errors->first('comments') }} </p>
        </div>






@csrf
