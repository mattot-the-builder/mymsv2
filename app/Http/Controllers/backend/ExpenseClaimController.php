<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExpenseClaimController extends Controller {

    // index function
    public function index() {
        return view('elove/expense-claim/index');
    }
}
