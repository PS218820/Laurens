<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Projects;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Project = Projects::all();
      return view ('WorkingProjects', ['Project' => $Project]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'name' => 'required',
        'description' => 'required',
        'finished' => 'required',
      ]);

      Projects::create($request->all());
      // return redirect()->route('workingprojects.index');
      return view ('Index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $Project = Projects::find($id);
      return view('ProjectsEdit', ['Project'=> $Project]);
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
      $request->validate([
      'name' => 'required',
      'description' => 'required',
      'finished' => 'required',
    ]);

      Projects::find($id)->update($request->except(['id', '_token']));
      // return redirect()->route('workingprojects.index');
      return view ('Index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Projects::destroy($id);
      // return redirect()->route('workingprojects.index');
      return view ('Index');

    }
}
