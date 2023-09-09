<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\MileageClaim;
use Illuminate\Support\Facades\Auth;

use App\Exports\MileageClaimExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\TemporaryFile;

class MileageClaimController extends Controller
{
    //index function
    public function index(Request $request)
    {
        if ($request->search) {
            $mileage_claims = MileageClaim::where('id', 'like', '%' . $request->search . '%')
                ->sortable()->paginate(10);
            return view('elove.mileage-claim.index', compact('mileage_claims'));
        }
        $mileage_claims = MileageClaim::latest()
            ->sortable()->paginate(10);
        return view('elove/mileage-claim/index', compact('mileage_claims'));
    }

    //export function
    public function exportAsExcel()
    {
        return Excel::download(new MileageClaimExport(), 'mileage_claim.xlsx');
    }

    //show function
    public function show($id)
    {
        $mileage_claim = MileageClaim::find($id);
        return view('elove/mileage-claim/show', compact('mileage_claim'));
    }

    //create function
    public function create()
    {
        return view('elove/mileage-claim/create');
    }

    //store function
    public function store(Request $request)
    {
        $mileage_claim = new MileageClaim();
        $mileage_claim->fill($request->all());

        $attachment = TemporaryFile::where('folder', $request->attachment)->first();

        if ($attachment) {
            Storage::copy('tmp/' . $attachment->folder . '/' . $attachment->file, 'public/attachment/mileage-claim/' .  $attachment->file);
            $mileage_claim->attachment = 'public/attachment/mileage-claim/' . $attachment->file;
            Storage::deleteDirectory('tmp/' . $attachment->folder);
            $attachment->delete();
        }

        $mileage_claim->total_claim = $mileage_claim->fuel_cost;

        if (Auth::user()->staff->mileageClaims()->save($mileage_claim)) {
            return redirect()->route('mileage-claim.index')->with('success', 'Mileage claim created successfully.');
        } else {
            return redirect()->route('mileage-claim.create')->with('error', 'Mileage claim failed to create.');
        }
    }

    // accept function
    public function accept($id)
    {
        $mileage_claim = MileageClaim::find($id);
        $mileage_claim->status = 'accepted';

        if ($mileage_claim->save()) {
            return redirect()->route('mileage-claim.index')->with('success', 'Mileage claim accepted successfully.');
        } else {
            return redirect()->route('mileage-claim.index')->with('error', 'Mileage claim failed to accept.');
        }
    }

    // reject function
    public function reject($id)
    {
        $mileage_claim = MileageClaim::find($id);
        $mileage_claim->status = 'rejected';

        if ($mileage_claim->save()) {
            return redirect()->route('mileage-claim.index')->with('success', 'Mileage claim rejected successfully.');
        } else {
            return redirect()->route('mileage-claim.index')->with('error', 'Mileage claim failed to reject.');
        }
    }

    //delete function
    public function destroy($id)
    {
        $mileage_claim = MileageClaim::find($id);
        if ($mileage_claim->delete()) {
            return redirect()->route('mileage-claim.index')->with('success', 'Mileage claim deleted successfully.');
        } else {
            return redirect()->route('mileage-claim.index')->with('error', 'Mileage claim failed to delete.');
        }
    }
}
