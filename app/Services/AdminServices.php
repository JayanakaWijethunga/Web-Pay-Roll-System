<?php

namespace App\Services;

use Auth;
use DB;

class AdminServices 
{
  
    public function profileData($id){

        
        $id1=Auth::user()->id;
        $propic=DB::table("user_details")->where("id", $id1)->get();
        $data4 = DB::table("user_details")->where("id", $id)->get();
        $data5 = DB::table("employee_officials")->where("id", $id)->get();
        $data6 = DB::table("employee_financials")->where("id", $id)->get();
        
       return [
           $data4,
           $data5,
           $data6,
           $propic
       ];


    }

}
