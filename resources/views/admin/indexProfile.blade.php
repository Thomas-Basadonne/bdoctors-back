@extends('layouts/app')

@section('content')
    <h1 class=" m-4 text-center">
        <div class="card-header text-center">Benvenuto {{ Auth::user()->name }}</div>
    </h1>
    <div>
        <a class="dropdown-item" href="{{ url('admin/profile/create') }}">{{__('crea il tuo profilo da dottore')}}</a>
    </div>
@endsection