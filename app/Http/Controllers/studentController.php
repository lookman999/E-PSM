<?php

namespace App\Http\Controllers;

use App\Models\students as students;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class studentController extends Controller
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
            ->Join('students', 'users.userID', '=', 'students.userID')
            ->where('users.userID', '=', $USER_ID)
            ->get();
        return View('StudentProfile.profile')->with('students', $users);
        //var_dump($users);
    }

    public function editprofileSTD()
    {
        $USER_ID = session()->get('logged_user');
        $users = DB::table('users')
            ->Join('students', 'users.userID', '=', 'students.userID')
            ->where('users.userID', '=', $USER_ID)
            ->get();
        return View('StudentProfile.editprofile')->with('students', $users);
        // var_dump($students);

    }

    public function updateSTDprofile(Request $req)
    {
        $faculty = $req->input('faculty');
        $course = $req->input('course');
        $sem_year = $req->input('sem_year');
        $address = $req->input('address');
        $phone = $req->input('phone');
        $email = $req->input('email');

        //table users
        $users = users::where('userID', '=', session()->get('logged_user'))->get()->first();
        $users->phone = $phone;
        $users->email = $email;
        $users->save();
        //table students
        $students = students::where('userID', '=', session()->get('logged_user'))->get()->first();
        $students->faculty = $faculty;
        $students->course = $course;
        $students->sem_year = $sem_year;
        $students->address = $address;
        $students->save();
        return redirect("studentprofile");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\students  $students
     * @return \Illuminate\Http\Response
     */
    public function show(students $students)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\students  $students
     * @return \Illuminate\Http\Response
     */
    public function edit(students $students)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\students  $students
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, students $students)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\students  $students
     * @return \Illuminate\Http\Response
     */
    public function destroy(students $students)
    {
        //
    }
}
