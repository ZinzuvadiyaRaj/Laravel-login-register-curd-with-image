<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $data = User::latest()->paginate();
        return view('dashboard',compact('data'));
    }

    public function destroy($id) 
    {

       $user = User::where('id', $id)->firstorfail()->delete();
       echo ("User Record deleted successfully.");
       return redirect()->route('dashboard.index')->with('success','User Deleted Successfully');

    }

    public function show($id)
    {

        $user = User::find($id);
      return view('show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('edit', compact('user'));
    }

    public function update(Request $request, User $user,$id)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required',
        ]);

        $user = User::find($request->id);

        $user->name = $request->username;
        $user->email = $request->email;

        $user->save();

        return redirect()->route('dashboard.index')->with('success',"Data Updated successfully");

    
    }


}
