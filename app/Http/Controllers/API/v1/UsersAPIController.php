<?php

namespace App\Http\Controllers\API\v1;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UsersAPIController extends Controller
{
    /**
     * Show the application users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::orderBy('created_at', 'asc')->get();

        return Response(["success" => true, 'message' => 'Users list.', 'payload' => ['users' => $users->toArray()]]);
    }
}
