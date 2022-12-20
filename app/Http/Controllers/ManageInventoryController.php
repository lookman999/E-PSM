<?php

namespace App\Http\Controllers;

use App\Classes\Constants\ApprovalStatus;
use App\Models\Item;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\users;

class ManageInventoryController extends Controller
{

    public function viewAll()
    {
        $all_user = users::all();
        $item_model = Item::with('student')->get();
        $count = 0;
        return view('ManageInventory.all-items',[
            'items' => $item_model,
            'count' => $count,
            'users' => $all_user
        ]);
    }


    public function viewOne()
    {
        $item_model = Item::where('stdID', session()->get('logged_user'))->get();
        $count = 0;
        return view('ManageInventory.all-items',[
            'items' => $item_model,
            'count' => $count
        ]);
    }


    public function setApproval(Request $request, $item_id)
    {
        $item_model = Item::find($item_id);

        $item_model->status_approval = $request->status_approval;
        $item_model->save();

        return redirect()->route('manage-inventory.show',$item_id);
    }


    public function store(Request $request)
    {
        $stdID = session()->get('logged_user');

        $date_start = DateTime::createFromFormat('d/m/Y', $request->date_start);
        $date_end = DateTime::createFromFormat('d/m/Y', $request->date_end);
        $item_model = new Item;
        $item_model->stdID = $stdID;
        $item_model->name = $request->name;
        $item_model->quantity = $request->quantity;
        $item_model->status_approval = ApprovalStatus::PENDING;
        $item_model->date_start = $date_start->format('Y-m-d');
        $item_model->date_end = $date_end->format('Y-m-d');

        $item_model->save();

        return redirect()->route('manage-inventory.view-one');
    }


    public function show($item_id)
    {
        $userID = session()->get('logged_user');
        $user = users::where('userID', $userID)->first();
        $item_model = Item::find($item_id);
        return view('ManageInventory.show',[
            'item' => $item_model,
            'user' => $user
        ]);
    }


    public function edit($title_id)
    {
        $item_model = Item::find($title_id);
        return view('ManageInventory.edit',[
            'item' => $item_model
        ]);
    }


    public function update(Request $request, $item_id)
    {
        $date_start = DateTime::createFromFormat('d/m/Y', $request->date_start);
        $date_end = DateTime::createFromFormat('d/m/Y', $request->date_end);
        $item_model = Item::find($item_id);
        $item_model->name = $request->name;
        $item_model->quantity = $request->quantity;
        $item_model->date_start = $date_start->format('Y-m-d');
        $item_model->date_end = $date_end->format('Y-m-d');

        $item_model->save();

        return redirect()->route('manage-inventory.show', $item_id);
    }


    public function destroy($item_id)
    {
        $item_model = Item::destroy($item_id);
        return  redirect()->route('manage-inventory.view-one');
    }
}
