<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $educations = Education::all();
        return view('admin.education.index', compact('educations'));
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
        try {
            $education = new Education();
            $education->name = $request->name;
            $education->added_ip = $request->ip();
            $education->added_by = Auth::user()->id;
            $education->created_at = now();
            $education->save();
            return response()->json([
                'status' => 200,
            ]);
        } catch (\Exception $error) {
            return response()->json([
                'status' => 404,
                'error' => $error,
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Education $education) {
        $educations = Education::all();
        $view = view('admin.education.render.get_data', compact('educations'))->render();
        return response()->json([
            'status' => 200,
            'view' => $view,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Education $education) {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Education $education) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Education $education) {
        //
    }
}
