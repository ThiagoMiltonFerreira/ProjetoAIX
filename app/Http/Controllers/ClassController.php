<?php

namespace App\Http\Controllers;

use App\ClassModel;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('class');
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
     * @param  \App\ClassModel  $classModel
     * @return \Illuminate\Http\Response
     */
    public function show(ClassModel $classModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ClassModel  $classModel
     * @return \Illuminate\Http\Response
     */
    public function edit(ClassModel $classModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClassModel  $classModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClassModel $classModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClassModel  $classModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClassModel $classModel)
    {
        //
    }
}
