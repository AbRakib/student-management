<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use Illuminate\Http\Request;

class GenderController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $genders = Gender::all();
        return view('admin.gender.index', compact('genders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        return $request->all();
    }

    /**
     * Display the specified resource.
     */
    public function show(Gender $gender) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gender $gender) {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gender $gender) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gender $gender) {
        //
    }
}
