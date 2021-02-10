<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Validator;


use App\Models\Prescription;
use App\Models\User;
use App\Models\Doctor;


class PrescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.prescription.create');

    }


    protected function validatorPrescription(array $data)
    {
        return Validator::make($data, [
            'id_user'        => ['required', 'integer'],
            'id_doctor'      => ['required', 'integer'],
            'description'    => ['required'],
            'status'         => ['required'],
            'date'           => ['required', 'date'],
            'type'           => ['required'],
        ]);
    }


    public function store(Request $request)
    {
        $this->validatorPrescription($request->all())->validate();
        Prescription::create([
            'id_user'        => $request->id_user,
            'id_doctor'      => $request->id_doctor,
            'description'    => $request->description,
            'status'         => $request->status,
            'date'           => $request->date,
            'type'           => $request->type,

        ]);
        return redirect()->intended('/home');
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

    public function editDoctor(Prescription $prescription)
    {
        return view('doctor.prescription.create', compact('prescription'));
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
        $doctors = Doctor::all();
        $users = User::all();

        return view('admin.prescription.create', compact('users', 'doctors'));
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


