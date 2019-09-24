<?php

namespace App\Http\Controllers\Api;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\UserDetailResource;

use App\User_detail;

class UserDetailController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
        
    }

    public function index():UserDetailResource
    {

        return new UserDetailResource(User_detail::find(auth()->guard('api')->user()->id));

    }

    public function getProfilePic(){

       $imgPath=User_detail::find(auth()->guard('api')->user()->id);
       
       return response()->download(public_path('uploads/avatars/'.$imgPath->avatar),'Emp_Profile_Image');

    }
}
