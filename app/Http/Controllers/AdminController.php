<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_doctor_view');
    }

    public function upload(Request $request)
    {
        $doctor = new Doctor;

        $image = $request->file;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->file->move('doctorimage', $imagename);
        $doctor->image = $imagename;

        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->room = $request->room;
        $doctor->speciality = $request->speciality;

        $doctor->save();

        return redirect()->back()->with('msg', 'Doctor added successfully');
    }


    public function showappointment()
    {
        $data = Appointment::all();
        return view('admin.showappointment', compact('data'));
    }

    public function approved($id)
    {
        $data = Appointment::find($id);
        $data->status = 'approved';
        $data->save();

        return redirect()->back();

    }


    public function canceled($id)
    {
        $data = Appointment::find($id);
        $data->status = 'canceled';
        $data->save();

        return redirect()->back();
    }

    public function showdoctor()
    {
        $data = Doctor::all();
        return view('admin.showdoctor', compact('data'));
    }


    public function deletedoctor($id)
    {
        $data = Doctor::find($id);
        $data->delete();

        return redirect()->back();
    }

    public function updatedoctor($id)
    {
        $data = Doctor::find($id);
        return view('admin.update_doctor', compact('data'));
    }

    public function editdoctor(Request $request, $id)
    {
        $doctor = Doctor::find($id);

        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->room = $request->room;
        $doctor->speciality = $request->speciality;

        $image = $request->file;

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->file->move('doctorimage', $imagename);
            $doctor->image = $imagename;
        }


        $doctor->save();
        return redirect()->back()->with('msg', 'Doctor Details Updated Successfully');
    }
}