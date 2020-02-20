
<div class="form-group">
    <label for="code">Code</label>
    <input type="text" name="code" value="{{ old('code') ?? $task->code}}" class="form-control">
    <p><small class="text-danger">  {{ $errors->first('code') }}</small></p>
    </div>

<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" value="{{ old('name') ?? $task->name}}" class="form-control">
    <p><small class="text-danger">  {{ $errors->first('name') }}</small></p>
</div>

<div class="form-group">
<label for="active">Statut</label>
    <select name="active" id="active" class="form-control">
        <option value="" disabled>Sélectionner une situation</option>
        @foreach ($task->activeOptions() as $activeOptionKey => $activeOptionValue)
            <option value="{{ $activeOptionKey }}" {{ $task->active == $activeOptionValue ? 'selected' : '' }}>{{ $activeOptionValue }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="decription">Informations Suivi de Production</label>
    <textarea class="form-control" name="description" id="description">{{ $task->description }}</textarea>
    <p class="text-muted"> {{ $errors->first('description') }} </p>
</div>


@csrf
