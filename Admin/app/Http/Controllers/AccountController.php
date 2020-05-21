<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all()->toArray();
        return view('admin.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

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
        $user = User::find($id);
        return view('admin.edit', compact('user', 'id'));
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
        $this->validate($request, [
            'firstname'    =>  'required',
            'lastname'     =>  'required',
            'email'     =>  'required',
            'username'     =>  'required',
            'birthdayDate'     =>  'required',
            'birthdayMonth'     =>  'required',
            'birthdayYear'     =>  'required',
            'contactnumber'     =>  'required',
            'streetaddress'     =>  'required',
            'cityaddress'     =>  'required',
            'provinceaddress'     =>  'required',
            'usertype'     =>  'required',
            'status'     =>  'required',
        ]);
        $user = User::find($id);
        $user->firstname = $request->get('firstname');
        $user->lastname = $request->get('lastname');
        $user->email = $request->get('email');
        $user->username = $request->get('username');
        $user->birthdayDate = $request->get('birthdayDate');
        $user->birthdayMonth = $request->get('birthdayMonth');
        $user->birthdayYear = $request->get('birthdayYear');
        $user->contactnumber = $request->get('contactnumber');
        $user->streetaddress = $request->get('streetaddress');
        $user->cityaddress = $request->get('cityaddress');
        $user->provinceaddress = $request->get('provinceaddress');
        $user->usertype = $request->get('usertype');
        $user->status = $request->get('status');
        $user->save();
        return redirect()->route('admin.index')->with('success', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.index')->with('success', 'Data Deleted');
    }
}