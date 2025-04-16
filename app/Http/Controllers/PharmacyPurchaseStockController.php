<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Dector;
use App\Models\Pharmacy;
use App\Models\Sale;
use Illuminate\Http\Request;
use App\Models\MadicineStock;
use App\Models\Slip;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PharmacyPurchaseStockController extends Controller
{


    // Inside your controller or wherever you need to perform this operation
    public function addNewColumn()
    {
        try {
            // Add a new column named 'new_column' to the 'your_table' table
            DB::statement('ALTER TABLE slips ADD comment VARCHAR(255)');

            return "Column 'new_column' added successfully!";
        } catch (\Exception $e) {
            return "Error: " . $e->getMessage();
        }
    }

    public function slipDate()
    {
        $slips = Slip::whereNull('slip_nums')->get();
        // dd($slips);
        foreach ($slips as $slip) {
            date_default_timezone_set('Asia/Karachi');
            // Get the current time in Pakistan
            $inputmonth = date('y-m', strtotime($slip->date));
            $slipcount = Slip::where('date', 'like', '%' . $inputmonth . '%')->whereNotNull('slip_nums')->orderBy('id', 'DESC')->count();

            $current_time = Carbon::now();


            $slipnumber = 'SN-00' . $slipcount + 1 . '-' . date('m-y', strtotime($slip->date));;

            Slip::where('id', $slip->id)->update([
                'slip_nums' => $slipnumber,
            ]);
        }

        $response = [
            "status" => true,
            "message" => "slip create successfullly"
        ];
        return response()->json($response);
    }

    public function deletedfunction()
    {
        $dectors = Slip::whereNull('status')->get();
        // dd($dectors);
        foreach ($dectors as $dectors) {
            Slip::where('id', $dectors->id)->update([
                'status' => 'Active',
            ]);
        }

        // $dectors = Pharmacy::whereNull('status')->get();
        // dd($dectors);
        // foreach ($dectors as $dectors) {
        //     Pharmacy::where('id', $dectors->id)->update([
        //         'status'=>'Active'
        //     ]);
        // }

        $response = [
            "status" => true,
            "message" => "slip create successfullly"
        ];
        return response()->json($response);
    }

    public function index()
    {
        $title = "Pharmacy";
        return view('admin.pharmacy.addpurchasestock', ['pharmacys' => Pharmacy::all(), 'title' => $title]);
    }

    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'title'        => 'required',
                'qty'        => 'required',
                'sale_price'        => 'required',
                'phurcse_price'        => 'required',
                'unit'        => 'required',
                'expire_date' => 'required',
            ],
        );

        $madicine = Pharmacy::find($request->input('phar_id'));

        $inputDate = $request->input('expire_date');
        $carbonDate = Carbon::createFromFormat('d/m/Y', $inputDate);
        $formattedDate = $carbonDate->format('Y-m-d');

        Pharmacy::where('id', $madicine->id)->update([
            'qty' => $request->input('quantity') + $madicine->qty,
            'sale_price' =>  $request->input('sale_price'),
            'phurcse_price' =>  $request->input('phurcse_price'),
        ]);

        $slip = MadicineStock::create([
            'Phar_id' => $request->input('phar_id'),
            'qty' => $request->input('qty'),
            'expire_date' =>  $formattedDate,
            'sale_price' =>  $request->input('sale_price'),
            'phurcse_price' =>  $request->input('phurcse_price'),
            'created_by' => Auth::user()->id,
            'created_name' => Auth::user()->name,
        ]);

        return redirect()->route('purchasestock.index')->with('success', 'Stock Added Successfully');
    }

    public function print($id)
    {
        $slip = Slip::find($id);
        return view('admin.slip.print', compact('slip'));
    }
}
