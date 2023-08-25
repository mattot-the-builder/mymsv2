<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;

use App\Models\OvertimeClaim;
use Livewire\Component;
use App\Models\OvertimeItem;
use App\Models\User;

use Carbon\Carbon;

class OvertimeItemForm extends Component {

    public $date, $details, $start_time, $end_time, $total_hour;
    public $overtime_items = [];

    public $total_hours = 0;

    public function render() {
        return view('livewire.overtime-item-form');
    }

    // store function
    public function store() {
        $overtime_item = new OvertimeItem();

        $overtime_item->index = count($this->overtime_items) + 1;
        $overtime_item->date = $this->date;
        $overtime_item->details = $this->details;
        $overtime_item->start_time = $this->start_time;
        $overtime_item->end_time = $this->end_time;

        $start_time = Carbon::parse($overtime_item->start_time);
        $end_time = Carbon::parse($overtime_item->end_time);

        $overtime_item->total_hour = $end_time->diffInHours($start_time);

        $this->overtime_items[] = $overtime_item;

        $this->total_hours += $overtime_item->total_hour;
    }

    // submit function
    public function submit() {

        // dd(Auth::user()->staff->expenseClaims->last()->items);

        $overtime_claim = new OvertimeClaim();

        $overtime_claim->staff_id = Auth::user()->staff->id;
        $overtime_claim->ot_code = 1.5;
        $overtime_claim->total_claim = $this->total_hours * $overtime_claim->ot_code;
        $overtime_claim->total_hours = $this->total_hours;
        $overtime_claim->save();

        Auth::user()->staff->overtimeClaims()->save($overtime_claim);

        $overtime_claim = Auth::user()->staff->overtimeClaims->last();

        foreach ($this->overtime_items as $item) {
            $overtime_item = new OvertimeItem();
            $overtime_item->date = $item['date'];
            $overtime_item->details = $item['details'];
            $overtime_item->start_time = $item['start_time'];
            $overtime_item->end_time = $item['end_time'];
            $overtime_item->total_hour = $item['total_hour'];

            $overtime_claim->items()->save($overtime_item);
        }

        return redirect()->route('overtime-claim.index')->with('success', 'Overtime claim created successfully.');
    }

    // destroy function
    public function destroy($index) {
        foreach ($this->overtime_items as $key => $item) {
            if ($item['index'] == $index) {
                unset($this->overtime_items[$key]);

                $this->total_hours -= $item['total_hour'];
            }
        }
    }
}
