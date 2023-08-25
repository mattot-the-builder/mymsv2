<?php

namespace App\Http\Livewire;


use App\Models\ExpenseClaim;
use Livewire\Component;
use App\Models\ExpenseItem;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Staff;

use Livewire\WithFileUploads;


class ExpenseItemForm extends Component {

    use WithFileUploads;

    public $date, $details, $amount, $receipt;
    public $expense_items = [];
    public $total_claim = 0;

    public function render() {
        return view('livewire.expense-item-form');
    }

    // store function
    public function store() {
        $expense_item = new ExpenseItem();

        $expense_item->index = count($this->expense_items) + 1;
        $expense_item->date = $this->date;
        $expense_item->details = $this->details;
        $expense_item->amount = $this->amount;

        // dd($this->receipt->temporaryUrl());

        if ($this->receipt) {
            $receipt = $this->receipt->temporaryUrl();
            $expense_item->receipt = $receipt;
        } else {
            $expense_item->receipt = null;
        }

        $this->expense_items[] = $expense_item;

        $this->total_claim += $expense_item->amount;
    }


    // submit function
    public function submit() {

        $expense_claim = new ExpenseClaim();
        $expense_claim->staff_id = Auth::user()->staff->id;
        $expense_claim->total_claim = $this->total_claim;
        $expense_claim->save();

        $expense_claim = Auth::user()->staff->expenseClaims->last();

        foreach ($this->expense_items as $item) {
            $expense_item = new ExpenseItem();
            $expense_item->date = $item['date'];
            $expense_item->details = $item['details'];
            $expense_item->amount = $item['amount'];
            $expense_item->receipt = $item['receipt'];

            $expense_claim->items()->save($expense_item);
        }

        return redirect()->route('expense-claim.index')->with('success', 'Expense claim created successfully.');
    }

    // destroy function

    public function destroy($index) {
        foreach ($this->expense_items as $key => $item) {
            if ($item['index'] == $index) {
                unset($this->expense_items[$key]);

                $this->total_claim -= $item['amount'];
            }
        }
    }
}
