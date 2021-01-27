<?php

namespace App\Http\Controllers\UserAppointment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Appointment;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /*
    *This controller will be for the user when they want to view, create, edit or cancel an appointmnet.
    * I will need the following functions:
    1- index   ---> to show the user's apointments if there are any. In the index view, i will give the user the chance to book an appointment by clicking on a button/anchor tag.

    2- create   ---> To make the user create/book their appointment.

    3- edit  ---> basically they will update what they booked if needed.

    4- delete  ---> to be able to delete an appointmen.

    */

    public function index(){

      return view('UserAppointments.userPage');
    }

    // public function showAppointments($id){
    //
    //   if(Auth()::User()->id == $id){
    //
    //       return view('appointmnet.user.showAppointments')->with(['user' => User::find($id), 'appointment' => Appointment::all()]);
    //   }
    //
    // }
}
