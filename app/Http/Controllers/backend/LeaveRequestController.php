<?php

namespace App\Http\Controllers\backend;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\LeaveRequest;
use App\Exports\LeaveRequestExport;
use Maatwebsite\Excel\Facades\Excel;

class LeaveRequestController extends Controller {

    // index function
    public function index(Request $request) {
        if ($request->search) {
            $leave_requests = LeaveRequest::where('id', 'like', '%' . $request->search . '%')
                ->sortable()
                ->paginate(10);
            return view('elove.leave-request.index', compact('leave_requests'));
        }
        $leave_requests = LeaveRequest::latest()
            ->sortable()->paginate(10);
        return view('elove/leave-request/index', compact('leave_requests'));
    }

    // export function
    public function exportAsExcel() {
        return Excel::download(new LeaveRequestExport, 'leave_request.xlsx');
    }

    // create function
    public function create() {
        return view('elove/leave-request/create');
    }

    // store function
    public function store(Request $request) {

        $start_date = Carbon::parse($request->start_date);
        $end_date = Carbon::parse($request->end_date);

        $total_leave = $end_date->diffInDays($start_date);

        $leave_request = new LeaveRequest();
        $leave_request->fill($request->all());
        $leave_request->total_leave = $total_leave;

        if ($request->hasFile('attachment')) {
            $attachment = Auth::user()->staff->id . '_attachment_' . time() . '.' . $request->file('attachment')->extension();
            $attachment_path = $request->file('attachment')->storeAs('photos/staff/attachment/leave_request', $attachment, 'public');
            $leave_request->attachment = $attachment_path;
        }

        if (Auth::user()->staff->leaveRequests()->save($leave_request)) {
            return redirect()->route('leave-request.index')->with('success', 'Leave request created successfully.');
        } else {
            return redirect()->route('leave-request.create')->with('error', 'Leave request failed to create.');
        }
    }

    // show function
    public function show($id) {
        $leave_request = LeaveRequest::find($id);
        return view('elove/leave-request/show', compact('leave_request'));
    }

    // accept function
    public function accept($id) {
        $leave_request = LeaveRequest::find($id);
        $leave_request->status = 'accepted';

        if ($leave_request->save()) {
            return redirect()->route('leave-request.index')->with('success', 'Leave request accepted successfully.');
        } else {
            return redirect()->route('leave-request.index')->with('error', 'Leave request failed to accept.');
        }
    }

    // reject function
    public function reject($id) {
        $leave_request = LeaveRequest::find($id);
        $leave_request->status = 'rejected';

        if ($leave_request->save()) {
            return redirect()->route('leave-request.index')->with('success', 'Leave request rejected successfully.');
        } else {
            return redirect()->route('leave-request.index')->with('error', 'Leave request failed to reject.');
        }
    }

    // destroy function
    public function destroy($id) {
        $leave_request = LeaveRequest::find($id);
        if ($leave_request->delete()) {
            return redirect()->route('leave-request.index')->with('success', 'Leave request deleted successfully.');
        } else {
            return redirect()->route('leave-request.index')->with('error', 'Leave request failed to delete.');
        }
    }
}
