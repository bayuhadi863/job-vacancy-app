<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cvs;
use App\Models\Experiences;
use Illuminate\Support\Facades\Auth;

class ExperiencesController extends Controller
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
      return view('pelamar.experiences.tambah');
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
        'perusahaan' => 'required',
        'posisi' => 'required',
        'tgl_masuk' => 'required',
        'tgl_keluar' => 'required',
        'jobdesc' => 'required',
      ]);

      $user = Auth::user();
      $cvs = Cvs::where('user_id', $user->id)->first();

      $experiences = new Experiences;

      $experiences->perusahaan = $request->input('perusahaan');
      $experiences->posisi = $request->input('posisi');
      $experiences->tgl_masuk = $request->input('tgl_masuk');
      $experiences->tgl_keluar = $request->input('tgl_keluar');
      $experiences->jobdesc = $request->input('jobdesc');
      $experiences->cvs_id = $cvs->id;

      $experiences->save();

      return redirect('/experiences');
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
      $experiences = experiences::find($id);
      return view("pelamar.experiences.edit",["experiences" => $experiences]);
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
        'perusahaan' => 'required',
        'posisi' => 'required',
        'tgl_masuk' => 'required',
        'tgl_keluar' => 'required',
        'jobdesc' => 'required',
      ]);

      $user = Auth::user();
      $cvs = Cvs::where('user_id', $user->id)->first();

      $experiences = Experiences::find($id);

      $experiences->perusahaan = $request->input('perusahaan');
      $experiences->posisi = $request->input('posisi');
      $experiences->tgl_masuk = $request->input('tgl_masuk');
      $experiences->tgl_keluar = $request->input('tgl_keluar');
      $experiences->jobdesc = $request->input('jobdesc');
      $experiences->cvs_id = $cvs->id;

      $experiences->save();

      return redirect('/experiences');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $experiences = Experiences::find($id);

      $experiences->delete();

      return redirect('/experiences');
    }
}
