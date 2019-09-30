<?php

namespace App\Services;

use Auth;
use DB;
use App\User;
use App\User_detail;
use Illuminate\Http\Request;
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

    public function AdminBasicUpdates(Request $request,$id){

        $basic=User_detail::find($id);
        $basic->ssn=$request->ssn;
        $basic->first_name=$request->first_name;
        $basic->last_name=$request->last_name;
        $basic->dob=$request->dob;
        $basic->address_line_1=$request->address_line_1;
        $basic->address_line_2=$request->address_line_2;
        $basic->phoneNumber=$request->phoneNumber;

        $basic->save();

    }

}
