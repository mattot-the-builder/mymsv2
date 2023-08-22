<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\MileageClaim;
use Illuminate\Support\Facades\Auth;

class MileageClaimController extends Controller {

    //index function
    public function index() {
        $mileage_claims = MileageClaim::all();
        return view('elove/mileage-claim/index', compact('mileage_claims'));
    }

    //show function
    public function show($id) {
        $mileage_claim = MileageClaim::find($id);
        return view('elove/mileage-claim/show', compact('mileage_claim'));
    }

    //create function
    public function create() {
        return view('elove/mileage-claim/create');
    }

    //store function
    public function store(Request $request) {
        $mileage_claim = new MileageClaim();
        $mileage_claim->fill($request->all());
        $mileage_claim->total_claim = $mileage_claim->fuel_cost;
        Auth::user()->staff->mileageClaims()->save($mileage_claim);
        return redirect()->route('mileage-claim.index');
    }

    //delete function
    public function destroy($id) {
        $mileage_claim = MileageClaim::find($id);
        $mileage_claim->delete();
        return redirect()->route('mileage-claim.index');
    }
}
