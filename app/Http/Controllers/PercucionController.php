<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PercucionController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $percucions = DB::table('percucions')->orderBy('id', 'DESC')->paginate(9);

        return view('categoria-percucion', ['percucions' => $percucions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Percucion  $percucion
     * @return \Illuminate\Http\Response
     */
    public function show(Percucion $percucion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Percucion  $percucion
     * @return \Illuminate\Http\Response
     */
    public function edit(Percucion $percucion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Percucion  $percucion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Percucion $percucion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Percucion  $percucion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Percucion $percucion)
    {
        //
    }
}

