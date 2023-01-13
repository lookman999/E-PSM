<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    $logged_user = session()->get('logged_user');
    $user_type = session()->get('user_type');


    if (!$logged_user) {
        return view('welcome');
    } else {

        if ($user_type == 'Student') {
            return redirect('studentprofile');
        } elseif ($user_type == 'Supervisor') {
            return redirect('supervisorprofile');
        } elseif ($user_type == 'Technician') {
            return redirect('technicianprofile');
        }
    }
});

Route::get('/home', function () {
    return view('homepage');
});

Route::view('register', 'register');
Route::view('forgot', 'forgot');

Route::post('user_login', 'UsersController@login');
Route::post('user_register', 'UsersController@register');

Route::post('user_reset', 'UsersController@resetpassword');

Route::get('/logout', 'UsersController@logout');

//Profile
use App\Http\Controllers\studentController;
Route::get('studentprofile', [studentController::class, 'index']);
Route::get('STDedit', [studentController::class, 'editprofileSTD']);
Route::post('STD_update', 'studentController@updateSTDprofile');

use App\Http\Controllers\supervisorController;
Route::get('supervisorprofile', [supervisorController::class, 'index']);
Route::get('SVedit', [supervisorController::class, 'editprofile']);
Route::post('SV_update', 'supervisorController@updateSVprofile');

use App\Http\Controllers\technicianController;
Route::get('technicianprofile', [technicianController::class, 'index']);
Route::get('TECHedit', [technicianController::class, 'editprofile']);
Route::post('TECH_update', 'technicianController@updateTECHprofile');

use App\Http\Controllers\coordinatorController;
Route::get('coordinatorprofile', [coordinatorController::class, 'index']);
Route::get('COedit', [coordinatorController::class, 'editprofile']);
Route::post('CO_update', 'coordinatorController@updateCOprofile');

//MeetingBooking
use App\Http\Controllers\MeetingController;

Route::get('AddMeetingBooking', [MeetingController::class, 'MeetingInterface']);//student add meeting booking
Route::get('ViewMeetingBooking', [MeetingController::class, 'viewMeetingBooking']); //student view meeting
Route::get('EditMeetingBooking', [MeetingController::class, 'editMeetingBooking']); //student edit meetig booking
Route::get('RetriveMeeting', [MeetingController::class, 'retriveMeeting']); //sv view meeting list detail
Route::get('AddMeetingStatus', [MeetingController::class, 'addMeetingStatus']); //sv add meeting status

Route::post('MeetingBooking', 'MeetingController@addMeetingBooking');


//Logbook
use App\Http\Controllers\LogbookController;

Route::get('LogbookStudent', [LogbookController::class, 'logbookview']);
Route::get('LogbookSupervisor', [LogbookController::class, 'logbookviewSV']);
//Route::get('/editlogbook/{id}', [LogbookController::class, 'showLogbook']);
Route::get('LogbookAdd', [LogbookController::class, 'logbookAdd']);
Route::get('LogbookDelete', [LogbookController::class, 'logbookDelete']);
Route::get('LogbookViewStd', [LogbookController::class, 'logbookstudentview']);
Route::get('LogbookViewSV', [LogbookController::class, 'logbooksupervisorview']);
//Route::get('/editlogbook/{id}','App\Http\Controllers\LogbookController@showLogbook');


Route::post('AddLogBook', 'LogbookController@AddLogbook');
Route::post('deletelogbook','LogbookController@deletelogbook');
Route::post('/editlogbook/{id}','LogbookController@updateLogbook');

//SV Hunting
use App\Http\Controllers\SvHuntingController;

Route::get('ViewSVList','SvHuntingController@viewSVList');
Route::get('ViewSVListCo','SvHuntingController@viewSVListCo');
Route::get('Addsv','SvHuntingController@Add');
Route::get('ApplySV','SvHuntingController@Apply');
//Route::get('ViewSvList',[SvHuntingController::class, 'LihatSV']); //View sv list
Route::get('/search','SvHuntingController@search');
Route::get('EditSv', [SvHuntingController::class, 'EditSv']);

// Route::get('Addsv',[SvHuntingController::class, 'addsv']);
// Route::get('ApplySV', [SvHuntingController::class, 'applySV']);
Route::get('ViewApplicationStatus',[SvHuntingController::class, 'viewApplicationStatus']);

//Route::get('Addsv', [SvHuntingController::class, 'SvHuntingInterface']);
//Route::get('Addsv',[SvHuntingController::class, 'addsv']);
//Route::get('ApplySV', [SvHuntingController::class, 'applySV']);
//Route::get('ViewApplicationStatus',[SvHuntingController::class, 'viewApplicationStatus']);
//Route::get('apply', [SVHuntingController::class, 'applySV']);

// manage inventory
use App\Http\Controllers\ManageInventoryController;

Route::group(['prefix' => 'manage-inventory', 'as' => 'manage-inventory.'], function (){
    Route::get('/items', [ManageInventoryController::class,'viewAll'])
        ->name('view-all');
    Route::get('/my-items', [ManageInventoryController::class, 'viewOne'])
        ->name('view-one');

    Route::post('/add', [ManageInventoryController::class, 'store'])
        ->name('store');

    Route::get('/show/{item_id}', [ManageInventoryController::class, 'show'])
        ->name('show');

    Route::get('/edit/{item_id}', [ManageInventoryController::class, 'edit'])
        ->name('edit');
    Route::post('/update/{item_id}', [ManageInventoryController::class, 'update'])
        ->name('update');
    Route::get('/delete/{item_id}', [ManageInventoryController::class, 'destroy'])
        ->name('destroy');

    Route::post('/approval/{item_id}', [ManageInventoryController::class, 'setApproval'])
        ->name('approval');
});




// manage title
use App\Http\Controllers\ManageTitleController;

Route::group(['prefix' => 'manage-title', 'as' => 'manage-title.'], function (){
    Route::get('/view', [ManageTitleController::class, 'index'])
        ->name('view');
    Route::get('/my-title', [ManageTitleController::class, 'myTitles'])
        ->name('my-titles');
    Route::get('/my-title-sv', [ManageTitleController::class, 'myTitlessv'])
        ->name('my-titles-sv');

    Route::get('/edit/{title_id}', [ManageTitleController::class, 'edit'])
        ->name('edit');
    Route::post('/update/{title_id}', [ManageTitleController::class, 'update'])
        ->name('update');

    Route::post('/add', [ManageTitleController::class, 'add'])
        ->name('add');
    Route::get('/delete/{title_id}', [ManageTitleController::class, 'delete'])
        ->name('delete');

    Route::get('/view-book', [ManageTitleController::class, 'book'])
        ->name('view-book');
    Route::get('/book-title/{title_id}', [ManageTitleController::class, 'bookTitle'])
        ->name('book-title');
    Route::get('/remove-book-title/{title_id}', [ManageTitleController::class, 'removeBook'])
        ->name('remove-book-title');
});


// manage proposal
use App\Http\Controllers\ManageProposalController;

Route::group(['prefix' => 'manage-proposal', 'as' => 'manage-proposal.'], function () {
    Route::get('/proposals', [ManageProposalController::class, 'viewAll'])
        ->name('view-all');
    Route::get('/proposal', [ManageProposalController::class, 'viewOne'])
        ->name('view-one');
    Route::get('/detail/{proposal_id}', [ManageProposalController::class, 'detail'])
        ->name('detail');

    Route::get('/add', [ManageProposalController::class, 'create'])
        ->name('create');
    Route::post('/store', [ManageProposalController::class, 'store'])
        ->name('store');

    Route::get('/edit/{proposal_id}', [ManageProposalController::class, 'edit'])
        ->name('edit');
    Route::post('/update/{proposal_id}', [ManageProposalController::class, 'update'])
        ->name('update');

    Route::post('/approval/{proposal_id}', [ManageProposalController::class, 'setApproval'])
        ->name('approval');
});
//test
