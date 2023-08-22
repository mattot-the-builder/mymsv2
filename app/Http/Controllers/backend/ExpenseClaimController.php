<?php

namespace App\Http\Controllers\backend;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Models\ExpenseClaim;
use App\Models\ExpenseItem;
use Illuminate\Http\Request;

class ExpenseClaimController extends Controller {

    // index function
    public function index() {
        $expense_claims = ExpenseClaim::all();
        return view('elove/expense-claim/index', compact('expense_claims'));
    }

    // create function
    public function create() {
        return view('elove/expense-claim/create');
    }

    //store function
    public function store(Request $request) {
        $expense_claim = new ExpenseClaim();
        $expense_claim->fill($request->all());
        $expense_claim->total_claim = 00.00;

        if (Auth::user()->staff->expenseClaims()->save($expense_claim)) {
            return redirect()->route('expense-claim.index')->with('success', 'Expense claim created successfully.');
        } else {
            return redirect()->route('expense-claim.create')->with('error', 'Expense claim failed to create.');
        }
    }

    //show function
    public function show($id) {
        $expense_claim = ExpenseClaim::find($id);
        return view('elove/expense-claim/show', compact('expense_claim'));
    }

    //delete function
    public function destroy($id) {
        $expense_claim = ExpenseClaim::find($id);
        if ($expense_claim->delete()) {
            return redirect()->route('expense-claim.index')->with('success', 'Expense claim deleted successfully.');
        } else {
            return redirect()->route('expense-claim.index')->with('error', 'Expense claim failed to delete.');
        }
    }
}
