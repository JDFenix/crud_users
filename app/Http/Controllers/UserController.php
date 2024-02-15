<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{


    public function store(Request $request)
    {

        try {
            $dataUser = $request->validate([
                'name' => 'required|string|max:191',
                'paternal_surname' => 'required|string|max:191',
                'maternal_surname' => 'required|string|max:191',
                'email' => 'required|string|max:191|unique:users',
                'password' => 'required|string|min:8',
            ]);

           User::create($dataUser);
            $this->show();
        } catch (Exception $e) {
            return response()->json('no se registro' . $e);
        }
    }


    public function show()
    {
        if (User::count() > 0) {
            $allUsers = User::all();
            return view('users.show', compact('allUsers'));
        } else {
            return view('users.show')->with([
                'error' => 'No hay usuarios registrados'
            ]);
        }
    }


    public function delete(string $cipherid)
    {
        $id = decrypt($cipherid);
        $user = User::findOrFail($id);
        $user->delete();
        return $this->show();
    }

    public function getUser(string $cipherid)
    {
        $id = decrypt($cipherid);
        $user = User::findOrFail($id);
        return view('users.modify', compact('user'));
    }

    public function modifyUser(Request $request)
    {


        $userData = $request->validate([
            "id" => 'required',
            'email' => 'required|string|max:191'
        ]);
        $user = User::findOrFail($userData['id']);
        $user->update($userData);
        return $this->show();
    }
}
