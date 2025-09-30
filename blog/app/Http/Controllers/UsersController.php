<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function getUsers(){
        /**Select * from users*/
        $data = User::all();
        //dd($data);
        return view('admin.users')
            ->with('usuarios',$data);

    }
    public function createUsers(Request $request){
        //dd($request->email);
        //reglas de validación
        $request->validate([
            "name"=>'required|min:3',
            "nickname"=>'required|min:3|unique:users,nickname',
            "email"=>'required|email|unique:users,email',
            "pass"=>'required|min:4',
            "pass1"=>'required:min:4|same:pass'
        ]);
        //Guardar Registro insert into users ....
        $user = new User();
        $user->name=$request->name;
        $user->nickname=$request->nickname;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->img="defauilt.jpg";
        $user->save();
        return redirect()
            ->back()
            ->with('success',"Usuario insertado correctamente");
    }

}
