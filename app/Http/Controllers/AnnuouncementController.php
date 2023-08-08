<?php

namespace App\Http\Controllers;

use App\Models\Annuouncement;
use Illuminate\Http\Request;

class AnnuouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('announcement.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Annuouncement $annuouncement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Annuouncement $annuouncement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Annuouncement $annuouncement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Annuouncement $annuouncement)
    {
        //
    }
}
