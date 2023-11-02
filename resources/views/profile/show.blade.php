@extends('layouts.app')

@section('content')

{{-- {{dd($userData->user->name)}} --}}

    <div class="container mt-5">
    
        <div class="row d-flex justify-content-center">
            
            <div class="col-md-7">
                
                <div class="card p-3 py-4">
                    
                    <div class="text-center">
                        {{-- photo --}}
                        {{-- <img src="{{$userData->photo}}" alt=""> --}}
                        <img src="https://carnivaltoys.it/8268-large_default/set-dottore--cuffia--mascherina--stetoscopio-riflettore--in-busta-c-cav-.jpg" width="100" class="rounded-circle">
                    </div>
                    
                    <div class="text-center mt-3">
                        {{-- nome --}}
                        <h5 class="mt-2 mb-0">{{$userData->user->name}}</h5>

                        {{-- specializzazione --}}
                        <span>Typology dottore da fixare</span>
                        <span class="badge bg-primary">stelle</span>
                        
                        <div class="px-4 mt-1">
                            {{-- description --}}
                            <p class="fonts">{{$userData->description}}</p>
                            {{-- servizi --}}
                            <p class="fonts">{{$userData->services}}</p>
                            {{-- indirizzo --}}
                            <p class="badge bg-secondary">{{$userData->address}}</p>

                        </div>
                        
                        {{-- nav --}}
                        <div class="buttons">
                            <button class="btn btn-outline-primary px-4">Message</button>
                            <button class="btn btn-primary px-4 ms-3" onclick="window.location='{{url('/dashboard')}}'">Home</button>
                        </div>  
                    </div> 
                </div>
            </div>            
        </div>        
    </div>
@endsection
