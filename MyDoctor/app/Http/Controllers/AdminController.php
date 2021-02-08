<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('admin.doctor.index');
    }
    public function indexPres()
    {
        //$pres = Prescription::all();
        return view('admin.prescription.index');
    }
    public function indexUser()
    {
        return view('admin.user.index');
    }

    public function indexVisit()
    {
        return view('admin.visit.index');
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