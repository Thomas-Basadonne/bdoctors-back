<?php

namespace App\Http\Controllers;

use App\Models\profiles;
use App\Http\Requests\StoreprofilesRequest;
use App\Http\Requests\UpdateprofilesRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::id();
        return view('admin.indexProfile', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profiles = profiles::all();
        return view('admin\createProfile', compact('profiles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreprofilesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreprofilesRequest $request)
    {
        // $formData = $request->all();
        // $this->validation($formData);
        $newProfile = new profiles();
        $newProfile->fill($request->all());
        $newProfile->user_id = Auth::id();
        // $newProfile->slug = Str::slug($newProfile->address, '-');
        $newProfile->save();

        return redirect()->route('admin.profile.show', $newProfile->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\profiles  $profiles
     * @return \Illuminate\Http\Response
     */
    public function show(profiles $profiles)
    {
        if ($profiles->user_id == Auth::id()) {
            return view('admin.showProfile', compact('profiles'));
        } else {
            return redirect()->route('admin.profile.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\profiles  $profiles
     * @return \Illuminate\Http\Response
     */
    public function edit(profiles $profiles)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateprofilesRequest  $request
     * @param  \App\Models\profiles  $profiles
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateprofilesRequest $request, profiles $profiles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\profiles  $profiles
     * @return \Illuminate\Http\Response
     */
    public function destroy(profiles $profiles)
    {
        //
    }

    // private function validation($formData)
    // {

    //     $validator = Validator::make($formData, [


    //         'user_id' => 'required|max:200',
    //         'description' => 'required|max:200',
    //         'services' => 'required|max:200',
    //         'address' => 'required',
    //         'visible' => 'required',
    //         'photo'   => 'nullable|image|max:4096',

    //     ], [
    //         // 'title.required' => 'Il titolo deve essere inserito',
    //         // 'title.required' => 'Il titolo deve essere inserito',
    //         // 'title.max' => 'Il titolo deve avere :max caratteri',
    //         // 'description.required' => 'La descrizione deve essere inserita',
    //         // 'thumb.required' => 'Questo campo non può rimanere vuoto',
    //         // 'cover_image.max' => "La dimensione del file è troppo grande",
    //         // 'cover_image.image' => "Il file deve essere di tipo immagine",

    //     ])->validate();

    //     return $validator;
    // }
}
