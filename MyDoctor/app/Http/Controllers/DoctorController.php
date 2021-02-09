<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;

use App\Models\Doctor;
use App\Models\User;
use App\Models\Prescription;

use Log;

class DoctorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:doctor');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    
    /*
     * After logging as doctor the dashboard for doctor
     * @return \Illuminate\Contracts\Support\Referable
     */
    public function doctorDashboard()
    {
        return view('doctor.dashboard');
    }
    
}
