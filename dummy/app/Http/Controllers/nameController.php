<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\name;
class nameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users = name::all(); 
      return view('Name.users',compact('users')); //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view ('Name.createStates');  //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $input = new name;
      $input->first_name = $request->first_name;
      $input->last_name = $request->last_name; 
      $input->save();
      return back();  //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $show = name::find($id);
      return view('Name.show',compact('show'));  //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $user = name::find($id);
      return view('Name.edit',compact('user'));
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
       $input = name::find($id);
       $input->first_name = $request->first_name;
       $input->last_name = $request->last_name;
       $input->update();
       return to_route('names.index') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        name::destroy($id);
        return back();
        //
    }
}
