<?php

namespace App\Http\Controllers;

use App\Models\technicians as technicians;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class technicianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $USER_ID = session()->get('logged_user');
        $users = DB::table('users')
            ->Join('technicians', 'users.userID', '=', 'technicians.userID')
            ->where('users.userID', '=', $USER_ID)
            ->get();
        return View('TechnicianProfile.profile')->with('technicians', $users);
    }

    public function editprofile()
    {
        $USER_ID = session()->get('logged_user');
        $users = DB::table('users')
            ->Join('technicians', 'users.userID', '=', 'technicians.userID')
            ->where('users.userID', '=', $USER_ID)
            ->get();
        return View('TechnicianProfile.editprofile')->with('technicians', $users);
        // var_dump($students);

    }

    public function updateTECHprofile(Request $req)
    {
        $office = $req->input('office');
        $phone = $req->input('phone');
        $email = $req->input('email');

        //table users
        $users = users::where('userID', '=', session()->get('logged_user'))->get()->first();
        $users->phone = $phone;
        $users->email = $email;
        $users->save();
        //table students
        $technicians = technicians::where('userID', '=', session()->get('logged_user'))->get()->first();
        $technicians->office = $office;
        $technicians->save();
        return redirect("technicianprofile");
    }
}
