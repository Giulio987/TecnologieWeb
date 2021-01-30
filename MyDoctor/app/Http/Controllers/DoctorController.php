<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    /*
     * After logging as doctor the dashboard for doctor
     * @return \Illuminate\Contracts\Support\Referable
     * */
    public function doctorDashboard()
    {
        return view('doctor.dashboard');
    }
}
