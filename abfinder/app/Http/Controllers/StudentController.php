<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\User;
use Validator;
use Hash;
use DB;

class StudentController extends Controller
{
    public function studentSignup(){
        $session=Session::get('role');
        if($session=="1"){
            return redirect(route('login'));
        }
        else if($session=="2"){
           return redirect(route('login'));
        }else if($session=="3"){
         return redirect(route('stdprofile'));
        }
        return view('student.signup');
    }
     // Check Role By Sessions
    public function check($value){
        $session=Session::get('role');
        if($session=="1"){
            return redirect(route('login'));
        }
        else if($session=="2"){
            return redirect(route('login')); 
        }else if($session=="3"){
            return view($value);
        }else{
            return redirect(route('login')); 
        }
    }

    // Check Role By Sessions
    public function checkmulti($value,$key,$data){
        $session=Session::get('role');
        if($session=="1"){
            return redirect(route('login'));
        }
        else if($session=="2"){
            return redirect(route('login'));
        }else if($session=="3"){
            return view($value,["$key"=>$data]); 
        }else{
            return redirect(route('login')); 
        }
    }
    public function Signup(Request $request){
        $this->validate($request,[
            "fname"=>"required",
            "lname"=>"required",
            "email"=>"required|email",
            "phone"=>"required",
            "password"=>"required_with:password_con|same:password_con|min:6",
            "password_con"=>"required|min:6"
        ],
        [
            "required"=>"field can not be blank value.",
            "password.same"=>"Passwords must be match",
            "min"=>"Aleast password contain 6 alphabets"
        ]);
        $user=new User;
        $user->role="3"; 
        $slug=str_replace(" ","-",$request["fname"]." ".$request["lname"]);
        $random=rand(10,100000);
        $user->slug=$random."-".$slug;
        $user->name=$request["fname"]." ".$request["lname"];
        $user->email=$request["email"];
        $user->password=Hash::make($request["password"]);
        $user->firstname=$request["fname"];
        $user->lastname=$request["lname"];
        $user->phone=$request["phone"];
        $user->level=$request["levels"];
        if($user->save()){
           $user=DB::table('users')
           ->select('id','name')
           ->where('email','=',$request["email"])
           ->first();
           Session::put('role','3');
           Session::put('user',$user->id);
           Session::put('username',$user->name);
           return  "1";
        }
    }
    public function profile(){
        $id=Session::get('user');
        $profile_data=DB::select("SELECT * FROM `users` where id='".$id."'");
        return $this->checkmulti('student.profile','datas',$profile_data); //view('student.profile',["datas"=>$data]);
    }
}
