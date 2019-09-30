<?php

namespace App\Services;

use Auth;
use DB;
use App\User;
use App\User_detail;
use App\Employee_financial;
use App\Employee_ot;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
class SuperAdminServices 
{
  
    use ValidatesRequests;

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

    public function AdminFinanceUpdates(Request $request,$id){

        $finanace=Employee_financial::find($id);
        $ot=Employee_ot::find($id);
        $this->validate($request,[
            
            'fixed_allowances' => 'required|max:255',
            'fixed_deductions' => 'required|max:255',
            'ot' => 'required|max:255',
            'bank' => 'required|max:255',
            'bbranch' => 'required|max:255',
            'acc' => 'required|max:255',
        ],
        [
            'fixed_allowances.required' => 'Please enter the Fixed Allowance',
            'fixed_deductions.required' => 'Please enter the Fixed Deduction',
            'ot.required' => 'Is OT allowed',
            'bank.required' => 'Select the Bank',
            'bbranch.required' => 'Select the Bank Branch',
            'acc.required' => 'Enter the Account number',
        ]);
        $finanace->fixed_allowances=$request->fixed_allowances;
        $finanace->fixed_deductions=$request->fixed_deductions;
        $finanace->bank=$request->bank;
        $finanace->bbranch=$request->bbranch;
        $ot->ot=$request->ot;
        $finanace->acc=$request->acc;

        $finanace->save();
        $ot->save();

    }

}
