<?php

namespace App\Http\Livewire;


use App\Models\ExpenseClaim;
use Livewire\Component;
use App\Models\ExpenseItem;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Http;

class ExpenseItemForm extends Component {

    public $date, $details, $amount;
    public $expense_items = [];

    public function render() {
        return view('livewire.expense-item-form');
    }

    public function store() {
        $expense_item = new ExpenseItem();

        $expense_item->id = count($this->expense_items) + 1;
        $expense_item->date = $this->date;
        $expense_item->details = $this->details;
        $expense_item->amount = $this->amount;

        $this->expense_items[] = $expense_item;
    }

    // submit function
    public function submit() {
        dd('submit fired');
    }

    // destroy function
    public function destroy($id) {
        foreach ($this->expense_items as $key => $expense_item) {
            if ($expense_item['id'] == $id) {
                unset($this->expense_items[$key]);
            }
        }
    }
}
