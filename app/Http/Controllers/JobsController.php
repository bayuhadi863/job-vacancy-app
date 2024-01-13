<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Jobs;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $jobs = Jobs::all();
      return view('admin.jobs.tampil', ['jobs' => $jobs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $categories = Categories::all();
      
      return view('admin.jobs.tambah', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validated = $request->validate([
        'title' => 'required',
        'description' => 'required',
        'requirements' => 'required',
        'location' => 'required',
        'close_date' => 'required',
        'categories_id' => 'required',
      ]);

      $jobs = new Jobs;

      $jobs->title = $request->input('title');
      $jobs->description = $request->input('description');
      $jobs->requirements = $request->input('requirements');
      $jobs->location = $request->input('location');
      $jobs->close_date = $request->input('close_date');
      $jobs->categories_id = $request->input('categories_id');

      $jobs->save();

      return redirect('/jobs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $jobs = Jobs::find($id);
      $categories = Categories::find($jobs->categories_id);

      return view('admin.jobs.detail', ['categories' => $categories, 'jobs' => $jobs]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $categories = Categories::all();
      $jobs = Jobs::find($id);

      return view('admin.jobs.edit', ['categories' => $categories, 'jobs' => $jobs]);
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
      $validated = $request->validate([
        'title' => 'required',
        'description' => 'required',
        'requirements' => 'required',
        'location' => 'required',
        'close_date' => 'required',
        'categories_id' => 'required',
      ]);

      $jobs = Jobs::find($id);

      $jobs->title = $request->input('title');
      $jobs->description = $request->input('description');
      $jobs->requirements = $request->input('requirements');
      $jobs->location = $request->input('location');
      $jobs->close_date = $request->input('close_date');
      $jobs->categories_id = $request->input('categories_id');

      $jobs->save();

      return redirect('/jobs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $jobs = Jobs::find($id);

      $jobs->delete();

      return redirect('/jobs');
    }
}
