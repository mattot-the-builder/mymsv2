<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Course;

class CourseForm extends Component {

    public $course = null;
    public $contents = [];
    public $name, $content, $date, $started_at, $ended_at, $fee;

    public function mount() {
        if ($this->course) {
            $this->name = $this->course->name;
            $this->contents = explode(', ', $this->course->contents);
            $this->date = $this->course->date;
            $this->started_at = $this->course->started_at;
            $this->ended_at = $this->course->ended_at;
            $this->fee = $this->course->fee;
        }
    }

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

    public function update() {
        $course = Course::findOrFail($this->course->id);
        $course->name = $this->name;
        $course->contents = json_encode($this->contents);
        $course->date = $this->date;
        $course->started_at = $this->started_at;
        $course->ended_at = $this->ended_at;
        $course->fee = $this->fee;

        if ($course->save()) {
            return redirect()->route('course.index')->with('success', 'Course updated successfully');
        } else {
            return redirect()->route('course.index')->with('error', 'Course failed to update');
        }
    }

}
