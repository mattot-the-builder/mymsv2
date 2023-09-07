<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Course;

class CourseForm extends Component {

    public $contents = [];
    public $name, $content, $date, $started_at, $ended_at, $fee;

    public function render() {
        return view('livewire.course-form');
    }

    public function addContent() {
        // append content to contents
        $this->contents[] .= $this->content;
    }

    public function store() {
        $course = new Course();
        $course->name = $this->name;
        $course->contents = json_encode($this->contents);
        $course->date = $this->date;
        $course->started_at = $this->started_at;
        $course->ended_at = $this->ended_at;
        $course->fee = $this->fee;

        if ($course->save()) {
            return redirect()->route('course.index')->with('success', 'Course created successfully');
        } else {
            return redirect()->route('course.index')->with('error', 'Course failed to create');
        }
    }
}
