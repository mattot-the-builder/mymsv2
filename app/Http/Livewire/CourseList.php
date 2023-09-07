<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;
use Carbon\Carbon;

class CourseList extends Component {

    public $course_id = null;
    public $course = null, $fee, $date, $started_at, $ended_at;

    public function render() {
        return view('livewire.course-list');
    }


    public function getCourse() {
        $this->course = Course::findOrFail($this->course_id);
        $this->fee = $this->course->fee;
        $this->date = $this->course->date;
        $this->started_at = Carbon::parse($this->course->started_at)->format('h:i A');
        $this->ended_at = Carbon::parse($this->course->ended_at)->format('h:i A');
    }
}
