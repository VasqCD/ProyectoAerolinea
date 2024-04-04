<?php

namespace App\Http\Controllers;

use App\Models\Aeronav;
use App\Http\Requests\AeronavRequest;

/**
 * Class AeronavController
 * @package App\Http\Controllers
 */
class AeronavController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aeronavs = Aeronav::paginate();

        return view('aeronav.index', compact('aeronavs'))
            ->with('i', (request()->input('page', 1) - 1) * $aeronavs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $aeronav = new Aeronav();
        return view('aeronav.create', compact('aeronav'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AeronavRequest $request)
    {
        Aeronav::create($request->validated());

        return redirect()->route('aeronavs.index')
            ->with('success', 'Aeronav created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $aeronav = Aeronav::find($id);

        return view('aeronav.show', compact('aeronav'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $aeronav = Aeronav::find($id);

        return view('aeronav.edit', compact('aeronav'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AeronavRequest $request, Aeronav $aeronav)
    {
        $aeronav->update($request->validated());

        return redirect()->route('aeronavs.index')
            ->with('success', 'Aeronav updated successfully');
    }

    public function destroy($id)
    {
        Aeronav::find($id)->delete();

        return redirect()->route('aeronavs.index')
            ->with('success', 'Aeronav deleted successfully');
    }
}
