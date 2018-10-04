<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Subjects;
use App\groupsubjects;
use App\User;
use App\Pages;
use Validator;
use Auth;
use Illuminate\Support\Facades\Hash;
use Session;
class Adminpanel extends Controller
{
  function __construct()
  {  
     $this->middleware('auth');
  }
  // Check Role By Sessions
  public function check($value){
        $session=Session::get('role');
        if($session=="1"){
          return view($value);
        }else if($session=="2"){
          return redirect(route('profile_tutor'));
        }else if($session=="3"){
          return redirect(route('login'));
        }
  }
  // Check Role By Sessions-Multi
  public function checkmulti($value,$key,$data){
        $session=Session::get('role');
        if($session=="1"){
           return view($value,["$key"=>$data]);
        }else if($session=="2"){
           return redirect(route('login'));
        }else if($session=="3"){
           return redirect(route('login'));
        }
  }
  
  public function Home(){
    return $this->check('adminpanel.main'); //checking Role
  }
  public function addSubject(){
    return $this->check('adminpanel.add-group-subject'); //checking Role
  }
  public function getgroup(){
  	$group=DB::select("SELECT * FROM `subjects` order by 'id' ASC");
  	return $this->checkmulti('adminpanel.getsubject','subjects',$group); //checking Role
    //return view('adminpanel.getsubject',['subjects'=>$group]);
  }
  public function addgroup(Request $request){
  	  $file = $request->file('groupicon');
   		//Move Uploaded File
      $destinationPath = 'webData/uploads';
      $custom=date('joYhis')."_";
   		$subjects=new Subjects;
   		$subjects->subjectname=$request['subjectname'];
   		$subjects->icon=$destinationPath."/".$custom.$file->getClientOriginalName();
   		if($subjects->save()){
   			$file->move($destinationPath,$custom.$file->getClientOriginalName());
   			return "done";
   		}
	    
  }	
  public function deletegroup(Request $request){
  	if(DB::delete("delete from  `subjects` where id='".$request['id']."'")){
  		return "done";
  	}
  }

  public function editgroup(Request $request){
  	$file = $request->file('groupicon');
  	if($file!="" && $request["updateId"]!=""){
  		
  		//Move Uploaded File
      	$destinationPath = 'webData/uploads';
        $custom=date('joYhis')."_";
  		if(DB::update("UPDATE `subjects` SET `subjectname`='".$request["subjectname"]."',`icon`='".$destinationPath."/".$custom.$file->getClientOriginalName()."' WHERE id='".$request["updateId"]."'")){
	  		$file->move($destinationPath,$custom.$file->getClientOriginalName());
	  		return "done";
	  	}
  	}else if($request["updateId"]!=""){
  		if(DB::update("UPDATE `subjects` SET `subjectname`='".$request["subjectname"]."' WHERE id='".$request["updateId"]."'")){
	  		return "done";
	  	}
  	}
  }

  public function setsubject(){
  	$group=DB::select("SELECT * FROM  `subjects` order by 'id' ASC");
    return $this->checkmulti('adminpanel.set-subject','group',$group); //checking Role
   	//return view('adminpanel.set-subject',['group'=>$group]); 	
  }
  public function setsave(Request $request){
  	$group=new groupsubjects;
  	$group->mainid=$request['main'];
  	$group->title=$request['subgroup'];
  	$group->detail=$request['detail'];
  	$slugs=str_replace(' ', '-', $request['subgroup']);
  	$group->slug=$slugs;
    if($group->save()){
  		return "done";
  	}
  }
  public function getset($ida){
  	$groups=DB::select("SELECT * FROM `groupsubjects` where mainid='".$ida."' order by 'id' ASC");
    return $this->checkmulti('adminpanel.getset','groups',$groups); //checking Role
  	//return view('adminpanel.getset',['groups'=>$groups]);
  }
  public function deletesubs(Request $request){
  		if(DB::delete("delete from `groupsubjects` where id='".$request['id']."'")){
  		return "done";
  	}
  }
  public function login(){
      return view('adminpanel.login');
  }
  public function logout(){
      Session::flush();
      return redirect('login');
  }
 
  public function adduser(){
   
    return view('adminpanel.addUser');
  }
  public function getUser(){
    $user=DB::select("SELECT * FROM `users` where role='1' order by 'id' ASC");
    return $this->checkmulti('adminpanel.getuser','users',$user); //checking Role
   // return view('adminpanel.getuser',['users'=>$user]);
  }
  public function saveUser(Request $request){
    $this->validate($request,[
      "name"   => "required|alpha|min:3",
      "email"  => "required|email",
      "password" => "required|min:5"
    ]);

    $user=new User;
    $user->role="1";
    $user->name=$request["name"];
    $user->email=$request["email"];
    $user->password=Hash::make($request["password"]);
    if($user->save()){
      return "done";
    }
  }
  public function updateUser(Request $request){
      $this->validate($request,[
        "name"   => "required|alpha|min:3",
        "email"  => "required|email",
        "password" => "required|min:5"
      ]);
      if(DB::update("UPDATE `users` SET `name`='".$request['name']."',`email`='".$request['email']."',`password`='".Hash::make($request['password'])."' WHERE `id`='".$request['updateId']."' ")){
          return "done";
      }      
  }
  public function deleteUser(Request $request){
    if(DB::delete("delete from `users` where id='".$request['id']."' ")){
      return "done";
    }
  }
  public function addPage(){
      return view("adminpanel.addpage");
  }
  public function savePage(Request $request){
    $pages=new Pages;
    $slug_data=str_replace(" ","-",$request["title"]);
    $random=rand(100,10000);
    $pages->slug=strtolower($slug_data);
    $pages->title=$request["title"];
    $pages->content=$request["content"];
    if($pages->save()){
      return $slug_data;
    }
  }
  public function updatePage(Request $request){
      $values=DB::select("SELECT * FROM `pages` where slug='".$request["slug"]."'");
      return view('adminpanel.updatepage',["pageData"=>$values]);
  }
  public function updatePageData(Request $request){
      if(DB::update("UPDATE `pages` SET`title`='".$request["title"]."',`content`='".$request["content"]."' WHERE `id`='".$request["id"]."' ")){
        return "done";
      }
  }
  public function allPages(){
      $values=DB::select("SELECT * FROM `pages`");
    return view('adminpanel.all-pages',["datas"=>$values]);
  }
}

