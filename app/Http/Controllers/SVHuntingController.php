<?php

namespace App\Http\Controllers;

use App\Models\SvHunting as SvHunting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\users;
use Illuminate\Support\Facades\Validator;
use App\Models\supervisors;

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
        // $users = DB::table('svhunting')
        //     ->where('userID', '=', $USER_ID)
        //   ->get();
        //   var_dump($users); die();
        $users = DB::table('supervisors')->get();
        // print_r($users);exit;
        return View('SvHunting.ViewSVList',compact('users'));
        // return View('SvHunting.ViewSVList')->with('SvHunting', $users);
    }

    public function destroy($id)
    {
        $users = supervisors::findOrFail($id)->delete();
        // print_r($users);exit;
        return redirect()->back()->with('danger', 'Supervisors Deleted Successfully');
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

    function AddrecordSV(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'Name' => 'required|string',
                'Faculty' => 'required',
                'Expertise' => 'required',
                'Office' => 'required',
                'Email' => 'required|email',
                'Phone_Number' => 'required',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->with('error', 'Something went wrong');
            } else {
                $sv = new supervisors;
                $sv->userID = $request->Supervisor_ID;
                $sv->std_name = $request->Name;
                $sv->faculty = $request->Faculty;
                $sv->expertise = $request->Expertise;
                $sv->office = $request->Office;
                $sv->phone_number = $request->Phone_Number;
                $sv->email = $request->Email;
                $sv->save();
                return redirect(route('Addsv'))->with('success', 'Your Record are inserted');
            }
        }
        catch(\Exception $e)
        {
            return redirect()->back()->with('error', 'Something went wrong'. $e);
        }
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

