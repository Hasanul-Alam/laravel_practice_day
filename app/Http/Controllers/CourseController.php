<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public $course, $courses;

    public function add()
    {
        return view('course.add');
    }

    public function manage()
    {
        $this->courses = Course::all();
        return view('course.manage', ['courses' => $this->courses]);
    }

    public function create(Request $request)
    {
        Course::newCourse($request);
        return redirect('/add-course')->with('message', 'Course Added Successfully.');
    }

    public function edit($id)
    {
        $this->course = Course::find($id);
        return view('course.edit', ['course' => $this->course]);
    }

    public function update(Request $request, $id)
    {
        Course::updateCourse($request, $id);
        return redirect('manage-course')->with('message', 'Course Info Updated Successfully.');
    }
}

