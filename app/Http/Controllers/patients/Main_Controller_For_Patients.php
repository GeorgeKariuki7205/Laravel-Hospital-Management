<?php

namespace App\Http\Controllers\patients;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User_Detail;
use Illuminate\Support\facades\Input;

class Main_Controller_For_Patients extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('patientFiles\patient-registration');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $email = Input::get('email');
        $firstName = Input::get('fName');
        $lastName = Input::get('Lname');
        $surName = Input::get('Sname');
        $phoneNumber = Input::get('phone');
        $residence = Input::get('residence');
        $Birth_Certificate_Number =Input::get('birthCertNumber');
        $KRA_Number =Input::get('kraNumber');
        $NHIF_Number =Input::get('nhifNumber');
        $Date_Of_Birth = Input::get('date');
        return view('patientFiles/detailsConfirmation', compact('email','firstName','lastName','surName','phoneNumber','residence','Birth_Certificate_Number','KRA_Number','NHIF_Number','Date_Of_Birth'));
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
        // return $request->all();

        //This is the controller method that is used to store the user deatails into the database.

                                $details = new User_Detail(array(
                                    'First_Name'=> $request->get('firstName'),
                                    'Last_Name'=> $request->get('lastName'),
                                    'Sur_Name'=> $request->get('surName'),
                                    'Phone_Number'=> $request->get('phoneNumber'),
                                    'email'=> $request->get('email'),
                                    'Residence'=> $request->get('residence'),
                                    'Birth_Certificate_Number'=> $request->get('Birth_Certificate_Number'),
                                    'KRA_Number'=> $request->get('KRA_Number'),
                                    'NHIF_Number'=> $request->get('NHIF_Number'),
                                    'Date_Of_Birth'=> $request->get('Date_Of_Birth'),
                                ));

                                $details->save();

                                $email = Input::get('email');
                                $name = User_Detail::whereEmail($email)->firstOrFail();

                                return view('auth\register', compact('name'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
