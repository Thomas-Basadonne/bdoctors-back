@extends('layouts.app')

@section('content')
    <h1 class=" m-4 text-center">
        <div class="card-header text-center">Il profilo di: {{ Auth::user()->name }}</div>
    </h1>
@endsection
