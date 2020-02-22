
{{-- <div class="row">
    <div class="col-md-8 mx-auto"> --}}

<div class="form-row">
    <div class="form-group col-md-4">
        <label for="code">Code</label>
        <input type="text" name="code" value="{{ old('code') ?? $supplier->code}}" class="form-control">
        <small class="text-danger">  {{ $errors->first('code') }}</small>
    </div>

    <div class="form-group col-md-8">
        <label for="name">Nom société</label>
        <input type="text" name="name" value="{{ old('name') ?? $supplier->name}}" class="form-control">
        <small class="text-danger">  {{ $errors->first('name') }}</small>
    </div>
</div>

<div class="form-group">
    <label for="active">Statut</label>
    <select name="active" id="active" class="form-control">
        <option value="" disabled>Sélectionner une situation</option>
        @foreach ($supplier->activeOptions() as $activeOptionKey => $activeOptionValue)
            <option value="{{ $activeOptionKey }}" {{ $supplier->active == $activeOptionValue ? 'selected' : '' }}>{{ $activeOptionValue }}</option>
        @endforeach
    </select>
</div>

<div class="form-row">

    <div class="form-group col-md-5">
        <label for="contact">Nom du contact</label>
        <input type="text" name="contact" id="contact" class="form-control" value="{{ old('contact') ?? $supplier->contact}}">
        <small class="text-danger">  {{ $errors->first('contact') }}</small>
    </div>

    <div class="form-group col-md-4">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') ?? $supplier->email}}">
        <small class="text-danger">  {{ $errors->first('email') }}</small>
    </div>

    <div class="form-group col-md-3">
        <label for="tel">Tel</label>
        <input type="text" name="tel" id="tel" class="form-control" value="{{ old('tel') ?? $supplier->tel}}">
        <small class="text-danger">  {{ $errors->first('tel') }}</small>
    </div>

</div>

<div class="form-group">
    <label for="address1">Adresse</label>
    <input type="text" name="address1" id="address1" class="form-control" value="{{ old('address1') ?? $supplier->address1}}">
    <small class="text-danger">  {{ $errors->first('address1') }}</small>
</div>

<div class="form-group">
    <label for="address2">Adresse (complément)</label>
    <input type="text" name="address2" id="address2" class="form-control" value="{{ old('address2') ?? $supplier->address2}}">
    <small class="text-danger">  {{ $errors->first('address2') }}</small>
</div>

<div class="form-row">

    <div class="form-group col-md-2">
        <label for="zip">Code Postal</label>
        <input type="text" name="zip" id="zip" class="form-control" value="{{ old('zip') ?? $supplier->zip}}">
        <small class="text-danger">  {{ $errors->first('zip') }}</small>
    </div>

    <div class="form-group col-md-5">
        <label for="city">Ville</label>
        <input type="text" name="city" id="city" class="form-control" value="{{ old('city') ?? $supplier->city}}">
        <small class="text-danger">  {{ $errors->first('city') }}</small>
    </div>

    <div class="form-group col-md-5">
        <label for="country">Pays</label>
        <input type="text" name="country" id="country" class="form-control" value="{{ old('country') ?? $supplier->country}}">
        <small class="text-danger">  {{ $errors->first('country') }}</small>
    </div>
</div>

<div class="form-group">
    <label for="infos">Infos</label>
    <textarea class="form-control" name="infos" id="infos">{{ $supplier->infos }}</textarea>
    <small class="text-danger">  {{ $errors->first('country') }}</small>
</div>

@csrf
