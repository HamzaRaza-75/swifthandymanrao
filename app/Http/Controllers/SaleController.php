<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Medicine Sale";
        $sales = Sale::orderBy('id','Desc')->paginate(15);
        return view('admin.sale.allsale',compact('sales' , 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sales = Sale::orderBy('id','Desc')->get();
        return view('species.sale.addnewsale',compact('sales'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('species.sale.viewsale');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
