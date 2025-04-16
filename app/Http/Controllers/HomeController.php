<?php

namespace App\Http\Controllers;

use App\Models\Slip;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function filterUsers(Request $request)
    {

        $keyword = $request->input('keyword');
        $filteredUsers = Slip::where('slip_nums', 'like', '%' . $keyword . '%')->get();

        return response()->json(['users' => $filteredUsers]);
    }


    public function profileupdate(Request $request, $id)
    {
        $this->validate($request, [
            'name' => ['required'],
            'address' => ['required'],
            'last_name' => ['required'],

        ]);
        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->extension();

            $request->image->move(public_path('school/user/'), $fileName);
            $path = 'public/school/user/' . $fileName;
        } else {
            $path = auth()->user()->image;
        }
        User::where('id', $id)->update([
            'name' => $request->name,
            'first_name' => $request->name,
            'last_name' => $request->last_name,
            'address' => $request->address,
            'image' => $path


        ]);
        return redirect()->back()->with('success', 'User Profile change successfully');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $title = "Profile-Update";
        return view('home' , compact('title'));
    }

    public function profile()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $title = "Profile Update";

        return view('profile', compact('user' ,'title'));
    }

    public function userprofile()
    {
        $title = "Profile Update";
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('profile', compact('user','title'));
    }

    public function updatePassword(Request $request)
    {
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);


        #Match The Old Password
        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return redirect()->route('doctors.index')->with('success' , 'Password changed successfully');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function managerHome()
    {
        return view('managerHome');
    }
}
