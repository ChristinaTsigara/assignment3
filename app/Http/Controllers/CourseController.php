<?php

namespace App\Http\Controllers;

use App\Course;
use App\Program;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $courses = Course::all();

      return view("courses.index", [
          "courses" => $courses
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("courses.create", [
          "programs" => Program::All()
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      try {
          $course = new Course;
          $course->name = $request->name;
          $course->short_name = $request->short_name;
          $course->program_id = $request->program_id;
          $course->save();
      }
      catch(\Exception $e) {
          // return redirect()->route('courses.index');
          return redirect()->route('courses.create');
      }

      // return redirect()->route('courses.show', ['id' => $course->id]);
      return redirect()->route('courses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $course = Course::find($id);
      return view("courses.show", [
          "course" => $course
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $course = Course::find($id);
      return view("courses.edit", [
          "course" => $course,
          "programs" => Program::All()

      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      try {
          $course = Course::find($id);
          $course->name = $request->name;
          $course->short_name = $request->short_name;
          $course->program_id = $request->program_id;
          $course->save();
      }
      catch(\Exception $e) {
          // return redirect()->route('courses.index');
          return redirect()->route('courses.edit', ['id' => $id]);
      }

      return redirect()->route('courses.show', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $course = Course::find($id);
      $course->delete();

      return redirect()->route('courses.index');
    }
}
