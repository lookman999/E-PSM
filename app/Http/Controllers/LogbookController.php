<?php

namespace App\Http\Controllers;

use App\Models\Logbook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LogbookController extends Controller
{
    public function logbookview()
    {
        return View('Logbook.LogbookStudent');
    }

    public function logbookviewSV()
    {
        $USER_ID = session()->get('logged_user');
        $users = DB::table('logbooks')
            ->get();
        return View('Logbook.LogbookSupervisor')->with('meetings', $users);
    }

    public function logbookstudentview()
    {
        $USER_ID = session()->get('logged_user');
        $users = DB::table('logbooks')
            ->where('userID', '=', $USER_ID)
            ->get();
        return View('Logbook.LogbookViewStd')->with('meetings', $users);
    }

    public function logbooksupervisorview()
    {
        $USER_ID = session()->get('logged_user');
        $users = DB::table('logbooks')

            ->get();
        return View('Logbook.LogbookViewSV')->with('meetings', $users);
    }

    function logbookDelete()
    {
        return View('Logbook.LogbookDelete');
    }

    function AddLogbook(Request $req)
    {

        $Title = $req->input('Title');
        $Prepared_by = $req->input('Prepared_by');
        $Date = $req->input('Date');
        $Description = $req->input('Description');


        $logbook = new logbook;

        $logbook->Title = $Title;
        $logbook->Prepared_by = $Prepared_by;
        $logbook->Date = $Date;
        $logbook->userID= session()->get('logged_user');
        $logbook->Description = $Description;
        $logbook->save();
        return redirect("LogbookViewStd");
    }

    function deletelogbook(Request $req)
    {
        DB::table('logbooks')->where('id', '=', $req->id)->delete();
        return redirect("LogbookViewStd")->with('deletelogbook', 'Logbook has been updated.');
    }

    public function showLogbook ($id)
        {
        $users = DB::select('select * from logbooks where id = ?',[$id]);
        return view ('Logbook/LogbookEdit',['users'=>$users]);
        }
    public function updateLogbook(Request $request,$id)
        {
            $Title = $request->input('$Title');
            $Prepared_by = $request->input('$Prepared_by');
            $Date = $request->input('$Date');
            $Description = $request->input('$Description');

            DB::table('Logbooks')->where('id', $id)
            ->update(['Title' => $request->Title]);
            DB::table('Logbooks')->where('id', $id)
            ->update(['Prepared_by' => $request->Prepared_by]);
            DB::table('Logbooks')->where('id', $id)
            ->update(['Date' => $request->Date]);
            DB::table('Logbooks')->where('id', $id)
            ->update(['Description' => $request->Description]);

            return redirect("/LogbookViewStd")->with('updateLogbook', 'Logbook has been updated.');
        }

    public function viewLogbookSV ($id)
    {
        $users = DB::select('select * from logbooks where id = ?',[$id]);
        return view ('Logbook/LogbookSVView',['users'=>$users]);
    }

}
