<?php

namespace App\Http\Controllers\API\v1;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    /**
     * @OA\Info(title="Demo App API", version="0.0.1")
     */

    /**
     * @OA\SecurityScheme(
     *     securityScheme="bearerAuth",
     *         type="http",
     *         scheme="bearer",
     *         bearerFormat="JWT"
     *     ),
     */

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
