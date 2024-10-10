<?php

namespace App\Http\Controllers;

use App\Models\Resellers;
use Illuminate\Http\Request;

class ResellersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $resellers = Resellers::all();
        return view('resellers.index', compact('resellers'));
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
     * @param  \App\Models\Resellers  $resellers
     * @return \Illuminate\Http\Response
     */
    public function show(Resellers $resellers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resellers  $resellers
     * @return \Illuminate\Http\Response
     */
    public function edit(Resellers $resellers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resellers  $resellers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resellers $resellers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resellers  $resellers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resellers $resellers)
    {
        //
    }
}
