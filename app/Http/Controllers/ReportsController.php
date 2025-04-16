<?php

namespace App\Http\Controllers;

use App\Models\Dector;
use App\Models\Slip;
use App\Models\SlipCategory;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class ReportsController extends Controller

{

    // public function index(Request $request, Slip $slip)
    // {
    //     $title = "Slip Reports";

    //     $slipcategory = SlipCategory::where('status','Active')->get();
    //     $dectors = Dector::where('status','Active')->get();

    //     $fromDate = $request->get('from_date');
    //     $toDate = $request->get('to_date');
    //     $tokentype = $request->get('tokentype');
    //     $slipreports = $slip->newQuery();
    //     $slipcategory_id = 3;

    //     if ($request->filled('from_date') && $request->filled('to_date')) {

    //         $slipreports = $slipreports->whereBetween('date', [$fromDate, $toDate]);
    //         $selecteddate = $fromDate;
    //         $enddate = $toDate;
    //     }


    //     if ($request->filled('tokentype')) {
    //         $slipcategory_id = 1;
    //         $slipreports = $slipreports->where('token_type', $tokentype);
    //         $selectedtokentype = $tokentype;
    //     }


    //     $sum = $slipreports->sum('cash');
    //     $patients = $slipreports->orderBy('id','DESC')->paginate(10);

    //     $categories = SlipCategory::get();


    //     foreach ($categories as $category) {

    //         $slipreportsreport = $slip->newQuery();
    //         if ($request->filled('from_date') && $request->filled('to_date')) {
    //             $slipreportsreport = $slipreportsreport->whereBetween('date', [$fromDate, $toDate]);
    //         }

    //         if ($request->filled('tokentype')) {
    //             $slipreportsreport = $slipreportsreport->where('token_type', $tokentype);
    //         }

    //         $slipreportsrcash = $slipreportsreport->where('token_type', $category->title)->sum('cash');

    //         $slipreportsreport = $slipreportsreport->where('token_type', $category->title)->count();

    //         $category->totalslipcategory = $slipreportsreport;
    //         $category->slipreportsrcash = $slipreportsrcash;
    //     }

    //     return view('admin.reports.slipreport', compact('title', 'slipcategory', 'patients', 'categories', 'sum', 'slipcategory_id' , 'dectors'));
    // }

    public function index(Request $request, Slip $slip)
    {
        $title = "Slip Reports";

        $slipcategory = SlipCategory::all();
        // dd($slipcategory);
        $dectors = Dector::all();

        $fromDate = $request->get('from_date');
        $toDate = $request->get('to_date');
        $tokentype = $request->get('tokentype');
        $dector_id = $request->get('dector');
        $slipreports = $slip->newQuery();
        $slipcategory_id = SlipCategory::count();


        if ($request->filled('from_date') && $request->filled('to_date')) {

            $slipreports = $slipreports->whereBetween('date', [$fromDate, $toDate]);
            $selecteddate = $fromDate;
            $enddate = $toDate;
        }


        if ($request->filled('tokentype')) {
            $slipcategory_id = 1;
            $slipreports = $slipreports->where('token_type', $tokentype);
            $selectedtokentype = $tokentype;
        }

        if ($request->filled('dector')) {

            $slipreports = $slipreports->where('dector_id', $dector_id);;
        }


        $sum = $slipreports->sum('cash');
        $patients = $slipreports->orderBy('id','DESC')->paginate(10)->withQueryString();

        $categories = SlipCategory::get();


        foreach ($categories as $category) {

            $slipreportsreport = $slip->newQuery();
            if ($request->filled('from_date') && $request->filled('to_date')) {
                $slipreportsreport = $slipreportsreport->whereBetween('date', [$fromDate, $toDate]);
            }

            if ($request->filled('tokentype')) {
                $slipreportsreport = $slipreportsreport->where('token_type', $tokentype);
            }
            if ($request->filled('dector')) {

                $slipreports = $slipreports->where('dector_id', $dector_id);;
            }


            $slipreportsrcash = $slipreportsreport->where('token_type', $category->title)->sum('cash');

            $slipreportsreport = $slipreportsreport->where('token_type', $category->title)->count();

            $category->totalslipcategory = $slipreportsreport;
            $category->slipreportsrcash = $slipreportsrcash;
        }

        $dectors= Dector::all();

        return view('admin.reports.slipreport', compact('title','dectors', 'slipcategory', 'patients', 'categories', 'sum', 'slipcategory_id' , 'dectors')); }

    // public function index(Request $request)
    // {
    //     $title = "Slip Reports";

    //     $slipcategory = SlipCategory::where('status','Active')->get();
    //     $dectors = Dector::where('status','Active')->get();

    //     $fromDate = $request->get('from_date');
    //     $toDate = $request->get('to_date');
    //     $tokentype = $request->get('tokentype');
    //     $slipreports = Slip::get();
    //     $slipcategory_id = 3;

    //     if ($request->filled('from_date') && $request->filled('to_date')) {
    //         $slipreports = $slipreports->whereBetween('date', [$fromDate, $toDate]);
    //         $selecteddate = $fromDate;
    //         $enddate = $toDate;
    //     }

    //     if ($request->filled('tokentype')) {
    //         $slipcategory_id = 1;
    //         $slipreports = $slipreports->where('token_type', $tokentype);
    //         $selectedtokentype = $tokentype;
    //     }


    //     $sum = $slipreports->sum('cash');
    //     $patients = $slipreports->orderBy('id','DESC')->paginate(10);

    //     $categories = SlipCategory::get();


    //     foreach ($categories as $category) {

    //         $slipreportsreport = Slip::get();
    //         if ($request->filled('from_date') && $request->filled('to_date')) {
    //             $slipreportsreport = $slipreportsreport->whereBetween('date', [$fromDate, $toDate]);
    //         }

    //         if ($request->filled('tokentype')) {
    //             $slipreportsreport = $slipreportsreport->where('token_type', $tokentype);
    //         }

    //         $slipreportsrcash = $slipreportsreport->where('token_type', $category->title)->sum('cash');

    //         $slipreportsreport = $slipreportsreport->where('token_type', $category->title)->count();

    //         $category->totalslipcategory = $slipreportsreport;
    //         $category->slipreportsrcash = $slipreportsrcash;
    //     }

    //     return view('admin.reports.slipreport', compact('title', 'slipcategory', 'patients', 'categories', 'sum', 'slipcategory_id' , 'dectors'));
    // }

    public function destroy(string $id)
    {
        Slip::find($id)->update([
            'status' => 'InActive'
        ]);
        return redirect()->route('slip.index')->with('done', 'slip has been deleted successfully');
    }
}
