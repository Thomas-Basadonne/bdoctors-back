@extends('layouts.app')

@section('content')
    @auth
        <h1 class="m-4 text-center">
            <div class="card-header text-center">Benvenuto {{ Auth::user()->name }}</div>
        </h1>
        

        <div class="container">
            <h2 class="mt-4">Elenco Profili</h2>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Descrizione</th>
                        <th>Servizi</th>
                        <th>Indirizzo</th>
                        <th>Visibile</th>
                        <th>Azioni</th> 
                    </tr>
                </thead>
                <tbody>
                    @foreach($profiles as $profile)
                        <tr>
                            <td>
                                @if ($profile->user)
                                    {{ $profile->user->name }}
                                @else
                                    Nome non disponibile
                                @endif
                            </td>
                            <td>{{ $profile->description }}</td>
                            <td>{{ $profile->services }}</td>
                            <td>{{ $profile->address }}</td>
                            <td>{{ $profile->visible ? 'Sì' : 'No' }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('admin.docprofile.show', $profile->id) }}">
                                    vedi
                                </a>
                                <a class="btn btn-info" href="{{ route('admin.docprofile.edit', $profile->id) }}">
                                    edit
                                </a>
                                <div class="col-sm">
                                    <form action="{{ route('admin.docprofile.destroy', $profile->id) }}" method="post">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </div>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
       
    @endauth
</div>
@endsection
