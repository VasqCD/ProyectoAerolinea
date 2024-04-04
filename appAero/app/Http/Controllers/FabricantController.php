<?php

namespace App\Http\Controllers;

use App\Models\Fabricant;
use App\Http\Requests\FabricantRequest;

/**
 * Class FabricantController
 * @package App\Http\Controllers
 */
class FabricantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fabricants = Fabricant::paginate();

        return view('fabricant.index', compact('fabricants'))
            ->with('i', (request()->input('page', 1) - 1) * $fabricants->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fabricant = new Fabricant();
        return view('fabricant.create', compact('fabricant'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FabricantRequest $request)
    {
        Fabricant::create($request->validated());

        return redirect()->route('fabricants.index')
            ->with('success', 'Fabricant created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $fabricant = Fabricant::find($id);

        return view('fabricant.show', compact('fabricant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $fabricant = Fabricant::find($id);

        return view('fabricant.edit', compact('fabricant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FabricantRequest $request, Fabricant $fabricant)
    {
        $fabricant->update($request->validated());

        return redirect()->route('fabricants.index')
            ->with('success', 'Fabricant updated successfully');
    }

    public function destroy($id)
    {
        Fabricant::find($id)->delete();

        return redirect()->route('fabricants.index')
            ->with('success', 'Fabricant deleted successfully');
    }
}
