<?php

namespace App\Http\Controllers;

use App\Models\SvHunting as SvHunting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\users;


class SvHuntingController extends Controller
{
    //create function to read from form
    public function search()
    {
    $search_text =$_GET['query'];
    $SvHunting = SvHunting:: where('supervisorname','LIKE', '%'.$search_text.'%')->get();
    $SvHunting = SvHunting:: where('expertise','LIKE', '%'.$search_text.'%')->get();

    return view('SvHunting.search', compact('SvHunting'));
    }

    //student
    public function svHuntingInterface()
    {
         $USER_ID = session()->get('logged_user');
        $users = DB::table('users')
            ->Join('sv_hunting', 'users.userID', '=', 'sv_hunting.userID')
            ->where('sv_hunting.userID', '=', $USER_ID)
            ->get();
        return View('SvHunting.ApplySV')->with('sv_hunting', $users);
         //var_dump($students);
    }

    function viewSVList() // view supervisor list
    {
        $USER_ID = session()->get('logged_user');
        $users = DB::table('svhunting')
            ->where('userID', '=', $USER_ID)
          ->get();
          //var_dump($users); die();
        return View('SvHunting.ViewSVList')->with('SvHunting', $users);
    }

    function viewSVListCo() // view supervisor list
    {
        $USER_ID = session()->get('logged_user');
        $users = DB::table('svhunting')
            ->where('userID', '=', $USER_ID)
          ->get();
          //var_dump($users); die();
        return View('SvHunting.ViewSVListCo')->with('SvHunting', $users);
    }

    function Add() // view supervisor list
    {
        $USER_ID = session()->get('logged_user');
        $users = DB::table('svhunting')
            ->where('userID', '=', $USER_ID)
          ->get();
          //var_dump($users); die();
        return View('SvHunting.Addsv')->with('SvHunting', $users);

    }

    function Apply(Request $req) // view supervisor list
    {
        $title = $req->input('title');
        $topic = $req->input('topic');
        $reason = $req->input('reason');
        $USER_ID = session()->get('logged_user');
        $users = DB::table('svhunting')
            ->where('userID', '=', $USER_ID)
          ->get();
          //var_dump($users); die();
        return View('SvHunting.ApplySV')->with('SvHunting', $users);

    }


    function viewApplicationStatus(Request $require)//student view application status
    {
        //$USER_ID = session()->get('logged_user');
        //$users = DB::table('sv_hunting')
         //   ->where('userID', '=', $USER_ID)
         //   ->get();
        return View('SvHunting.ViewApplicationStatus');//->with('sv_hunting', $users);
         //var_dump($users);
    }

    //Coordinator
    function CoordinatorInterface()
     {
         $USER_ID = session()->get('logged_user');
         $users = DB::table('users')
             ->Join('sv_hunting_co', 'users.userID', '=', 'sv_Hunting_co.userID')
             ->where('users.userID', '=', $USER_ID)
             ->get();
         return View('SvHunting.Addsv')->with('sv_hunting_co', $users);
         // var_dump($Coordinator);

     }

    function addsv(Request $req)
    {
        return View('SvHunting.Addsv');
    }

    function editSv(Request $require)
    {
        return View('SvHunting.EditSv');
    }
}

