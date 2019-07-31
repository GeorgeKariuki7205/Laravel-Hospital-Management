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
        // return $request->all();

        //This is the controller method that is used to store the user deatails into the database.

        $details = new User_Detail(array(
            'First_Name'=> $request->get('fName'),
            'Last_Name'=> $request->get('Lname'),
            'Sur_Name'=> $request->get('Sname'),
            'Phone_Number'=> $request->get('phone'),
            'email'=> $request->get('email'),
            'Residence'=> $request->get('residence'),
            'Birth_Certificate_Number'=> $request->get('birthCertNumber'),
            'KRA_Number'=> $request->get('kraNumber'),
            'NHIF_Number'=> $request->get('nhifNumber'),
            'Date_Of_Birth'=> $request->get('date'),
        ));

        $details->save();
        $email = Input::get('email');
        $name = User_Detail::whereEmail($email)->firstOrFail();
        // $name = "I keep on falling in love.";
        // The methods that will be transmitted to the set password page are as follows.
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
