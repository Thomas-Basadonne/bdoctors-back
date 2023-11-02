<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Typology;
use App\Http\Requests\StoreTypologyRequest;
use App\Http\Requests\UpdateTypologyRequest;


class TypologyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $typologies = Typology::all();
        return view('admin.typology.index', compact('typologies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.typology.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTypologyRequest $request)
    {
        $data = $request->validated();
        //salvo dati in arrivo dal form
        $data = $request->all();
        
        $new_typology = new Typology();

        $new_typology->name = $data['name'];

        $new_typology->save();
        session()->flash('success', 'Creazione avvenuta con successo.');
        return to_route('admin.typology.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Typology $typology)
    {
        return view('admin.typology.show', compact('typology'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Typology $typology)
    {
        return view('admin.typology.edit', compact('typology'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTypologyRequest $request, Typology $typology)
    {
        $data = $request->validated();

        $typology->update($data);


        // Redirect alla pagina di visualizzazione dei dettagli o mostrare un messaggio di successo
        session()->flash('success', 'Modifica avvenuta con successo.');
        return redirect()->route('admin.typology.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Typology $typology)
    {
        $typology->delete();
        session()->flash('success', 'Successfully Deleted'); 
        return redirect()->route('admin.typology.index');
    }

}
