<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Log;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexDoctor()
    {
        $doctors = Doctor::all();
        return view('admin.doctor.index', compact('doctors'));
    }
    public function createDoctor()
    {
        $doctors = Doctor::all();

        return view('admin.doctor.create', compact('doctors'));
    }
    public function storeDoctor(Request $request)
    {
        $input = $request -> all();
        Doctor::create($input);

        Log::info($input);

        return redirect('/admin/doctor');
    }


    public function indexUser()
    {
        return view('admin.user.index');
    }


    /*
     * After logging as client the dashboard for client
     * @return \Illuminate\Contracts\Support\Referable
     * */
    public function adminDashboard()
    {
        return view('admin.dashboard');
    }
}