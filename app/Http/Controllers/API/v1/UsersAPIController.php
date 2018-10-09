<?php

namespace App\Http\Controllers\API\v1;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UsersAPIController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/v1/users",
     *     operationId="usersList",
     *     tags={"Users"},
     *     summary="Get list of users",
     *     description="Returns list of users",
     *     @OA\Response(
     *         response=200,
     *         description="Success",
     *         @OA\MediaType(
     *             mediaType="application/json",
     *         )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="ValidationError"
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Unauthorized"
     *     ),
     *     @OA\Response(
     *         response=403,
     *         description="Forbidden"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="NotFound"
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Validation failed"
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Internal Server Error"
     *     ),
     * )
     */

    public function index(Request $request)
    {
        $users = User::orderBy('created_at', 'asc')->get();

        return Response(["success" => true, 'message' => 'Users list.', 'payload' => ['users' => $users->toArray()]]);
    }
}
