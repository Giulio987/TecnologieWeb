<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;

use App\Models\Prescription;
use App\Models\User;

use Log;

class PrescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function show(Prescription $prescription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function edit(Prescription $prescription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prescription $prescription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prescription $prescription)
    {
        //
    }

    // ********** PRESCRIPTION PER USO DOTTORI **********
    public function indexDoctor()
    {
        $prescriptions = Prescription::paginate(3);
        return view('doctor.prescription.index', compact('prescriptions'));
    }

    public function createDoctor()
    {
        //Prende i pazienti(user) che hanno l'id_doctor del doctor autenticato

        $users = User::where('id_doctor', '=', auth()->guard('doctor')->user()->id)->get();

        return view('doctor.prescription.create', compact('users'));
    }

    public function storeDoctor(Request $request)
    {
        $input = $request -> all();

        Prescription::create($input);

        Log::info($input);  /*da togliere dopo che funziona*/

        return redirect('/doctor/prescription');
    }

    // ********** FINE PRESCRIPTION USO DOCTOR **********

    // ********** PRESCRIPTION PER USO ADMIN **********
    public function indexAdmin()
    {
        $prescriptions = Prescription::paginate(3);
        return view('admin.prescription.index', compact('prescriptions'));
    }

    public function createAdmin()
    {
        //Prende i pazienti(user) che hanno l'id_doctor del doctor autenticato

        $prescriptions = Prescription::all();

        return view('admin.prescription.create', compact('prescriptions'));
    }

    public function storeAdmin(Request $request)
    {
        $input = $request -> all();

        Prescription::create($input);

        Log::info($input);  /*da togliere dopo che funziona*/

        return redirect('/admin/prescription');
    }

    // ********** FINE PRESCRIPTION USO ADMIN **********
}


