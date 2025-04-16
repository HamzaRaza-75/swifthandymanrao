<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dector;
use App\Http\Requests\DoctorRequest;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Doctors-List";
        return view('admin.doctors.index', ['doctors' => Dector::orderBy('id', 'desc')->where('status','Active')->get(), 'title' => $title]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Doctor-Create";
        return view('admin.doctors.create', ['title' => $title]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'firstname' => 'required|max:20',
            'lastname' => 'max:20',
            'phonenumber' => 'required|max:20',
            'gender' => 'required|max:20',
            'education' => 'required|max:70',
            'status' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:4000',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '-docimg.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('/uploadedimages'), $imageName);
        } else {
            $imageName = "";
        }
        Dector::Create([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'name' => $request->input('firstname') . ' ' . $request->input('lastname'),
            'phone_num' => $request->input('phonenumber'),
            'gender' => $request->input('gender'),
            'education' => $request->input('education'),
            'status' => $request->input('status'),
            'image' => $imageName,
        ]);

        return redirect()->route('doctors.index')->with('success', 'Doctor Created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Doctors-Edit";
        $doctor = Dector::find($id);
        return view('admin.doctors.edit', compact('doctor', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $validated = $request->validate([
            'firstname' => 'required|max:20',
            'lastname' => 'max:20',
            'phonenumber' => 'required|max:20',
            'gender' => 'required|max:20',
            'education' => 'required|max:70',
            'status' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:4000',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '-docimg.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('/uploadedimages'), $imageName);
        } else {
            $image = Dector::find($id);
            $imageName = $image->image;
        }

        Dector::where('id', $id)->update([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'name' => $request->input('firstname') . ' ' . $request->input('lastname'),
            'phone_num' => $request->input('phonenumber'),
            'gender' => $request->input('gender'),
            'education' => $request->input('education'),
            'status' => $request->input('status'),
            'image' => $imageName,
        ]);

        return redirect()->route('doctors.index')->with('success', 'Doctor is updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        Dector::where('id', $id)->update([
            'status' => "InActive"
        ]);

        return redirect()->route('doctors.index')->with('success', 'Doctor has been deleted successfully');
    }
}
