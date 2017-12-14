<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CuerdaController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cuerdas = DB::table('cuerdas')->orderBy('id', 'DESC')->paginate(9);

        return view('categoria-cuerda', ['cuerdas' => $cuerdas]);
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
     * @param  \App\Cuerda  $cuerda
     * @return \Illuminate\Http\Response
     */
    public function show(Cuerda $cuerda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cuerda  $cuerda
     * @return \Illuminate\Http\Response
     */
    public function edit(Cuerda $cuerda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cuerda  $cuerda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cuerda $cuerda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cuerda  $cuerda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cuerda $cuerda)
    {
        //
    }
}

