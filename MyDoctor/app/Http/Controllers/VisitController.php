<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class VisitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        return view('user.visit.create');
=======
        return view('visit.index');
>>>>>>> f5e71dc1fd59f7dfe9ff9d74744c29a79201feaa
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.visit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    protected function validatorVisit(array $data)
    {
        return Validator::make($data, [
            'id_user'        => ['required', 'integer'],
            'id_doctor'      => ['required', 'integer'],
            'date'           => ['required', 'date'],
            'time'           => ['required'],
        ]);
    }


    public function store(Request $request)
    {
        $this->validatorVisit($request->all())->validate();
        Visit::create([
            'id_user'        => $request->id_user,
            'id_doctor'      => $request->id_doctor,
            'date'           => $request->date,
            'time'           => $request->time,

        ]);
        return redirect()->intended('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function show(Visit $visit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function edit(Visit $visit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visit $visit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visit $visit)
    {
        //
    }
}
