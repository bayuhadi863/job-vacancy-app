<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cvs;
use App\Models\Educations;
use Illuminate\Support\Facades\Auth;

class EducationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
      return redirect('/cvs');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelamar.educations.tambah');
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
        'tingkat' => 'required',
        'institusi' => 'required',
        'jurusan' => 'required',
        'th_masuk' => 'required',
        'th_lulus' => 'required',
      ]);

      $user = Auth::user();
      $cvs = Cvs::where('user_id', $user->id)->first();

      $educations = new Educations;

      $educations->tingkat = $request->input('tingkat');
      $educations->institusi = $request->input('institusi');
      $educations->jurusan = $request->input('jurusan');
      $educations->th_masuk = $request->input('th_masuk');
      $educations->th_lulus = $request->input('th_lulus');
      $educations->cvs_id = $cvs->id;

      $educations->save();

      return redirect('/educations');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {      
        $cvs = Cvs::find($id);
  
        return view('admin.educations.detail', ['cvs' => $cvs]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $educations = Educations::find($id);
      return view("pelamar.educations.edit",["educations" => $educations]);
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
        'tingkat' => 'required',
        'institusi' => 'required',
        'jurusan' => 'required',
        'th_masuk' => 'required',
        'th_lulus' => 'required',
      ]);

      $user = Auth::user();
      $cvs = Cvs::where('user_id', $user->id)->first();

      $educations = Educations::find($id);

      $educations->tingkat = $request->input('tingkat');
      $educations->institusi = $request->input('institusi');
      $educations->jurusan = $request->input('jurusan');
      $educations->th_masuk = $request->input('th_masuk');
      $educations->th_lulus = $request->input('th_lulus');
      $educations->cvs_id = $cvs->id;

      $educations->save();

      return redirect('/educations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $educations = Educations::find($id);

      $educations->delete();

      return redirect('/educations');
    }
}
