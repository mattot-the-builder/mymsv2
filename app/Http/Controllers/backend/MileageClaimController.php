<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\MileageClaim;

class MileageClaimController extends Controller {
    //index function
    public function index() {
        $mileage_claims = MileageClaim::all();
        return view('elove/mileage-claim/index', compact('mileage_claims'));
    }
}
