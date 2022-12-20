<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Validator;
use Exception;
use App\Models\users as users;
use App\Models\students as students;
use App\Models\supervisors as supervisors;
use App\Models\technicians as technicians;
use App\Models\coordinators as coordinators;


class UsersController extends Controller
{
    function login(Request $req)
    {

        // Validator

        $messages = [
            'required' => 'diperlukan',
        ];

        $rules = [
            'userID' => 'required',
            'password' => 'required'
        ];

        $validator = $req->validate($rules, $messages);

        $data = $req->input();

        // Select eloquent
        $check = users::where('userID', $req->userID)->exists();

        if ($check) {
            $users = users::where('userID', $req->userID)
                ->get()
                ->first();

            $user_type = $users->user_type;
            $userID = $users->userID;
            $name = $users->name;
            $password = $users->password;

            if ($password == $data['password']) {
                // Save into session
                Session::put('user_type', $user_type);
                Session::put('logged_user', $userID);   //put the data and in session
                Session::put('name', $name);

                // if ($user_type == 'Student') {
                //     return redirect('studentprofile');
                // } elseif ($user_type == 'Supervisor') {
                //     return redirect('supervisorprofile');
                // } elseif ($user_type == 'Technician') {
                //     return redirect('technicianprofile');
                // } elseif ($user_type = 'Coordinator') {
                //     return redirect('coordinatorprofile');
                // }
                return redirect('home');

            } else {

                // custom back validator message
                $custom_msg = [
                    'password' => 'Wrong password entered',
                ];

                // return back with custom error message
                return redirect()->back()->withInput()->withErrors($custom_msg);
            }
        } else {

            $custom_msg = [
                'studentID' => 'Unregistered user ID',
            ];

            return redirect()->back()->withInput()->withErrors($custom_msg);
        }

        // return $check;
    }



    function register(Request $req)
    {

        // validation
        $messages = [
            'required' => 'diperlukan',
            'between' => 'harus diantara :min - :max aksara',
            'min' => 'minimum :min aksara',
            'confirmed' => 'kata laluan tidak sepadan'
        ];

        $rules = [

            'password' => 'required | between:5,10 | confirmed',
            'password_confirmation' => 'required',
            'userID' => 'required | min:5',
            'name' => 'required | min:5',
            'phone' => 'required',
            'email' => 'required | email'
        ];

        $req->validate($rules, $messages);

        // return all input data
        $data = $req->input();

        // add additional field data
        $data['purpose'] = 'Pendaftaran';

        $userID = $req->userID;
        $users = new users;
        $currentdt = date('d-m-Y H:i:s');

        // Insert
        $users->user_type = $req->user_type;
        $users->password = $req->password;
        $users->userID = $userID;
        $users->name = $req->name;
        $users->phone = $req->phone;
        $users->email = $req->email;
        $users->created_at = $currentdt;
        $users->updated_at = $currentdt;

        $result = $users->save();

        if ($req->user_type == 'Student') {
            $students = new students;
            $students->userID = $userID;
            $students->save();
        } elseif ($req->user_type == 'Supervisor') {
            $supervisors = new supervisors;
            $supervisors->userID = $userID;
            $supervisors->save();
        } elseif ($req->user_type == 'Technician') {
            $technicians = new technicians;
            $technicians->userID = $userID;
            $technicians->save();
        } elseif ($req->user_type == 'Coordinator') {
            $coordinators = new coordinators;
            $coordinators->userID = $userID;
            $coordinators->save();
        }
        $details = [
            'type' => 'Registration',
            'status' => 'Success',
        ];

        $data['details'] = $details;

        return redirect('/');

        // try {

        // } catch (Exception $e) {

        //     $errCode = $e->errorInfo[1];

        //     if ($errCode == 1062) {
        //         $errStatus = 'studentID sudah wujud di dalam sistem';
        //     } else {
        //         $errStatus = 'Terdapat error';
        //     }

        //     $details = [
        //         'type' => 'Registration',
        //         'status' => 'Failed',
        //         'error_code' => $errCode,
        //         'description' => $errStatus
        //     ];

        //     $data['details'] = $details;

        //     // return $data;
        //     // return view('register');
        //     echo $e;
        // }
    }

    function resetpassword(Request $req)
    {
        // validation
        $messages = [
            'required' => 'required',
            'between' => 'must :min - :max letter',
            'min' => 'minimum :min letter',
            'confirmed' => 'Password did not match'
        ];

        $rules = [
            'userID' => 'required',
            'password' => 'required | between:8,10 | confirmed',
            'password_confirmation' => 'required',
        ];

        $req->validate($rules, $messages);

        // return all input data
        $data = $req->input();

        // add additional field data
        $data['purpose'] = 'Reset Password';

        // Select eloquent
        $check = users::where('userID', $req->userID)->exists();

        if ($check) {

            $users = users::where('userID', $req->userID)
                ->get()
                ->first();

            $users->password = ($req->password);
            $users->save();

            $custom_msg = [
                'success' => 'Password successfully changed',
            ];

            return redirect()->back()->withInput()->withErrors($custom_msg);
        } else {
            $custom_msg = [
                'staff_id' => 'User ID did not registered',
            ];

            return redirect()->back()->withInput()->withErrors($custom_msg);
        }
    }


    function logout()
    {
        Session::flush();
        return redirect('/');
    }
}
