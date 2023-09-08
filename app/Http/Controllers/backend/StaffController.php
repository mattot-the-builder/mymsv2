<?php

namespace App\Http\Controllers\backend;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Staff;
use App\Exports\StaffExport;
use Maatwebsite\Excel\Facades\Excel;

class StaffController extends Controller
{
    // index function
    public function index(Request $request)
    {

        if ($request->search) {
            $staffs = Staff::where('id', 'like', '%' . $request->search . '%')
                ->sortable()
                ->paginate(10);
            return view('elove.staff.index', compact('staffs'));
        }

        $staffs = Staff::latest()->sortable()->paginate(10);
        return view('elove.staff.index', compact('staffs'));
    }

    // export function
    public function exportAsExcel()
    {
        return Excel::download(new StaffExport(), 'staff.xlsx');
    }

    // create function
    public function create()
    {
        return view('elove.staff.create');
    }

    public function store(Request $request)
    {
        // dd('remove this in store function');

        $staff = new Staff();
        $staff->fill($request->all());
        $staff->user_id = Auth::user()->id;

        // dd('file issue not settle');

        if ($request->hasFile('front_ic')) {
            $front_ic = $staff->user_id . '_front_ic' . '.' . $request->file('front_ic')->extension();
            $front_ic_path = $request->file('front_ic')->storeAs('photos/staff/front_ic', $front_ic, 'public');
            $staff->front_ic = $front_ic_path;
        }

        dd($request->hasFile('back_ic'));

        if ($request->hasFile('back_ic')) {
            $back_ic = $staff->user_id . '_back_ic' . '.' . $request->file('back_ic')->extension();
            $back_ic_path = $request->file('back_ic')->storeAs('photos/staff/back_ic', $back_ic, 'public');
            $staff->back_ic = $back_ic_path;
        }

        if ($staff->save()) {
            return redirect()->route('staff.index')->with('success', 'Staff created successfully');
        } else {
            return redirect()->route('staff.index')->with('error', 'Staff failed to create');
        }
    }

    // show function
    public function show($id)
    {
        $staff = Staff::find($id);
        return view('elove.staff.show', compact('staff'));
    }

    // accept function
    public function accept($id)
    {
        $staff = Staff::find($id);
        $staff->is_approved = true;

        if ($staff->save()) {
            return redirect()->route('staff.index')->with('success', 'Staff accepted successfully');
        } else {
            return redirect()->route('staff.index')->with('error', 'Staff failed to accept');
        }
    }

    // reject function
    public function reject($id)
    {
        $staff = Staff::find($id);
        $staff->is_approved = false;

        if ($staff->save()) {
            return redirect()->route('staff.index')->with('success', 'Staff rejected successfully');
        } else {
            return redirect()->route('staff.index')->with('error', 'Staff failed to reject');
        }
    }


    // destroy function
    public function destroy($id)
    {
        $staff = Staff::find($id);

        if ($staff->delete()) {
            return redirect()->route('staff.index')->with('success', 'Staff deleted successfully');
        } else {
            return redirect()->route('staff.index')->with('error', 'Staff failed to delete');
        }
    }
}
