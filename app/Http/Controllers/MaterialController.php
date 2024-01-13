<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Http\Requests\StoreMAterialRequest;
use App\Http\Requests\UpdateMAterialRequest;
use App\Http\Resources\MaterialResorce;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return MaterialResorce::collection(Material::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMAterialRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MAterial $mAterial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MAterial $mAterial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMAterialRequest $request, MAterial $mAterial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MAterial $mAterial)
    {
        //
    }
}
