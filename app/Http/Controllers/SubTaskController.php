<?php

namespace App\Http\Controllers;

use App\Models\subTask;
use App\Http\Requests\StoresubTaskRequest;
use App\Http\Requests\UpdatesubTaskRequest;

class SubTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoresubTaskRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoresubTaskRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\subTask  $subTask
     * @return \Illuminate\Http\Response
     */
    public function show(subTask $subTask)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\subTask  $subTask
     * @return \Illuminate\Http\Response
     */
    public function edit(subTask $subTask)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesubTaskRequest  $request
     * @param  \App\Models\subTask  $subTask
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatesubTaskRequest $request, subTask $subTask)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\subTask  $subTask
     * @return \Illuminate\Http\Response
     */
    public function destroy(subTask $subTask)
    {
        //
    }
}
