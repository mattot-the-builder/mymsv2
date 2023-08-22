<?php

namespace App\Http\Controllers\backend;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\LeaveRequest;

class LeaveRequestController extends Controller {

    // index function
    public function index() {
        $leave_requests = LeaveRequest::all();
        return view('elove/leave-request/index', compact('leave_requests'));
    }

    // create function
    public function create() {
        return view('elove/leave-request/create');
    }

    // store function
    public function store(Request $request) {
        $leave_request = new LeaveRequest();
        $leave_request->fill($request->all());
        $leave_request->total_leave = 0;

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
