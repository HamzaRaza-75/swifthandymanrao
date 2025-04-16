<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PharmacyRequest;
use App\Models\MadicineStock;
use App\Models\Pharmacy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class PharmacyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Pharmacy";
        return view('admin.pharmacy.index',['pharmacy' => Pharmacy::orderBy('id','desc')->where('status','Active')->get() , 'title' => $title]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Medicine-Create";
        return view('admin.pharmacy.create',['title' => $title]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $this->validate(
            $req,
            [
                'title'        => 'required',
                'qty'        => 'required',
                'sale_price'        => 'required',
                'phurcse_price'        => 'required',
                'unit'        => 'required',
                'expire_date' => 'required',
            ],
        );
        $inputDate = $req->input('expire_date');
        $carbonDate = Carbon::createFromFormat('d/m/Y', $inputDate);
        $formattedDate = $carbonDate->format('Y-m-d');

        $pharmacy = Pharmacy::create([
            'title' => $req->input('title'),
            'detail' => $req->input('detail'),
            'qty' => $req->input('qty'),
            'unit' =>  $req->input('unit'),
            'expire_date' =>  $formattedDate,
            'sale_price' =>  $req->input('sale_price'),
            'phurcse_price' =>  $req->input('phurcse_price'),
            'created_by' => Auth::user()->id,
            'created_name' => Auth::user()->name,
        ]);

        MadicineStock::create([
            'Phar_id' => $pharmacy->id,
            'qty' => $req->input('qty'),
            'expire_date' =>  $formattedDate,
            'sale_price' =>  $req->input('sale_price'),
            'phurcse_price' =>  $req->input('phurcse_price'),
            'created_by' => Auth::user()->id,
            'created_name' => Auth::user()->name,
        ]);

        return redirect()->route('pharmacy.index')->with('success' , 'Medicine Has Been Added Successfully !');
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
        $title = "Pharmacy-Edit";
        $pharmacy= Pharmacy::find($id);
        return view('admin.pharmacy.edit' ,compact('pharmacy','title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, string $id)
    {

        $this->validate(
            $req,
            [
                'title'        => 'required',
                'qty'        => 'required',
                'sale_price'        => 'required',
                'phurcse_price'        => 'required',
                'unit'        => 'required',
                'expire_date' => 'required',
            ],
        );
        $inputDate = $req->input('expire_date');
        $carbonDate = Carbon::createFromFormat('d/m/Y', $inputDate);
        $formattedDate = $carbonDate->format('Y-m-d');

        Pharmacy::where('id', $id)->update([
            'title' => $req->input('title'),
            'detail' => $req->input('detail'),
            'qty' => $req->input('qty'),
            'unit' =>  $req->input('unit'),
            'expire_date' =>  $formattedDate,
            'sale_price' =>  $req->input('sale_price'),
            'phurcse_price' =>  $req->input('phurcse_price'),
        ]);
        return redirect()->route('pharmacy.index')->with('success', 'Medicine Has Been Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $medicine = Pharmacy::find($id)->update([
            'status'=>'Active'
        ]);
        if($medicine)
        {
            return redirect()->route('pharmacy.index')->with('success' , 'Medicine Deleted Successfully');
        }
        else
        {
            return redirect()->route('pharmacy.index')->with('error' , 'Medicine is not deleted');
        }

    }
}
