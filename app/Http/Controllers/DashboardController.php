<?php

namespace App\Http\Controllers;

class DashboardController extends Controller {
    public function index() {
        return view('admin.dashboard');
    }

    public function home() {
        return view('welcome');
    }
}
