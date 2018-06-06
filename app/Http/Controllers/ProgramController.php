<?php

namespace App\Http\Controllers;

use App\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = Program::all();

        return view("programs.index", [
            "programs" => $programs
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("programs.create");
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
          $program = new Program;
          $program->name = $request->name;
          $program->year = $request->year;
          $program->save();
      }
      catch(\Exception $e) {
          // return redirect()->route('programs.index');
          return redirect()->route('programs.create');
      }

      // return redirect()->route('programs.show', ['id' => $program->id]);
      return redirect()->route('programs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $program = Program::find($id);
      return view("programs.show", [
          "program" => $program
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $program = Program::find($id);
      return view("programs.edit", [
          "program" => $program
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
          $program = Program::find($id);
          $program->name = $request->name;
          $program->year = $request->year;
          $program->save();
      }
      catch(\Exception $e) {
          // return redirect()->route('movies.index');
          return redirect()->route('programs.edit', ['id' => $id]);
      }

      return redirect()->route('programs.show', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $program = Program::find($id);
      $program->delete();

      return redirect()->route('programs.index');
    }
}
