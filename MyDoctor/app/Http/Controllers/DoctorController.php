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

    // PRESCRIPTION PER USO DOTTORI
    public function indexPrescription()
    {
        $prescriptions = Prescription::all();
        return view('doctor.prescription.index', compact('prescriptions'));
    }

    public function createPrescription()
    {
        //Prende i pazienti(user) che hanno l'id_doctor del doctor autenticato

        $users = User::where('id_doctor', '=', auth()->guard('doctor')->user()->id)->get();

        return view('doctor.prescription.create', compact('users'));
    }

    public function storePrescription(Request $request)
    {
        $input = $request -> all();

        Prescription::create($input);

        Log::info($input);  /*da togliere dopo che funziona*/

        return redirect('/doctor/prescription');
    }

    // FINE PRESCRIPTION USO DOTTORI

    public function storeAdmin(Request $request)
    {
        $input = $request -> all();
        Doctor::create($input);

        return redirect('/admin/doctor');
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
