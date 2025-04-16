<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Dector;
use App\Models\Slip;
use App\Models\SlipCategory;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class SlipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $title = "Token-Create";
        $dectors = Dector::where('status','Active')->get();
        $slipcategories = SlipCategory::where('status','Active')->get();

        $search = $request->get('search');
        if(isset($search)){
            $slips = Slip::where('slip_nums', 'like', '%' . $search . '%')
            ->orderBy('id','DESC')
            ->where('status','Active')
            ->paginate(10);
        }
        else
        {
            $slips = Slip::orderBy('id', 'desc')->where('status','Active')->paginate(10);
        }


        return view('admin.slip.index', compact('slips', 'dectors', 'slipcategories','title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'name'        => 'required',
                'age'        => 'required',
                'gender'        => 'required',
                'dector'        => 'required',
                'token_type'        => 'required',
            ],
        );


        $inputDate = $request->input('date');
        $date = date('Y-m-d');
        $dector = Dector::find($request->dector);
        $dector_id = $dector->id;
        $deector_name = $dector->name;
        $slipcategory = SlipCategory::find($request->token_type);
        $slipcategory_id = $slipcategory->id;
        $slipcategory_name = $slipcategory->title;
        $slipcategory_price = $slipcategory->value;
        date_default_timezone_set('Asia/Karachi');
        // Get the current time in Pakistan
        $inputmonth = date('Y-m', strtotime($request->input('date')));
        $slipcount = Slip::where('date', 'like', '%' . $inputmonth . '%')->orderBy('id', 'DESC')->count();

        $current_time = Carbon::now();
        $slip = Slip::create([
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'gender' => $request->input('gender'),
            'token_type' => $slipcategory_name,
            'cash' => $slipcategory_price,
            'dector_id' => $dector_id,
            'date' => $inputDate,
            'token_By' => Auth::user()->id,
            'dector_name' => $deector_name,
            'sliptime' => $current_time,
            'token_holder' => Auth::user()->name,
            'comment' => $request->input('comment'),
        ]);

        $slipnumber = 'SN-00' . $slipcount + 1 . '-' . date('m-y', strtotime($request->input('date')));;

        Slip::where('id', $slip->id)->update([
            'slip_nums' => $slipnumber,
        ]);
        $slipcreate = 'od';

        return redirect()->route('slip.index', compact('slipcreate'))->with('success', __('Slip added successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = "Token-View";
        $slip = Slip::findorFail($id);
        return view('admin.slip.view', compact('slip','title'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate(
            $request,
            [
                'name'        => 'required',
                'age'        => 'required',
                'gender'        => 'required',
                'dector'        => 'required',
                'token_type'        => 'required',
            ],
        );

        $inputDate = $request->input('date');
        $carbonDate = Carbon::createFromFormat('d/m/Y', $inputDate);
        $formattedDate = $carbonDate->format('Y-m-d');

        $dector = Dector::find($request->dector);
        $dector_id = $dector->id;
        $deector_name = $dector->name;
        $slipcategory = SlipCategory::find($request->token_type);
        $slipcategory_id = $slipcategory->id;
        $slipcategory_name = $slipcategory->title;
        $slipcategory_price = $slipcategory->value;

        $slip = Slip::where('id', $id)->update([
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'dector_id' => $dector_id,
            'dector_name' => $deector_name,
            'token_type' => $slipcategory_name,
            'date' => $formattedDate,
            'cash' => $slipcategory_price,
            'gender' => $request->input('gender'),
            'comment' => $request->input('comment'),
        ]);

        // $slipnumber = 'SN-100' . $slip->slip_nums . '-' . date('m-Y', strtotime($request->input('date')));

        // $updaetdslip = Slip::find($id);

        // $updaetdslip->update([
        //     'slip_nums' => $slipnumber,
        // ]);

        return redirect()->route('slip.index')->with('updated_slip', __('Slip updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         Slip::find($id)->update([
            'status'=>'InActive'
        ]);
        return redirect()->route('slip.index')->with('done', 'slip has been deleted successfully');
    }
}
