<?php

namespace App\Http\Controllers\Admin;

use App\Models\Profile;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProfileRequest;
use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class DocProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $user = Auth::id();
        return view('admin.docprofile.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        $profiles = Profile::all();

        if ($profiles->firstWhere('user_id', Auth::id())) {
            return redirect()->route('admin.docprofile.index');
        } else {
            return view('admin.docprofile.create', compact('profiles'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProfileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfileRequest $request)
    {
        // $formData = $request->all();
        // $this->validation($formData);
        $newProfile = new Profile();
        $newProfile->fill($request->all());
        $newProfile->user_id = Auth::id();
        // $newProfile->slug = Str::slug($newProfile->address, '-');
        $newProfile->save();

        return redirect()->route('admin.docprofile.show', $newProfile->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profiles
     *
     */
    public function show(Profile $profiles)
    {
        if ($profiles->user_id == Auth::id()) {
            return view('admin.docprofile.show', compact('profiles'));
        } else {
            return redirect()->route('admin.docprofile.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profiles
     *
     */
    public function edit(Profile $profiles)
    { }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfileRequest  $request
     * @param  \App\Models\Profile $profiles
     *
     */
    public function update(UpdateProfileRequest $request, Profile $profiles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile $profiles
     *
     */
    public function destroy(Profile $profiles)
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
