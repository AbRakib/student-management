<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller {
    public function authCheck(Request $request) {
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            toastr()->addSuccess('Your account has been restored.');
            return redirect()->route('admin.dashboard');
        } else {
            toastr()
            ->escapeHtml(false)
            ->addError('<strong>We’re sorry</strong>, Email & Password not accepted!.');
            return redirect()->back();
        }
    }

    public function logout() {
        if (Auth::user()) {
            Auth::logout();
            toastr()->addSuccess('Your account has been restored.');
            return redirect()->route('login');
        }
    }
}
