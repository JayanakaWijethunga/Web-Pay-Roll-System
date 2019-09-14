<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\UserDetailResource;

use App\User_detail;

class UserDetailController extends Controller
{
    public function show(User_detail $user_detail):UserDetailResource

    {

        return new UserDetailResource($user_detail);
        
    }
}
