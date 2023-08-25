<?php

namespace App\Http\Controllers\backend;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Models\ExpenseClaim;
use App\Models\ExpenseItem;
use Illuminate\Http\Request;

use App\Exports\ExpenseClaimExport;
use Maatwebsite\Excel\Facades\Excel;

class ExpenseClaimController extends Controller {

    // index function
    public function index(Request $request) {

        if ($request->search) {
            $expense_claims = ExpenseClaim::where('id', 'like', '%' . $request->search . '%')
                ->sortable()->paginate(10);
            return view('elove.expense-claim.index', compact('expense_claims'));
        }
        $expense_claims = ExpenseClaim::latest()
            ->sortable()->paginate(10);
        return view('elove/expense-claim/index', compact('expense_claims'));
    }

    // export function
    public function exportAsExcel() {
        return Excel::download(new ExpenseClaimExport, 'expense_claim.xlsx');
    }

    // create function
    public function create() {
        return view('elove/expense-claim/create');
    }

    //show function
    public function show($id) {
        $expense_claim = ExpenseClaim::find($id);
        return view('elove/expense-claim/show', compact('expense_claim'));
    }

    // accept function
    public function accept($id) {
        $expense_claim = ExpenseClaim::find($id);
        $expense_claim->status = 'accepted';
        if ($expense_claim->save()) {
            return redirect()->route('expense-claim.index')->with('success', 'Expense claim accepted successfully.');
        } else {
            return redirect()->route('expense-claim.index')->with('error', 'Expense claim failed to accept.');
        }
    }

    // reject function
    public function reject($id) {
        $expense_claim = ExpenseClaim::find($id);
        $expense_claim->status = 'rejected';
        if ($expense_claim->save()) {
            return redirect()->route('expense-claim.index')->with('success', 'Expense claim rejected successfully.');
        } else {
            return redirect()->route('expense-claim.index')->with('error', 'Expense claim failed to reject.');
        }
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
