<?php

namespace App\Http\Controllers;

use App\Classes\Constants\ApprovalStatus;
use App\Models\Proposal;
use App\Models\students;
use App\Models\Title;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ManageTitleController extends Controller
{


    public function index()
    {
        $titles = Title::with(['supervisor','supervisor_detail'])->get();
        $count = 0;
        // dd($titles);
        return view('ManageTitle.index', ['titles' => $titles, 'count' => $count]);
    }

    // supervisor
    public function myTitles()
    {
        $svID = session()->get('logged_user');

        $titles = Title::where('svID', $svID)->get();
        $count = 0;

        return view('ManageTitle.myTitle',['titles' => $titles, 'count' => $count]);
    }
    public function myTitlessv()
    {
        $svID = session()->get('logged_user');

        $titles = DB::table('titles')
            ->Join('users', 'titles.stdID', '=', 'users.userID')
            ->get();
        $count = 0;

        return view('ManageTitle.myTitlesv',['titles' => $titles, 'count' => $count]);
    }
    public function edit($title_id)
    {
        $title = Title::where('title_id',$title_id)->first();
        return view('ManageTitle.edit',[
            'title' => $title
        ]);
    }

    public function update(Request $request, $title_id)
    {
        $title = Title::find($title_id);
        $title->psm_title = $request->psm_title;

        $title->save();

        return redirect()->route('manage-title.my-titles');
    }


    public function add(Request $request)
    {   $USER_ID = session()->get('logged_user');
        $title = new Title;

        request()->validate([
          'psm_title' => 'required',
        ]);

        $title->stdID = $USER_ID;
        $title->svID = session()->get('logged_user');
        $title->psm_title = $request->psm_title;
    
        $title->save();
        
        $proposal = Proposal::create([
            'title_id' => $title->title_id,
            'objective' => 'none',
            'scope_of_project' => 'none',
            'problem_background' => 'none',
            'techniques' => 'none',
            'status_approval' => 2
        ]);

        return redirect()->route('manage-title.my-titles');
    }

    public function delete($title_id)
    {
        Title::find($title_id)->proposal->delete();
        Title::destroy($title_id);
        return redirect()->route('manage-title.my-titles');
    }

    public function book()
    {
        $model = students::where('stdID', session()->get('logged_user'))->first();
        $book_status = !is_null($model->title);
        $titles = Title::where('svID',$model->svID)->get();
        $count = 0;
        return view('ManageTitle.book', ['titles' => $titles, 'count' => $count, 'book_status' => $book_status]);
    }

    public function bookTitle($title_id)
    {
        $title_model = Title::find($title_id)->with('student')->first();

        $title_model->std_id = Auth::id();

        $title_model->save();
        return redirect()->route('manage-title.view-book');
    }

    public function removeBook($proposal_id)
    {
        $proposal_model = Proposal::with('title')->find($proposal_id);
        $title_model = $proposal_model->title;

        $proposal_model->objective = 'none';
        $proposal_model->scope_of_project = 'none';
        $proposal_model->problem_background = 'none';
        $proposal_model->techniques = 'none';
        $proposal_model->status_approval = ApprovalStatus::PENDING;
        $title_model->std_id = 0;

        $proposal_model->save();
        $title_model->save();

        return redirect()->route('manage-title.view-book');
    }
}
