<?php

namespace App\Http\Controllers;

use App\Models\Proposal;
use App\Models\Title;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManageProposalController extends Controller
{

    public function viewAll()
    {
        
        $title = null;
        $stdID = session()->get('logged_user');
        $user = users::where('userID', $stdID)->first();
        // dd($user);
        
        if ($user->user_type == 'Coordinator') {
            $title = Title::with('proposal','student')->get();

        } elseif ($user->user_type == 'Supervisor') {
            // dd($user->supervisor);
            $title = Title::where('svID',$user->supervisor->svID)->with('proposal','student')->get();

        } else {
            dd('error');
        }
        $count = 0;
        return view('ManageProposal.view-all', ['titles' => $title, 'count' => $count]);
    }

    public function viewOne()
    {
        $stdID = session()->get('logged_user');
        $user = users::where('userID', $stdID)->first();
        
        $student = $user->student;
        $title_model = $student->title;
        dd($title_model);
        if (!is_null($title_model)) {
            $proposal_model = $title_model->proposal;
            return view('ManageProposal.detail',[
                'title' => $title_model->psm_title,
                'proposal' => $proposal_model,
                'proposal_id' => $proposal_model->proposal_id
            ]);
        } else {
            return view('ManageProposal.detail');
        }
    }

    public function detail($proposal_id)
    {
        $proposal = Proposal::with('title')->find($proposal_id);
        $title = $proposal->title->psm_title;
        return view('ManageProposal.detail',[
            'title' => $title,
            'proposal' => $proposal,
            'proposal_id' => $proposal_id
        ]);
    }

    public function edit($proposal_id)
    {
        $proposal = Proposal::with('title')->find($proposal_id);
        $title = $proposal->title;
        return view('ManageProposal.edit', [
            'proposal_id' => $proposal_id,
            'title' => $title,
            'proposal' => $proposal
        ]);
    }

    public function update(Request $request, $proposal_id)
    {
        $proposal = Proposal::with('title')->find($proposal_id);
        $title = $proposal->title;

        $proposal->update($request->except('psm_title'));
        $title->update($request->only('psm_title'));

        return redirect()->route('manage-proposal.detail',$proposal_id);
    }

    public function setApproval(Request $request, $proposal_id)
    {
        $user = Auth::user();
        $proposal = Proposal::with('title')->find($proposal_id);
        $title = $proposal->title;

        // if ($user->can('set approval proposal')) {
        //     $proposal->status_approval = $request->status_approval;
        //     $proposal->save();
        // }

        return redirect()->route('manage-proposal.detail',$proposal_id);
    }

}
