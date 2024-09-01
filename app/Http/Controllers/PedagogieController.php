<?php

namespace App\Http\Controllers;

use App\Models\Pedagogie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PedagogieController extends Controller
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
        //$userId = Auth::id();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(Pedagogie $pedagogie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pedagogie $pedagogie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pedagogie $pedagogie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pedagogie $pedagogie)
    {
        //
    }
}
