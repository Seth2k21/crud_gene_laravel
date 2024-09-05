<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\EntrepriseRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $entreprises = Entreprise::paginate();

        return view('entreprise.index', compact('entreprises'))
            ->with('i', ($request->input('page', 1) - 1) * $entreprises->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $entreprise = new Entreprise();

        return view('entreprise.create', compact('entreprise'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EntrepriseRequest $request): RedirectResponse
    {
        Entreprise::create($request->validated());

        return Redirect::route('entreprises.index')
            ->with('success', 'Entreprise created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $entreprise = Entreprise::find($id);

        return view('entreprise.show', compact('entreprise'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $entreprise = Entreprise::find($id);

        return view('entreprise.edit', compact('entreprise'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EntrepriseRequest $request, Entreprise $entreprise): RedirectResponse
    {
        $entreprise->update($request->validated());

        return Redirect::route('entreprises.index')
            ->with('success', 'Entreprise updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Entreprise::find($id)->delete();

        return Redirect::route('entreprises.index')
            ->with('success', 'Entreprise deleted successfully');
    }
}
