<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Appointment;

class AppointmentController extends Controller
{
    public function index()
    {

    $appoints = Appointment::all();

    return view('appointments.index', compact(['appoints']));

    }

    // public function store(Request $request)
    // {
    //
    //
    //   $this->validate($request,[
    //       'menuofservices' => 'required',
    //       'price' => 'required',
    //
    //   ]);
    //
    // //  $appoint = new Appointment;
    // $menuOfServices = $request->input('menuofservices');
    // foreach ($menuOfServices as $menuofservice) {
    //   return dd( Appointment::create($menuofservice));
    // }
    //  $request->user()->appointmnets()->create([
    //    'menuofservices' => $request->menuofservices,
    //    'price'=> $request->price
    //  ]);
    //
    //  return back();
    //
    // }
    //
    //
    // public function create()
    // {
    //
    //  return view('appointments.create');
    //
    //
    // }
}
