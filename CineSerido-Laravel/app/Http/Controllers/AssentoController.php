<?php

namespace App\Http\Controllers;

use App\Models\Assento;
use App\Models\Filme;
use Illuminate\Http\Request;

class AssentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Filme $filme)
    {
        return view('assentos',['assentos'=>Assento::all(),'filme'=>$filme]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
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
    public function show(Assento $assento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Assento $assento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Assento $assento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Assento $assento)
    {
        //
    }
}
