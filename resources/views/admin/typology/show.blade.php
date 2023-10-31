@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-3 fs-1">{{ $typology->name }}</h1>
        <ul class="mb-3">
            <li>Nome: {{ $typology->name }}</li>
        </ul>

        <a href="{{ route('admin.typology.edit', $typology->id) }}" class="btn ms-btn-primary me-1">Modifica Specializzazione</a>
        <a href="#" class="btn btn-danger me-1" data-bs-toggle="modal"
            data-bs-target="#project-{{ $typology->id }}">Elimina</a>
        <a href="{{ route('admin.typology.index') }}" class="btn ms-btn-primary">Home</a>

    </div>
    <div class="modal fade" id="project-{{ $typology->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Sei sicuro di voler cancellare
                        {{ $typology->name }}?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                    <form action="{{ route('admin.typology.destroy', $typology) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Elimina</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection