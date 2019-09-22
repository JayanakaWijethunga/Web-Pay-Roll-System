<?php

namespace App\Http\Controllers;
use App\User_detail;
use App\Employee_financial;
use App\Employee_ot;
use App\Employee_official;
use Illuminate\Http\Request;
use DB;
use Auth;
use Image;

class Super_Admin_Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('super_admin');
    }

    public function ShowSadminHome(){
        $id=Auth::user()->id;
        $propic=DB::table("user_details")->where("id", $id)->get();
        return view('sadmin.home',compact('propic'));

    }

    public function showRegistrationForm()
    {
        $id=Auth::user()->id;
        $propic=DB::table("user_details")->where("id", $id)->get();
        $data = DB::table('employee_designations')->get();
        return view('admin.register',compact(['data','propic']));
    }

    public function MyProfile(){
        $id=Auth::user()->id;
        $propic=DB::table("user_details")->where("id", $id)->get();
        $data4 = DB::table("user_details")->where("id", $id)->get();
        $data5 = DB::table("employee_officials")->where("id", $id)->get();
        $data6 = DB::table("employee_financials")->where("id", $id)->get();
        return view('sadmin.sadmin-myprofile',compact(['data4','data5','data6','propic']));  

    }

    public function EditProPic(){
        $id=Auth::user()->id;
        $data = DB::table("user_details")->where("id", $id)->get();
        return view('sadmin.sadmin-profile-pic',compact('data'));

    }

    public function Update_Avatar(Request $request){

        if($request->hasFile('avatar')){

            $id=Auth::user()->id;
            $avatar=$request->file('avatar');
            $filename=time().'.'.$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/'.$filename));

            $propic=User_detail::find($id);
            $propic->avatar=$filename;
            $propic->save();
            //$office->obranch=$request->obranch;

            $data = DB::table("user_details")->where("id", $id)->get();
            return view('sadmin.sadmin-profile-pic',compact('data'));

        }

    }

    public function AdminProfiles($id){
        //$data1 = DB::table("users")->where("id", $id)->get();
        $id=Auth::user()->id;
        $propic=DB::table("user_details")->where("id", $id)->get();
        $data1 = DB::table("user_details")->where("id", $id)->get();
        $data2 = DB::table("employee_officials")->where("id", $id)->get();
        $data3 = DB::table("employee_financials")->where("id", $id)->get();
        return view('admin.admin_profile',compact(['data1','data2','data3','propic']));

    }

    public function AdminRecords(){


        $id=Auth::user()->id;
        $propic=DB::table("user_details")->where("id", $id)->get();
        

        $data = DB::table('role_users')
            ->join('users','role_users.user_id' , '=', 'users.id')
            ->join('roles', 'role_users.role_id', '=', 'roles.id')
            ->where('roles.name', 'admin')
            ->get();
      

        return view('admin.admin_records',compact(['data','propic']));
    }

    public function showEditBasicForm($id){
        $id=Auth::user()->id;
        $propic=DB::table("user_details")->where("id", $id)->get();
        $basics=User_detail::find($id);
        return view('admin.admin_basic_edit',compact(['basics','propic']));

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
        
        $data1 = DB::table("user_details")->where("id", $id)->get();
        $data2 = DB::table("employee_officials")->where("id", $id)->get();
        $data3 = DB::table("employee_financials")->where("id", $id)->get();
        $id1=Auth::user()->id;
        $propic=DB::table("user_details")->where("id", $id1)->get();
        return view('admin.admin_profile',compact(['data1','data2','data3','propic']));
        
    }

    public function showEditFinanceForm($id){

        $id=Auth::user()->id;
        $propic=DB::table("user_details")->where("id", $id)->get();
        $finance=Employee_financial::find($id);
        
        return view('admin.admin_finance_edit',compact(['finance','propic']));

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

        $id1=Auth::user()->id;
        $propic=DB::table("user_details")->where("id", $id1)->get();
        $data1 = DB::table("user_details")->where("id", $id)->get();
        $data2 = DB::table("employee_officials")->where("id", $id)->get();
        $data3 = DB::table("employee_financials")->where("id", $id)->get();
        return view('admin.admin_profile',compact(['data1','data2','data3','propic']));
        
    }

    public function showEditOfficeForm($id){

        $id=Auth::user()->id;
        $propic=DB::table("user_details")->where("id", $id)->get();
        $office=Employee_official::find($id);
        $data = DB::table('employee_designations')->get();
        return view('admin.admin_office_edit',compact(['office','data','propic']));

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

        $id1=Auth::user()->id;
        $propic=DB::table("user_details")->where("id", $id1)->get();
        $data1 = DB::table("user_details")->where("id", $id)->get();
        $data2 = DB::table("employee_officials")->where("id", $id)->get();
        $data3 = DB::table("employee_financials")->where("id", $id)->get();
        return view('admin.admin_profile',compact(['data1','data2','data3','propic']));
        
    }

    

    public function DeleteAdmin($id){


        DB::table("users")->where("id", $id)->delete();
        DB::table("role_users")->where("user_id", $id)->delete();
        DB::table("user_details")->where("id", $id)->delete();
        DB::table("employee_officials")->where("id", $id)->delete();
        DB::table("employee_financials")->where("id", $id)->delete();
        DB::table("employee_ots")->where("id", $id)->delete();


    return redirect('/admin-records');
    
    }
}
