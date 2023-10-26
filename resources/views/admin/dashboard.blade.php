@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            {{ __('Dashboard') }}
        </h2>
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('User Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if (auth()->user()->is_admin)
                            <a href="{{ url('admin/docprofile') }}">{{ __('Vai alla lista dottori') }}</a>
                            <a href="{{ url('admin/docprofile/create') }}">{{ __('crea il tuo profilo da dottore') }}</a>
                        @else
                        
                        <a href="{{ url('profile/show') }}">{{ __('vai al tuo profilo da dottore') }}</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
