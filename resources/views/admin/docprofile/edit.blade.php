@extends('layouts.app')

@section('content')
    <h1 class="m-4 text-center">Modifica il tuo profilo</h1>

    <form action="{{ route('admin.docprofile.update', $profile->id) }}" class="background container form-control border-5 border-warning rounded-5 py-4" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') <!-- Usa il metodo HTTP PUT per l'aggiornamento -->

        <div class="mb-4">
            <label class="mt-2 mb-2 label-bg" for="services">Servizio</label>
            <input type="text" name="services" id="services" class="form-control text-dark @error('services') is-invalid @enderror" value="{{ old('services', $profile->services) }}" required>
            @error('services')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-4">
            <label class="mt-2 mb-2 label-bg" for="address">Indirizzo</label>
            <input type="text" name="address" id="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address', $profile->address) }}" required>
            @error('address')
                <div class="invalid-feedback text-dark">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-4">
            <label class="mt-2 mb-2 label-bg" for="description">Descrizione</label>
            <input minlength="11" maxlength="15" type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('description', $profile->description) }}" required>
            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-4">
            <label class="mt-2 mb-2 label-bg" for="visible">Visibilità</label>
            <input type="text" name="visible" id="visible" class="form-control @error('visible') is-invalid @enderror" value="{{ old('visible', $profile->visible) }}" required>
            @error('visible')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="text-center">
            <button class="btn btn-dark text-center" type="submit">Salva Modifiche</button>
        </div>
    </form>
@endsection
