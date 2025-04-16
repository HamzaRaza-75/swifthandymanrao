<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Dector;
use App\Models\Pharmacy;
use Illuminate\Http\Request;
use App\Models\Sale;
use App\Models\Slip;

class AdminDashboardController extends Controller
{

    private function getTimeOfDay($time)
    {
        $hour = (int)substr($time, 0, 2);

        if ($hour >= 5 && $hour < 12) {
            return 'morning';
        } elseif ($hour >= 12 && $hour < 16) {
            return 'afternoon';
        } else {
            return 'evening';
        }
    }

    private function getGreeting($timeOfDay)
    {
        switch ($timeOfDay) {
            case 'morning':
                return 'Good morning!';
                break;
            case 'afternoon':
                return 'Good afternoon!';
                break;
            case 'evening':
                return 'Good evening!';
                break;
            default:
                return 'Hello!';
        }
    }

    public function index()
    {
        $title = "Dashboard";
        $sale = Sale::sum('total_price') + Slip::sum('cash');
        $patients = Slip::count();
        $medicines = Pharmacy::count();
        $doctors = Dector::where('status','Active')->count();
        $malepatients = Slip::where('gender' , 'Male')->count();
        $femalepatients = Slip::where('gender' , 'Female')->count();

        date_default_timezone_set('Asia/Karachi');
        $currentTime = date('H:i');
        $timeOfDay = $this->getTimeOfDay($currentTime);

        $greeting = $this->getGreeting($timeOfDay);
        return view('admin.dashboard' , ['greeting' => $greeting , 'sale' => $sale , 'patients' => $patients , 'medicines' => $medicines , 'doctors' => $doctors , 'femalepatients' => $femalepatients , 'malepatients' => $malepatients , 'title' => $title]);
    }
}
