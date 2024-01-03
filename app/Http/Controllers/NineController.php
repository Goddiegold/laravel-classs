<?php

namespace App\Http\Controllers;

use App\Models\Nine;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class NineController extends Controller
{
    //
    public function index(){
        $data = Nine::all();
        return view('nine_users', ['users'=>$data]);
    }

    public function createUser(Request $request){
        $formFields = $request->validate([
            'name' => 'required|string|max:255',
            // 'email' => 'required|email|unique:nines',
            'email' => ['required','email', Rule::unique('nines', 'email')],
            'password' => 'required|min:3|max:15',
        ]);

        $formFields['password']=bcrypt($formFields['password']);

        if($formFields){
            $user = Nine::create($formFields);
            return redirect('/nine-users')->with('success','User created succesfully!');
        }}

    //show edit form
    public function editUser(Nine $nine){
        return view('edit',["user"=>$nine]);
    }

    public function updateUser(Request $request, Nine $nine){
//        $data = $request->validate([
//            'name' => 'required|string|max:255',
//            'email' => 'required|email|unique:users,email,' . $currentUser->id,
//        ]);
        $formFields = $request->validate([
            'name' => 'required',
            'email' => ['required','email'],
        ]);
        if($formFields){
            $nine->update($formFields);
            return redirect('/nine-users')->with('message','Updated Record Successfully👍!');
        }
    }



    public function deleteUser(Nine $nine){
      $nine->delete();
        return back()->with('message','Deleted Record Successfully👍!');
    }

}
