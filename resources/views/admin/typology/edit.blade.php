@extends('layouts.app')

@section('content')

<div class="container py-3">
    <h1 class="mb-3">Riempi i campi:</h1>

    <form action="{{ route('admin.typology.update', $typology) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $typology->name) }}">
        </div>

        <div class="mb-3">
            <input type="submit" value="Save" class="btn ms-btn-primary">
        </div>
    </form>

</div>
@endsection
