<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Student;
use App\Tutor;
use App\User;
use Session;
use DB;
use App\Subjects;
use Auth;
use Validator;
class FrontendController extends Controller
{
    public function __construct(){
          
    }
    
    public function home(Request $request) {
      if($request['slug']!=""){
        try {
            $pageData=DB::select("SELECT * FROM `pages` WHERE slug='".$request["slug"]."' ");
            return view('page.content',["datas"=>$pageData]);
          }catch(\Illuminate\Database\QueryException $ex){
            return view('errors.404');
          }
      }else{
          $data = Subjects::with('subgroup')->get()->toArray();
          return  view('home',["groups"=> $data]);
      }
        
    }
     public function checklogin(Request $request){
        $this->validate($request,[
            'email' => "required|email",
            'password' =>"required|min:4" 
        ]);

        // Create Array For Testing
        $userdata=array(
          'email' => $request->get('email'),
          'password'=>$request->get('password')
        );


        //Check Login
        if(Auth::attempt($userdata)){
              $user =  Auth::user()->toArray();
              //Session Add
              $users=DB::table('users')
               ->select('id','name')
               ->where('email','=',$request['email'])
               ->first();
                Session::put('user',$users->id);
                Session::put('username',$users->name);
              //Add Role
              if($user['role']==1){
                  Session::put('role', $user['role']);
                  return redirect(route("adminmain"));
              }else if($user['role']==2){
                  Session::put('role', $user['role']);
                  return redirect(route("profile_tutor"));
              }else if($user['role']==3){
                  Session::put('role', $user['role']);
                  return redirect(route("stdprofile"));
              }

        }else{
            return back()->with('error','Wrong login details!');
        }
      }

    public function login(){
        if(Session::get('role')=="1"){
            return redirect(route("adminmain"));
        }else if(Session::get('role')=="2"){
            return redirect(route("profile_tutor"));
        }else if(Session::get('role')=="3"){
           return redirect(route("stdprofile"));
        }
        return view('login');
    }

    
    
    public function signStep2(){
        if(Session::has('tutor')){
            return view('tutor.step1');
        }else{
            return redirect(route('login'));
        }
    }
    public function logout(){
        Session::flush('tutor');
        return redirect(route('login'));
    }
    public function page_404(){
      return view('404');
    }   

}
