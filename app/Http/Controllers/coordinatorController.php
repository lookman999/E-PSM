<?php

namespace App\Http\Controllers;

use App\Models\coordinators as coordinators;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class coordinatorController extends Controller
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
            ->Join('coordinators', 'users.userID', '=', 'coordinators.userID')
            ->where('users.userID', '=', $USER_ID)
            ->get();
        return View('CoordinatorProfile.profile')->with('coordinators', $users);
    }

    public function editprofile()
    {
        $USER_ID = session()->get('logged_user');
        $users = DB::table('users')
            ->Join('coordinators', 'users.userID', '=', 'coordinators.userID')
            ->where('users.userID', '=', $USER_ID)
            ->get();
        return View('CoordinatorProfile.editprofile')->with('coordinators', $users);
        // var_dump($students);

    }

    public function updateCOprofile(Request $req)
    {
        $faculty = $req->input('faculty');
        $office = $req->input('office');
        $phone = $req->input('phone');
        $email = $req->input('email');

        //table users
        $users = users::where('userID', '=', session()->get('logged_user'))->get()->first();
        $users->phone = $phone;
        $users->email = $email;
        $users->save();
        //table coordinators
        $coordinators = coordinators::where('userID', '=', session()->get('logged_user'))->get()->first();
        $coordinators->faculty = $faculty;
        $coordinators->office = $office;
        $coordinators->save();
        return redirect("coordinatorprofile");
    }
}
