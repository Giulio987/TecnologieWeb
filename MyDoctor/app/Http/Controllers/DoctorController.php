<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use Log;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAdmin()
    {
        return view('admin.doctor.index');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:doctor');
    }

    /*
     * After logging as doctor the dashboard for doctor
     * @return \Illuminate\Contracts\Support\Referable
     */
    public function doctorDashboard()
    {
        return view('doctor.dashboard');
    }
    
}
