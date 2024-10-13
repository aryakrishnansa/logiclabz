<?php

namespace App\Http\Controllers;

use App\Models\{Refferance,Member};
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRefferanceRequest;
use App\Http\Requests\UpdateRefferanceRequest;

class RefferanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('refferance.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['members']=Member::get();
        return view('refferance.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRefferanceRequest $request)
    {
        Refferance::create($request->all());
        return $this->index();
    }

    /**
     * Display the specified resource.
     */
    public function show(Refferance $refferance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Refferance $refferance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRefferanceRequest $request, Refferance $refferance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Refferance $refferance)
    {
        //
    }
}
