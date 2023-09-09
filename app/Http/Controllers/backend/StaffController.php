<?php

namespace App\Http\Controllers\backend;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\TemporaryFile;
use App\Models\Staff;
use App\Exports\StaffExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

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
        // dd($request->all());
        $staff = new Staff();
        $staff->fill($request->all());
        $staff->user_id = Auth::user()->id;
        $front_ic = TemporaryFile::where('folder', $request->front_ic)->first();
        $back_ic = TemporaryFile::where('folder', $request->back_ic)->first();


        if ($front_ic) {
            Storage::copy('tmp/' . $front_ic->folder . '/' . $front_ic->file, 'public/staff/ic/' . Auth::user()->id . '/' . $front_ic->file);
            $staff->front_ic = 'staff/ic/' . Auth::user()->id . '/' . $front_ic->file;

            Storage::deleteDirectory('tmp/' . $front_ic->folder);
            $front_ic->delete();
        }

        if ($back_ic) {
            Storage::copy('tmp/' . $back_ic->folder . '/' . $back_ic->file, 'public/staff/ic/' . Auth::user()->id . '/' . $back_ic->file);
            $staff->back_ic = 'staff/ic/' . Auth::user()->id . '/' . $back_ic->file;

            Storage::deleteDirectory('tmp/' . $front_ic->folder);
            $front_ic->delete();
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
