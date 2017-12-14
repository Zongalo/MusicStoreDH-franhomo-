<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VientoController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vientos = DB::table('vientos')->orderBy('id', 'DESC')->paginate(9);

        return view('categoria-viento', ['vientos' => $vientos]);
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
     * @param  \App\Viento  $viento
     * @return \Illuminate\Http\Response
     */
    public function show(Viento $viento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Viento  $viento
     * @return \Illuminate\Http\Response
     */
    public function edit(Viento $viento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Viento  $viento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Viento $viento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Viento  $viento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Viento $viento)
    {
        //
    }
}

