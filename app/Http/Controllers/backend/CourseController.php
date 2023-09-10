<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Exports\CourseExport;
use Maatwebsite\Excel\Facades\Excel;


class CourseController extends Controller {
    // index function
    public function index(Request $request) {

        $items = ['id', 'name', 'created_at', 'updated_at'];

        if ($request->keyword) {
            $keyword = $request->keyword;
            $courses = Course::where('name', 'LIKE', "%$keyword%")
                ->sortable()
                ->latest()
                ->paginate(10);
        } else {
            $courses = Course::sortable()->latest()->paginate(10);
        }

        $courses = Course::sortable()->latest()->paginate(10);
        return view('backend/course/index', compact('courses', 'items'));
    }

    public function create() {
        return view('backend/course/create');
    }

    // export function
    public function exportAsExcel() {
        return Excel::download(new CourseExport, 'courses.xlsx');
    }

    // edit function
    public function edit($id) {
        $course = Course::findOrFail($id);
        return view('backend.course.edit', compact('course'));
    }

    // destroy function
    public function destroy($id) {
        $course = Course::findOrFail($id);
        if ($course->delete()) {
            return redirect()->route('course.index')->with('success', 'Course deleted successfully');
        } else {
            return redirect()->route('course.index')->with('error', 'Course failed to delete');
        }
    }
}
