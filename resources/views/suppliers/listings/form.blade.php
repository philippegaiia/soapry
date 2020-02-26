        <div class="form-group">
            <label for="code">Code</label>
            <input type="text" name="code" value="{{ old('code') ?? $listing->code}}" class="form-control">
            <small class="text-danger">  {{ $errors->first('code') }}</small>
         </div>

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ old('name') ?? $listing->name}}" class="form-control">
            <small class="text-danger">  {{ $errors->first('name') }}</small>
        </div>

        <div class="form-group">
        <label for="ingredient_id">Ingrédient</label>
        <select name="ingredient_id" id="ingredient_id" class="form-control">
            <option value="" disabled>Sélectionner une ingrédient</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id}}" {{ $category->id == $listing->ingredient_id ? 'selected' : ''  }}> {{ $category->name }}</option>
            @endforeach
        </select>
        </div>

        <div class="form-group">
        <label for="bio">Culture</label>
            <select name="bio" id="bio" class="form-control">
                <option value="" disabled>Sélectionner une situation</option>
                @foreach ($listing->bioOptions() as $bioOptionKey => $bioOptionValue)
                    <option value="{{ $bioOptionKey }}" {{ $listing->bio == $bioOptionValue ? 'selected' : '' }}>{{ $bioOptionValue }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
        <label for="active">Statut</label>
            <select name="active" id="active" class="form-control">
                <option value="" disabled>Sélectionner une situation</option>
                @foreach ($listing->activeOptions() as $activeOptionKey => $activeOptionValue)
                    <option value="{{ $activeOptionKey }}" {{ $listing->active == $activeOptionValue ? 'selected' : '' }}>{{ $activeOptionValue }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="comments">Informations sur l'ingrédient'</label>
            <textarea class="form-control" name="comments" id="comments">{{ $listing->comments }}</textarea>
            <p class="text-muted"> {{ $errors->first('comments') }} </p>
        </div>
@csrf
