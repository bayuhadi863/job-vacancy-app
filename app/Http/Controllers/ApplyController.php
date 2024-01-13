<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Applications;
use App\Models\User;
use App\Models\Cvs;
use PDF;

class ApplyController extends Controller
{
    public function index()
    {
        $apply = Applications::all();

        return view('admin.applications.index', ['apply' => $apply]);
    }

    public function store($job_id)
    {
        $idUser = Auth::id();

        $apply = new Applications;
        $apply->user_id = $idUser;
        $apply->job_id = $job_id;

        $apply->save();

        return redirect('/applicationhistory');
    }

    public function show($id)
    {

        $apply = Applications::find($id);
        $user = User::find($apply->user_id);
        $cvs = Cvs::where('user_id', $user->id)->with('educations')->with('experiences')->first();

        return view('admin.applications.detile', ['apply' => $apply, 'cvs' => $cvs]);
    }

    public function export($id)
    {
        $apply = Applications::find($id);
        $user = User::find($apply->user_id);
        $cvs = Cvs::where('user_id', $user->id)->with('educations')->with('experiences')->first();

        $pdf = PDF::loadview('admin.applications.layoutpdf', ['apply' => $apply, 'cvs' => $cvs]);
        return $pdf->stream();
    }
}
