<?php

namespace App\Http\Controllers\Api;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\UserDetailResource;

use App\User_detail;

class UserDetailController extends Controller
{
    public function index():UserDetailResource
    {

        return new UserDetailResource(User_detail::find(auth()->guard('api')->user()->id));

    }
}
