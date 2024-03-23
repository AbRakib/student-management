<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller {

    private $pagination_item;
    public function __construct() {
        $this->pagination_item = config('app.default_pagination_item');
    }
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
    public function show(Education $education, Request $request) {
        if (isset($request->pagination_item) && ($request->pagination_item != '')) {
            $this->pagination_item = intval($request->pagination_item);
        }
        $educations = Education::where('deleted', 0)
            ->where('status', 1)
            ->orderByDesc('id');
        $educations = $educations->paginate($this->pagination_item);
        $start_sl = (($educations->currentPage() - 1) * $educations->perPage()) + 1;
        $view = view('admin.education.render.get_data', compact('educations', 'start_sl'))->render();
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
    public function destroy(Request $request) {
        try {
            $education = Education::where('id', $request->id)
                ->where('deleted', 0)
                ->where('status', 1)
                ->first();

            $education->updated_by = Auth::user()->id;
            $education->updated_ip = $request->ip();
            $education->updated_at = now();
            $education->deleted = 1;
            $education->status = 0;
            $education->update();
            return response()->json([
                'status' => 200,
                'message' => 'Deleted Successful',
            ]);
        } catch (Exception $error) {
            return response()->json([
                'status' => 404,
                'message' => $error->getMessage(),
            ]);
        }

    }
}
