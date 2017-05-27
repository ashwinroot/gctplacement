<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;


class UserController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show($id)
    {
      # code...
      if(Auth::user()->id != $id)
      {
        return view('error.permission');
      }
      return view('user.edit',['user' => User::findorFail($id)]);
    }

    public function update(Request $request,$id)
    {

      $user = User::find($id);
      $user->name = $request->input('name');
      $user->course = $request->input('course');
      $user->dept = $request->input('dept');
      $user->permadd = $request->input('permadd');
      $user->tempadd = $request->input('tempadd');
      $user->tenpassyear = $request->input('10thpass');
      $user->tenpercentage = $request->input('10percentage');
      $user->twelvepassyear = $request->input('12thpass');
      $user->twelvepercentage = $request->input('12percentage');
      $user->cgpa = $request->input('cgpa');
      if($request->input('histarrear')=='on')
      {
        $user->histarrear = true;
      }
      else {
        $user->histarrear = false;
      }
      if($request->input('currarrear')=='on')
      {
        $user->currarrear = true;
      }
      else {
        $user->currarrear = false;
      }
      if($request->input('allclear')=='on')
      {
        $user->allclear = true;
      }
      else {
        $user->allclear = false;
      }
      $user->save();
      $notification = array(
        'alert' => 'Successfully updated your profile.'
      );
      return redirect('home')->with('message','Successfully updated your profile.');

    }
}
