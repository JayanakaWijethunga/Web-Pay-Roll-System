<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_detail;
use App\Employee_financial;
use App\Employee_ot;
use App\Employee_official;
use DB;
use Auth;
use Image;
class Admin_Controller extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function ShowAdminHome(){

        $id=Auth::user()->id;
        $propic=DB::table("user_details")->where("id", $id)->get();
        return view('admin.home',compact('propic'));

    }

    public function showRegistrationForm()
    {
        $id1=Auth::user()->id;
        $propic=DB::table("user_details")->where("id", $id1)->get();
        $data = DB::table('employee_designations')->get();
        return view('user.register',compact(['data','propic']));
    }

    public function MyProfile(){
        $id=Auth::user()->id;
        $data4 = DB::table("user_details")->where("id", $id)->get();
        $data5 = DB::table("employee_officials")->where("id", $id)->get();
        $data6 = DB::table("employee_financials")->where("id", $id)->get();

        $id1=Auth::user()->id;
        $propic=DB::table("user_details")->where("id", $id1)->get();

        return view('admin.admin_myprofile',compact(['data4','data5','data6','propic']));  

    }

    public function EditProPic(){
        $id=Auth::user()->id;
        $data = DB::table("user_details")->where("id", $id)->get();

        $id1=Auth::user()->id;
        $propic=DB::table("user_details")->where("id", $id1)->get();

        return view('admin.admin-profile-pic',compact(['data','propic']));

    }

    public function Update_Avatar(Request $request){

        if($request->hasFile('avatar')){

            $id=Auth::user()->id;
            $avatar=$request->file('avatar');
            $filename=time().'.'.$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/'.$filename));

            $propic1=User_detail::find($id);
            $propic1->avatar=$filename;
            $propic1->save();
            //$office->obranch=$request->obranch;

            $data = DB::table("user_details")->where("id", $id)->get();

            $id1=Auth::user()->id;
            $propic=DB::table("user_details")->where("id", $id1)->get();


            return view('admin.admin-profile-pic',compact('data','propic'));

        }

    }

    public function UserRecords(){

        $id1=Auth::user()->id;
        $propic=DB::table("user_details")->where("id", $id1)->get();
        $data = DB::table('role_users')
            ->join('users','role_users.user_id' , '=', 'users.id')
            ->join('roles', 'role_users.role_id', '=', 'roles.id')
            ->where('roles.name', 'user')
            ->get();
      

        return view('user.user_records',compact(['data','propic']));
    }

    public function UserProfiles($id){
        //$data1 = DB::table("users")->where("id", $id)->get();
        $id1=Auth::user()->id;
        $propic=DB::table("user_details")->where("id", $id1)->get();
        $data4 = DB::table("user_details")->where("id", $id)->get();
        $data5 = DB::table("employee_officials")->where("id", $id)->get();
        $data6 = DB::table("employee_financials")->where("id", $id)->get();
        return view('user.user_profile',compact(['data4','data5','data6','propic']));

    }

    public function showEditBasicForm($id){

        $id1=Auth::user()->id;
        $propic=DB::table("user_details")->where("id", $id1)->get();
        $basics=User_detail::find($id);
        return view('user.user_basic_edit',compact('basics','propic'));

    }

    public function updatesBasics(Request $request,$id){
        
        

        $basic=User_detail::find($id);
        $basic->ssn=$request->ssn;
        $basic->first_name=$request->first_name;
        $basic->last_name=$request->last_name;
        $basic->dob=$request->dob;
        $basic->address_line_1=$request->address_line_1;
        $basic->address_line_2=$request->address_line_2;
        $basic->phoneNumber=$request->phoneNumber;

        $basic->save();
        
        $data4 = DB::table("user_details")->where("id", $id)->get();
        $data5 = DB::table("employee_officials")->where("id", $id)->get();
        $data6 = DB::table("employee_financials")->where("id", $id)->get();

        $id1=Auth::user()->id;
        $propic=DB::table("user_details")->where("id", $id1)->get();

        return view('user.user_profile',compact(['data4','data5','data6','propic']));
        
    }

    public function showEditFinanceForm($id){

        $finance=Employee_financial::find($id);
        $id1=Auth::user()->id;
        $propic=DB::table("user_details")->where("id", $id1)->get();
        return view('user.user_finance_edit',compact(['finance','propic']));

    }

    
    public function updatesFinance(Request $request,$id){
        
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
        $data4 = DB::table("user_details")->where("id", $id)->get();
        $data5 = DB::table("employee_officials")->where("id", $id)->get();
        $data6 = DB::table("employee_financials")->where("id", $id)->get();

        $id1=Auth::user()->id;
        $propic=DB::table("user_details")->where("id", $id1)->get();

        return view('user.user_profile',compact(['data4','data5','data6','propic']));
        
    }

    public function showEditOfficeForm($id){

        $office=Employee_official::find($id);
        $data = DB::table('employee_designations')->get();

        $id1=Auth::user()->id;
        $propic=DB::table("user_details")->where("id", $id1)->get();

        return view('user.user_office_edit',compact(['office','data','propic']));

    }

    
    public function updatesOffice(Request $request,$id){
        
        $office=Employee_official::find($id);
        
        $this->validate($request,[
            
            'obranch' => 'required|max:255',
            'dept' => 'required|max:255',
            'des' => 'required|max:255',
        ],
        [
            'obranch.required' => 'Select the company branch',
            'dept.required' => 'Select the Department',
            'des.required' => 'Select the Designation',
        ]);

        $office->obranch=$request->obranch;
        $office->dept=$request->dept;
        $office->des=$request->des;
        

        $office->save();

        $data4 = DB::table("user_details")->where("id", $id)->get();
        $data5 = DB::table("employee_officials")->where("id", $id)->get();
        $data6 = DB::table("employee_financials")->where("id", $id)->get();

        $id1=Auth::user()->id;
        $propic=DB::table("user_details")->where("id", $id1)->get();


        return view('user.user_profile',compact(['data4','data5','data6','propic']));
        
    }


    public function DeleteUser($id){


        DB::table("users")->where("id", $id)->delete();
        DB::table("role_users")->where("user_id", $id)->delete();
        DB::table("user_details")->where("id", $id)->delete();
        DB::table("employee_officials")->where("id", $id)->delete();
        DB::table("employee_financials")->where("id", $id)->delete();
        DB::table("employee_ots")->where("id", $id)->delete();


    return redirect('/user-records');
    
    }
}
