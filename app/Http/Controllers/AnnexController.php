<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnnexRequest;
use App\Models\Annex;
use App\Models\Entreprise;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class AnnexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $annexes = Annex::paginate();

        return view('annex.index', compact('annexes'))
            ->with('i', ($request->input('page', 1) - 1) * $annexes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $annex = new Annex();
        $entreprises = Entreprise::all();
        return view('annex.create', compact('annex','entreprises'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AnnexRequest $request): RedirectResponse
    {
        Annex::create($request->validated());

        return Redirect::route('annexes.index')
            ->with('success', 'Annex created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $annex = Annex::find($id);

        return view('annex.show', compact('annex'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $annex = Annex::find($id);
        $entreprises = Entreprise::all();
        return view('annex.edit', compact('annex','entreprises'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AnnexRequest $request, Annex $annex): RedirectResponse
    {
        $annex->update($request->validated());

        return Redirect::route('annexes.index')
            ->with('success', 'Annex updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Annex::find($id)->delete();

        return Redirect::route('annexes.index')
            ->with('success', 'Annex deleted successfully');
    }
}
