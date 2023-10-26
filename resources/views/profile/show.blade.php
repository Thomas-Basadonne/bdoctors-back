@extends('layouts.app')

@section('content')
<h1>ciaooooo</h1>
{{-- {{dd($id)}} --}}
{{-- {{dd($profile)}} --}}
{{-- {{dd($userData)}} --}}
<h5 class="mt-2 mb-0">{{$userData->user->name}}</h5>
<h5 class="mt-2 mb-0">{{$userData->description}}</h5>

@endsection