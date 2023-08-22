<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OvertimeClaimController extends Controller {
    // index function
    public function index() {
        return view('elove/overtime-claim/index');
    }
}
