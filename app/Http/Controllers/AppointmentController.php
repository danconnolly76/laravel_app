<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Appointment;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
use Auth;
use Exception; 

class AppointmentController extends Controller
{
   /**
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('appointment.index');
    }
    
    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function read()
    {
        $appointment = Appointment::orderBy('date', 'asc')->orderBy('time', 'asc')->get();
        return view('appointment.read')->with('appointment', $appointment);
    }

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $docs = Doctor::all();
        return view('appointment.create')->with('docs', $docs);
    }
    

    public function search(Request $request)
    {
        $this->validate($request, array(
           'searchBox' => 'required'
        ));
        $input = $request->input('searchBox');
        $search = Appointment::where('doctor', 'LIKE', '%'.$input.'%')->get();
        return view('appointment.search')->with('search', $search);
        exit();   
    }


    /**
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
        $appointment->user_id = auth()->user()->id;
        $appointment->doctor = $request->input('doctor');
        $appointment->date = $request->input('date');
        $appointment->time = $request->input('time');
        $appointment->comment = $request->input('comment');
        $appointment->save();

       return redirect('/appointment/read');
    }

    /** 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $appointment = Appointment::find($id);
        return view('appointment.show')->with('appointment', $appointment);
    }

    /**
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docs = Doctor::all();
        $appointment = Appointment::find($id);
        return view('appointment.edit')->with('appointment', $appointment)->with('docs', $docs);
    }

    /**
     * 
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'patient_name' => 'required|max:80',
            'doctor' => 'required',
            'date' => 'required',
            'time' => 'required',
            'comment' => 'required|max:180'
        ]);

        $appointment = Appointment::find($id);
        $appointment->patient_name = $request->input('patient_name');
        $appointment->doctor = $request->input('doctor');
        $appointment->date = $request->input('date');
        $appointment->time = $request->input('time');
        $appointment->comment = $request->input('comment');
        $appointment->save();

       return redirect('/appointment/read');
    }

    public function searchAppointment(Request $request)
    {
        return view('appointment.search');
    }

    /**
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
