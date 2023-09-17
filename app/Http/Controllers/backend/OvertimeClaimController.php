<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\OvertimeClaim;
use App\Models\OvertimeItem;

use App\Exports\OvertimeClaimExport;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class OvertimeClaimController extends Controller
{
    // index function
    public function index(Request $request)
    {
        if (Auth::user()->role === 'admin') {

            if ($request->search) {
                $overtime_claims = OvertimeClaim::where('id', 'like', '%' . $request->search . '%')
                    ->sortable()
                    ->paginate(10);
                return view('elove.overtime-claim.index', compact('overtime_claims'));
            }
            $overtime_claims = OvertimeClaim::latest()
                ->sortable()->paginate(10);

        } elseif (Auth::user()->role === 'staff') {

            if ($request->search) {
                $overtime_claims = Auth::user()->staff->overtime_claims->where('id', 'like', '%' . $request->search . '%')
                    ->sortable()
                    ->paginate(10);
                return view('elove.overtime-claim.index', compact('overtime_claims'));
            }
            $overtime_claims = OvertimeClaim::where('staff_id', '=', Auth::user()->staff->id)
                ->latest()
                ->sortable()->paginate(10);

        }
        return view('elove/overtime-claim/index', compact('overtime_claims'));
    }

    // export function
    public function exportAsExcel()
    {
        return Excel::download(new OvertimeClaimExport(), 'overtime_claim.xlsx');
    }

    // create function
    public function create()
    {
        return view('elove/overtime-claim/create');
    }

    // show function
    public function show($id)
    {
        $overtime_claim = OvertimeClaim::find($id);
        return view('elove/overtime-claim/show', compact('overtime_claim'));
    }

    // accept function
    public function accept($id)
    {
        $overtime_claim = OvertimeClaim::find($id);
        $overtime_claim->status = 'accepted';

        if ($overtime_claim->save()) {
            return redirect()->route('overtime-claim.index')->with('success', 'Overtime claim accepted successfully');
        } else {
            return redirect()->route('overtime-claim.index')->with('error', 'Overtime claim failed to accept');
        }
    }

    // reject function
    public function reject($id)
    {
        $overtime_claim = OvertimeClaim::find($id);
        $overtime_claim->status = 'rejected';

        if ($overtime_claim->save()) {
            return redirect()->route('overtime-claim.index')->with('success', 'Overtime claim rejected successfully');
        } else {
            return redirect()->route('overtime-claim.index')->with('error', 'Overtime claim failed to reject');
        }
    }

    // destroy function
    public function destroy($id)
    {
        $overtime_claim = OvertimeClaim::find($id);

        if ($overtime_claim->delete()) {
            return redirect()->route('overtime-claim.index')->with('success', 'Overtime claim deleted successfully');
        } else {
            return redirect()->route('overtime-claim.index')->with('error', 'Overtime claim failed to delete');
        }
    }
}
