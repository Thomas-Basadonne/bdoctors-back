@extends('layouts/app')

@section('content')
    <h1 class="m-4 text-center">Il tuo profilo</h1>
    {{-- onsubmit="return validateForm('admin.profile.store')" --}}

    <form action="{{route('admin.profile.store')}}" class="background container form-control border-5 border-warning rounded-5 py-4"  method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label class="mt-2 mb-2 label-bg " for="services">*Servizio</label>
            <input type="text" name="services" id="services"
                class="form-control text-dark @error('services') is-invalid @enderror" value="{{ old('services') }}" required>
            @error('services')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-4">
            <label class="mt-2 mb-2 label-bg " for="address">*Indirizzo</label>
            <input type="text" name="address" id="address" class="form-control @error('address') is-invalid @enderror"
                value="{{ old('address') }}" required>
            @error('address')
                <div class="invalid-feedback text-dark">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-4">
            <label class="mt-2 mb-2 label-bg " for="description">*Descrizione</label>
            <input minlength="11" maxlength="15" type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror"
                value="{{ old('description') }}" required>
            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-4">
            <label class="mt-2 mb-2 label-bg " for="visible">*visibilita</label>
            <input  type="text" name="visible" id="visible" class="form-control @error('visible') is-invalid @enderror"
                value="{{ old('visible') }}" required>
            @error('visible')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        {{-- <div class="mb-4">
            <label class="mt-2 mb-2 label-bg " for="cover_image" class="">*immagine profilo</label>
            <input onchange="previewImage()" name="cover_image" id="cover_image" type="file"
                class="form-control @error('cover_image') is-invalid @enderror" required>
            @error('cover_image')
                <div class="invalid-feedback mb-4 mt-0"> {{ $message }} </div>
            @enderror

            <hr>

            <span class="mt-2 mb-3 text-center label-bg ">Anteprima Immagine:</span>
            <img id="preview">

        </div> --}}

        <div class="text-center">
            <button class="btn btn-dark text-center" type="submit">Aggiungi</button>
        </div>
    </form>
@endsection