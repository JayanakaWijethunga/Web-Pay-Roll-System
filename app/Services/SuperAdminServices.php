<?php

namespace App\Services;

use Auth;
use DB;
use App\User;

class SuperAdminServices 
{
  
    public function DeleteAdmin($id){
        
        DB::table("users")->where("id", $id)->delete();
        DB::table("role_users")->where("user_id", $id)->delete();
        DB::table("user_details")->where("id", $id)->delete();
        DB::table("employee_officials")->where("id", $id)->delete();
        DB::table("employee_financials")->where("id", $id)->delete();
        DB::table("employee_ots")->where("id", $id)->delete();

    }

    public function Accesability($id){
        
        $data = User::where('id', $id)->first();
         
 
         if($data->status == '0'){

                $data->status = '1'; 
        }else{
            
                $data->status = '0';
            }
 
        $data->save();

    }

}
