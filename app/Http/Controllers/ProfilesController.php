<?php

namespace App\Http\Controllers;

use App\Models\profiles;
use App\Http\Requests\StoreprofilesRequest;
use App\Http\Requests\UpdateprofilesRequest;
use Illuminate\Support\Facades\Auth;

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\profiles  $profiles
     * @return \Illuminate\Http\Response
     */
    public function show(profiles $profiles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\profiles  $profiles
     * @return \Illuminate\Http\Response
     */
    public function edit(profiles $profiles)
    {
        //
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
}
