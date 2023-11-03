<?php

namespace App\Http\Controllers\Admin;

use App\Models\Profile;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProfileRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\Typology;
use App\Models\User;
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
        $profiles = Profile::all(); // Recupera tutti i profili
        return view('admin.docprofile.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        $profiles = Profile::all();
        $typologies = Typology::all();

        if ($profiles->firstWhere('user_id', Auth::id())) {
            return redirect()->route('admin.docprofile.index');
        } else {
            return view('admin.docprofile.create', compact('profiles', 'typologies'));
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
        $formData = $request->all();
        $formData['user_id'] = Auth::id();
        $user = User::find($formData['user_id']);
        // $formData = $request->validated();
        // $this->validation($formData);
        $newProfile = Profile::create($formData);
        // $newProfile->fill($formData);
        if ($request->has('profiles')) {
            $newProfile->profiles()->attach($request->profiles);
        }
        // if (array_key_exists('typology', $formData)) {
        $user->typologies()->attach($formData['typologies']);
        // }
        $newProfile->save();
        return redirect()->route('admin.docprofile.show', $newProfile->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     *
     */
    public function show(Profile $profile, $id)
    {
        $userData = Profile::with('user')->where('id', $id)->first();
        // $userTypology = Profile::with('typology');
        $userTypology = User::with('typologies')->where('id', $id)->first();
        $docTypologies = $userTypology->typologies;
        if (!Auth::user()->is_admin && $userData->user_id !== Auth::id()) {
            abort(403);
        }
        return view('admin.docprofile.show', compact('userData', 'docTypologies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     *
     */
    public function edit(Profile $profile, $id)
    {
        $profiles = Profile::with('user')->where('id', $id)->first();
        if (!Auth::user()->is_admin && $profiles->user_id !== Auth::id()) {
            abort(403);
        }
        return view('admin.docprofile.edit', compact('profiles'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfileRequest  $request
     * @param  \App\Models\Profile $profile
     *
     */
    public function update(UpdateProfileRequest $request, Profile $profile, $id)
    {

        $formData = Profile::find($id);
        $formData->update($request->all());
        // $this->validation($formData);
        return redirect()->route('admin.docprofile.index', $profile)->with('success', 'Profilo aggiornato con successo');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile $profiles
     *
     */
    public function destroy(Profile $profiles, $id)
    {
        $destroyProfile = Profile::find($id);
        if (!Auth::user()->is_admin && $profiles->user_id !== Auth::id()) {
            abort(403);
        }
        $destroyProfile->delete();
        return redirect()->route('admin.docprofile.index');
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
