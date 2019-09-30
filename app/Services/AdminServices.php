<?php

namespace App\Services;

use Auth;
use DB;

class AdminServices 
{
  
    public function profileData($id){

        
        $id1=Auth::user()->id;
        $propic=DB::table("user_details")->where("id", $id1)->get();
        $data1 = DB::table("user_details")->where("id", $id)->get();
        $data2 = DB::table("employee_officials")->where("id", $id)->get();
        $data3 = DB::table("employee_financials")->where("id", $id)->get();
        return view('admin.admin_profile',compact(['data1','data2','data3','propic']));


    }

}
