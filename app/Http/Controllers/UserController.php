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
                'rol' => 'required',
                'name' => 'required|string|max:191',
                'paternal_surname' => 'required|string|max:191',
                'maternal_surname' => 'required|string|max:191',
                'email' => 'required|string|max:191|unique:users',
                'password' => 'required|string|min:8',
            ]);

            $userCreated = User::create($dataUser);

            return dd($userCreated);
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


    public function delete(int $id){

        $user = User::findOrFail($id);
        $user->delete();
        return $this->show();
    }

}
