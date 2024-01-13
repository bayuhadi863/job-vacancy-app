<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cvs;
use App\Models\User;
use App\Models\Educations;
use App\Models\Experiences;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CvsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user = Auth::user();
      $cvs = Cvs::where('user_id', $user->id)->with('educations')->with('experiences')->first();

      return view('pelamar.cv.tampil', ['cvs' => $cvs, 'user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelamar.cv.tambah');
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
        'gender' => 'required',
        'birthplace' => 'required',
        'birthdate' => 'required',
        'address' => 'required',
        'telephone' => 'required',
        'photo' => 'required|mimes:png,jpg,jpeg|max:2048',
      ]);

      $imageName = time().'.'.$request->photo->extension();

      $request->photo->move(public_path('photo'), $imageName);

      $cvs = new Cvs;

      $cvs->gender = $request->input('gender');
      $cvs->birthplace = $request->input('birthplace');
      $cvs->birthdate = $request->input('birthdate');
      $cvs->address = $request->input('address');
      $cvs->telephone = $request->input('telephone');
      $cvs->photo = $imageName;
      $cvs->user_id = Auth::user()->id;

      $cvs->save();

      return redirect('/cvs');
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
        $cvs = Cvs::find($id);
        return view("pelamar.cv.edit",["cvs" => $cvs]);
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
          'gender' => 'required',
          'birthplace' => 'required',
          'birthdate' => 'required',
          'address' => 'required',
          'telephone' => 'required',
          'photo' => 'mimes:png,jpg,jpeg|max:2048',
        ]);

        $cvs = Cvs::find($id);

        if ($request->has("photo")) {
            $path = "photo/";
            File::delete($path . $cvs->photo);

            $imageName = time().'.'.$request->photo->extension();  
            $request->photo->move(public_path('photo'), $imageName);

            $cvs->photo = $imageName;
        }

        $cvs->gender = $request->input('gender');
        $cvs->birthplace = $request->input('birthplace');
        $cvs->birthdate = $request->input('birthdate');
        $cvs->address = $request->input('address');
        $cvs->telephone = $request->input('telephone');
        $cvs->user_id = Auth::user()->id;

        $cvs->save();

        return redirect("/cvs");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
