<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Docente::all();
        //
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
    public function store(Request $request)
    {
        Docente::create($request->all());
        return ['created'];
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Docente::find($id);
        return Docente::find($id);
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Docente $docente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $docente =  Docente::find($id);
        $docente->update($request->all());

         return ['Updated'];
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $docente = Docente::find($id);
        $docente->delete($id);

         return ['deleted'];
        //
    }
}
