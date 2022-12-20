<?php

namespace App\Http\Controllers;

use App\Models\meetings as meetings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MeetingController extends Controller
{
    //student
    public function MeetingInterface()
    {
        $USER_ID = session()->get('logged_user');
        $users = DB::table('users')
            ->Join('meetings', 'users.userID', '=', 'meetings.userID')
            ->where('users.userID', '=', $USER_ID)
            ->get();
        return View('Meeting.AddMeetingBooking')->with('meetings', $users);
        // var_dump($students);

    }
    
    function addMeetingBooking(Request $req) //student add meeting booking
    {
        
        $Meeting_Date = $req->input('Meeting_Date');
        $Meeting_Start = $req->input('Meeting_Start');
        $Meeting_End = $req->input('Meeting_End');
        $Meeting_Purpose = $req->input('Meeting_Purpose');
 
        //table meetings
        $meetings = new meetings;
        $meetings->userID = session()->get('logged_user');
        $meetings->Meeting_Date = $Meeting_Date;
        $meetings->Meeting_Start = $Meeting_Start;
        $meetings->Meeting_End = $Meeting_End;
        $meetings->Meeting_Purpose = $Meeting_Purpose;
        $meetings->save();
        return redirect("ViewMeetingBooking");

    }
    
    function viewMeetingBooking() //student view meeting booking
    {
        $USER_ID = session()->get('logged_user');
        $users = DB::table('meetings')
            ->where('userID', '=', $USER_ID)
            ->get();
        return View('Meeting.ViewMeetingBooking')->with('meetings', $users);
         //var_dump($users);
    }
   
     //supervisor
     function SVMeetingInterface() 
     {
         $USER_ID = session()->get('logged_user');
         $users = DB::table('users')
             ->Join('meetingsv', 'users.userID', '=', 'meetingsv.userID')
             ->where('users.userID', '=', $USER_ID)
             ->get();
         return View('Meeting.AddMeeetingStatus')->with('meetingsv', $users);
        //  // var_dump($students);
 
     }
     function addMeetingStatus()  //sv add meeting status
     {
    //      $Meeting_Status = $req->input('Meeting_Status');
    //      $Meeting_Comment = $req->input('Meeting_Comment');
 
    //      //table meetings
    //      $meetingsv = new meetingsv;
    //      $meetingsv->userID = session()->get('logged_user');
    //      $meetingsv->Meeting_Status = $Meeting_Status;
    //      $meetingsv->Meeting_Comment = $Meeting_Comment; 
    //      $meetingsv->save();
          return View("Meeting.AddMeetingStatus");
 
      }

    function retriveMeeting()  //sv view meeting list detail
    {
        
        $USER_ID = session()->get('logged_user');
        $users = DB::table('meetingsv')
            ->where('userID', '=', $USER_ID)
            ->get();
        return View('Meeting.RetriveMeeting')->with('meetingsv', $users);
         //var_dump($users);

      
    }
    function editMeetingBooking()  //sv edit meeting status
    {
        return View('Meeting.EditMeetingBooking'); 
    }
    
    
    
}

