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

    public function updatetechnician(Request $req)
    {

    }
}
