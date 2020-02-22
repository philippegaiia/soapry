
<div class="form-row">
    <div class="form-group col-md-5">
        <label for="task_id">Tâche</label>
        <select name="task_id" id="task_id" class="form-control">
            <option value="" disabled>Sélectionner une tâche</option>
            @foreach ($tasks as $task)
                <option value="{{ $task->id }}" {{ $task->id == $followup->task_id ? 'selected' : ''  }}>{{ $task->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group col-md-2">
        <label for="due_date">Date due</label>
        <input type="date" name="due_date" value="{{ old('due_date') ?? $followup->due_date}}" class="form-control">
        <small class="text-muted"> {{ $errors->first('due_date') }}</small>
    </div>

    <div class="form-group col-md-5">
    <label for="done">done</label>
    <select name="done" id="done" class="form-control">
        <option value="" disabled>Sélectionner une situation</option>

        @foreach ($followup->doneOptions() as $doneOptionKey => $doneOptionValue)
            <option value="{{ $doneOptionKey }}" {{ $followup->done == $doneOptionValue ? 'selected' : '' }}>{{ $doneOptionValue }}</option>
        @endforeach
    </select>

</div>

@csrf
