<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Address;
use App\Models\User;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Address $new_address)
    {
        $new_address->user_id = Auth::user()->id;
        $new_address->street = $request->street;
        $new_address->neighborhood = $request->neighborhood;
        $new_address->city_residence = $request->city_residence;
        $new_address->save();

        $rol_user = User::find(Auth::user()->id);
        $rol_user->roles()->attach($request->role_id);

        return redirect()->route('student.edit');
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
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $address_user = Address::where('id', $request->id)->first();
        
        $address_user->street = $request->street;
        $address_user->neighborhood = $request->neighborhood;
        $address_user->city_residence = $request->city_residence;

        $address_user->save();

        $data_user = $address_user->user;

        //return view('students.edit', compact('data_user', 'address_user'));
        return $data_user;
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
