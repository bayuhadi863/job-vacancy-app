<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Jobs;
use App\Models\User;
use App\Models\applications;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function admin()
    {
        $user = User::all();
        $categories = Categories::all();
        $jobs = Jobs::all();
        $applications = applications::all();

        return view('admin.dashboard', ['user' => $user, 'categories' => $categories, 'jobs' => $jobs, 'applications' => $applications]);
    }

    // Fungsi untuk Landing Page
    public function index()
    {
        $categories = Categories::all();
        $jobs = Jobs::all();

        return view('pelamar.pages.landingPage', ['categories' => $categories, 'jobs' => $jobs]);
    }

    public function jobList()
    {
        $categories = Categories::all();
        $jobs = Jobs::all();

        return view('pelamar.pages.jobsPage', ['categories' => $categories, 'jobs' => $jobs]);
    }

    public function jobDetail($id)
    {
        $jobs = Jobs::find($id);
        $categories = Categories::find($jobs->categories_id);

        return view('pelamar.pages.detailJobsPage', ['categories' => $categories, 'jobs' => $jobs]);
    }

    public function applicationHistory()
    {
        $user = Auth::user();
        $applications = $user->applications()->with('jobs')->get();

        return view('pelamar.pages.applicationHistory', ['applications' => $applications]);
    }
}
