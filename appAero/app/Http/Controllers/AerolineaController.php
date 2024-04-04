<?php

namespace App\Http\Controllers;

use App\Models\Aerolinea;
use App\Http\Requests\AerolineaRequest;

/**
 * Class AerolineaController
 * @package App\Http\Controllers
 */
class AerolineaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aerolineas = Aerolinea::paginate();

        return view('aerolinea.index', compact('aerolineas'))
            ->with('i', (request()->input('page', 1) - 1) * $aerolineas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $aerolinea = new Aerolinea();
        return view('aerolinea.create', compact('aerolinea'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AerolineaRequest $request)
    {
        Aerolinea::create($request->validated());

        return redirect()->route('aerolineas.index')
            ->with('success', 'Aerolinea created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $aerolinea = Aerolinea::find($id);

        return view('aerolinea.show', compact('aerolinea'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $aerolinea = Aerolinea::find($id);

        return view('aerolinea.edit', compact('aerolinea'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AerolineaRequest $request, Aerolinea $aerolinea)
    {
        $aerolinea->update($request->validated());

        return redirect()->route('aerolineas.index')
            ->with('success', 'Aerolinea updated successfully');
    }

    public function destroy($id)
    {
        Aerolinea::find($id)->delete();

        return redirect()->route('aerolineas.index')
            ->with('success', 'Aerolinea deleted successfully');
    }
}
