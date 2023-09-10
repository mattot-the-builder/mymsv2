<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CourseEdit extends Component
{

    public $course, $course_id;

    public function render()
    {
        $course = Course::find($course_id);
        return view('livewire.course-edit');
    }
}
