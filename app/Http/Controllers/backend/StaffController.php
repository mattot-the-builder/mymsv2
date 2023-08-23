<?php

namespace App\Http\Controllers\backend;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Staff;

class StaffController extends Controller {

    // index function
    public function index() {
        $staffs = Staff::all();
        return view('elove.staff.index', compact('staffs'));
    }

    // create function
    public function create() {
        return view('elove.staff.create');
    }

    // store function
    // public function store(Request $request) {
    //     $expense_claim = new ExpenseClaim();
    //     $expense_claim->fill($request->all());
    //     $expense_claim->total_claim = 00.00;

    //     if (Auth::user()->staff->expenseClaims()->save($expense_claim)) {
    //         return redirect()->route('expense-claim.index')->with('success', 'Expense claim created successfully.');
    //     } else {
    //         return redirect()->route('expense-claim.create')->with('error', 'Expense claim failed to create.');
    //     }
    // }
    public function store(Request $request) {
        dd('remove this in store function');
        $staff = new Staff();
        $staff->fill($request->all());

        if (Auth::user()->staff->save($staff)) {
            return redirect()->route('staff.index')->with('success', 'Staff created successfully.');
        } else {
            return redirect()->route('staff.create')->with('error', 'Staff failed to create.');
        }
    }

    // show function
    public function show($id) {
        $staff = Staff::find($id);
        return view('elove.staff.show', compact('staff'));
    }

    // edit function

    // update function

    // destroy function
    public function destroy($id) {
        $staff = Staff::find($id);

        if ($staff->delete()) {
            return redirect()->route('staff.index')->with('success', 'Staff deleted successfully');
        } else {
            return redirect()->route('staff.index')->with('error', 'Staff failed to delete');
        }
    }
}
