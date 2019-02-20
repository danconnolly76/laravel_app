<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Appointment;
use DB;
class AppointmentController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('appointment.index');
    }

    /**
     * Displays all appointments to screen.
     *
     * @return \Illuminate\Http\Response
     */
    public function read()
    {
        $appointment = Appointment::orderBy('date', 'asc')->orderBy('time', 'asc')->get();
        return view('appointment.read')->with('appointment', $appointment);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $docs = Doctor::all();
        return view('appointment.create')->with('docs', $docs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'patient_name' => 'required|max:80',
            'doctor' => 'required',
            'date' => 'required',
            'time' => 'required',
            'comment' => 'required|max:180'
        ]);

        $appointment = new Appointment;
        $appointment->patient_name = $request->input('patient_name');
        $appointment->doctor = $request->input('doctor');
        $appointment->date = $request->input('date');
        $appointment->time = $request->input('time');
        $appointment->comment = $request->input('comment');
        $appointment->save();

       return redirect('/appointment/read');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showDocs($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $appointment = Appointment::find($id);
        $appointment->delete();
        return redirect('/appointment/read');
    }
}
