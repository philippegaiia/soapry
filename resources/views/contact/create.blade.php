@extends('layouts.app')

@section('title')
Contact
@endsection

@section('content')
    <div class="row">

        <div class="col-md-6 m-auto">
            <h1>Envoyer un ticket</h1>

            @if (! session()->has('message'))
                <form action="{{ route('contact.store') }}" method='POST'>
                @csrf
                    <div class="form-group mb-3">
                        <label for="number">Name</label>
                        <input type="text" name="name" value="{{ old('name') ?? ''}}" class="form-control">
                        <p class="text-muted"> {{ $errors->first('name') }}</p>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" value="{{ old('email') ?? ''}}" class="form-control">
                        <p class="text-muted"> {{ $errors->first('email') }} </p>
                    </div>

                    <div class="form-group">
                        <label for="temp">Message</label>
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                        <p class="text-muted"> {{ $errors->first('message') }} </p>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Send Message</button>

                </form>

            @endif


        </div>
    </div>

@endsection

