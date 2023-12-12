<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;

class UserController extends Controller
{
    public function connect()
    {
        $firebase = (new Factory)
                    ->withServiceAccount(base_path(env('FIREBASE_CREDENTIALS')))
                    ->withDatabaseUri(env("FIREBASE_DATABASE_URL"));
                    
        return $firebase->createDatabase();
    }
    
    public function dashboard() {
       return view('user/dashboard');
    }

    public function form_pelaporan(){
         $users = $this->connect()->getReference('users')->getSnapshot()->getValue();

        return view('user/form_pelaporan')->with([
            'users' => $users
        ]);
    }

    public function edit($id)
    {
        $user = $this->connect()->getReference('users')->getChild($id)->getValue();

        return view('user-form')->with([
            'user' => $user,
            'id' => $id
        ]);
    }

    public function update($id, Request $request)
    {
        $this->connect()->getReference('users/' . $id)->update($request->except(['_token', '_method']));
        return redirect()->route('form_pelaporan');
    }

    public function destroy($id)
    {
        $this->connect()->getReference('users/' . $id)->remove();
        return back();
    }

    public function surat_domisili() {
        $surat = $this->connect()->getReference('surat')->getSnapshot()->getValue();

       return view('user/surat_domisili')->with([
            'surat' => $surat
       ]);
    }
}
