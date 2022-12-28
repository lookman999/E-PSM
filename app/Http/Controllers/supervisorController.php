<?php

namespace App\Http\Controllers;

use App\Models\supervisors as supervisors;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class supervisorController extends Controller
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
            ->Join('supervisors', 'users.userID', '=', 'supervisors.userID')
            ->where('users.userID', '=', $USER_ID)
            ->get();
        return View('SupervisorProfile.profile')->with('supervisors', $users);
    }

    public function editprofile()
    {
        $USER_ID = session()->get('logged_user');
        $users = DB::table('users')
            ->Join('supervisors', 'users.userID', '=', 'supervisors.userID')
            ->where('users.userID', '=', $USER_ID)
            ->get();
        return View('SupervisorProfile.editprofile')->with('supervisors', $users);
        // var_dump($students);

    }

    public function updateSVprofile(Request $req)
    {
        $faculty = $req->input('faculty');
        $expertise = $req->input('expertise');
        $office = $req->input('office');
        $phone = $req->input('phone');
        $email = $req->input('email');

        //table users
        $users = users::where('userID', '=', session()->get('logged_user'))->get()->first();
        $users->phone = $phone;
        $users->email = $email;
        $users->save();
        //table supervisors
        $supervisors = supervisors::where('userID', '=', session()->get('logged_user'))->get()->first();
        $supervisors->faculty = $faculty;
        $supervisors->expertise = $expertise;
        $supervisors->office = $office;
        $supervisors->save();
        return redirect("supervisorprofile");
    }
}
