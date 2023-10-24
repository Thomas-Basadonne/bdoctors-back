@extends('layouts.app')

@section('content')
{{-- {{dd($profiles[$id -1]->description)}} --}}
{{$profile=($profiles[$id -1]->description)}}
{{dd($profile)}}

    <div class="container mt-5">
    
        <div class="row d-flex justify-content-center">
            
            <div class="col-md-7">
                
                <div class="card p-3 py-4">
                    
                    <div class="text-center">
                        {{-- photo --}}
                        <img src="https://carnivaltoys.it/8268-large_default/set-dottore--cuffia--mascherina--stetoscopio-riflettore--in-busta-c-cav-.jpg" width="100" class="rounded-circle">
                    </div>
                    
                    <div class="text-center mt-3">
                        {{-- specializzazione --}}
                        <span class="bg-secondary p-1 px-4 rounded text-white">Pro</span>
                        {{-- nome --}}
                        <h5 class="mt-2 mb-0">Alexender Schidmt</h5>

                        <span>UI/UX Designer</span>
                        
                        <div class="px-4 mt-1">
                            {{-- description --}}
                            <p class="fonts">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                            {{-- servizi --}}
                            <p class="fonts">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        
                        </div>
                        
                        {{-- nav --}}
                        <div class="buttons">
                            <button class="btn btn-outline-primary px-4">Message</button>
                            <button class="btn btn-primary px-4 ms-3" onclick="window.location='{{url('admin/docprofile/')}}'">Home</button>
                        </div>  
                    </div> 
                </div>
            </div>            
        </div>        
    </div>
@endsection
