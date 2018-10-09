<?php

namespace App\Http\Controllers;

use App\User;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('created_at', 'asc')->get();

        return view('users', [
            'users' => $users,
        ]);

    }

    /**
     * Delete the application users.
     *
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        User::findOrFail($id)->delete();

        return redirect('/users');
    }

}
