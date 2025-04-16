<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SlipCategory;
use Illuminate\Http\Request;

class SlipCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Token";
        return view('admin.slipcategory.index', ['slipcategories' => SlipCategory::orderBy('id', 'desc')->where('status','Active')->get() , 'title' => $title]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Token-Create";
        return view('admin.slipcategory.create', ['title' => $title]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'title'        => 'required',
                'value'        => 'required',
                'status'        => 'required',
            ],
        );

        SlipCategory::create($request->all());
        return redirect()->route('slipcategory.index')->with('success', __('Slip Category added successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Token-Edit";
        $slipcategory= SlipCategory::find($id);
        return view('admin.slipcategory.edit' ,compact('slipcategory' , 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate(
            $request,
            [
                'title'        => 'required',
                'value'        => 'required',
                'status'        => 'required',
            ],
        );
        // dd($request->all());
        $slipcat = SlipCategory::where('id', $id)->update([
            'title' => $request->input('title'),
            'value' => $request->input('value'),
            'status' => $request->input('status'),
        ]);

        return redirect()->route('slipcategory.index')->with('success', __('Slip Category updated successfully'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        SlipCategory::find($id)->update([
            'status'=>'InActive'
        ]);
        return redirect()->route('slipcategory.index')->with('success' , 'SlipCategory Deleted Successfully');
    }
}
