<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $students = Student::all();

      return view("students.index", [
          "students" => $students
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("students.create");
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
          $student = new Student;
          $student->first_name = $request->first_name;
          $student->last_name = $request->last_name;
          $student->email = $request->email;
          $student->save();
      }
      catch(\Exception $e) {
          // return redirect()->route('students.index');
          return redirect()->route('students.create');
      }

      // return redirect()->route('students.show', ['id' => $student->id]);
      return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $student = Student::find($id);
      return view("students.show", [
          "student" => $student
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
      $student = Student::find($id);
      return view("students.edit", [
          "student" => $student
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
          $student = Student::find($id);
          $student->first_name = $request->first_name;
          $student->last_name = $request->last_name;
          $student->email = $request->email;
          $student->save();
      }
      catch(\Exception $e) {
          // return redirect()->route('students.index');
          return redirect()->route('students.edit', ['id' => $id]);
      }

      return redirect()->route('students.show', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $student = Student::find($id);
      $student->delete();

      return redirect()->route('students.index');
    }
}
