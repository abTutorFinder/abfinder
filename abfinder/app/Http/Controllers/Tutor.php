<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Validator;
use App\Subjects;
use App\groupsubjects;
use App\User;
use App\Media_files;
use Hash;
use DB;
class Tutor extends Controller
{

    // Check Role By Sessions
    public function check($value){
        $session=Session::get('role');
        if($session=="1"){
            return redirect(route('login'));
        }
        else if($session=="2"){
            return view($value);
        }else if($session=="3"){
            return redirect(route('login')); 
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
            return view($value,["$key"=>$data]);
        }else if($session=="3"){
            return redirect(route('login')); 
        }else{
            return redirect(route('login')); 
        }
    }



    // Tutor Signup Form
	public function tutorSignup(){
        $session=Session::get('role');
        if($session=="1"){
            return redirect(route('login'));
        }
        else if($session=="2"){
            return redirect(route('login'));
        }else if($session=="3"){
            return redirect(route('login')); 
        }else{
            return view("tutor.signup");
        }
    }

    public function tutorSignUpEntry(Request $request){

       // Validation Checking
    	$this->validate($request,[
    		"loginemail"=>"required|email",
    		"loginpass"=>"required_with:repeatpass|same:repeatpass|min:5",
    		"repeatpass"=>"required|min:5",
    		"fname"=>"required",
    		"lname"=>"required",
    		"phone"=>"required|numeric|min:6",
    		"travel"=>"numeric",
    		"address"=> "required",
    		"profile_image"=>"required|image|mimes:jpeg,jpg,png,gif|max:4000",
    		"cv_upload"=>"mimes:doc,pdf,docx,docm,txt",	
    		"award_upload"=>"mimes:doc,pdf,docx,docm,txt",
    		"about"=>"required",
    		"media1"=>"mimes:jpeg,jpg,png,gif,doc,pdf,docx,docm,txt",
    		"media2"=>"mimes:jpeg,jpg,png,gif,doc,pdf,docx,docm,txt",
            "price"=>"required",
            "title"=>"required"
    	],
    	[
    		"required"=>"field can not be blank value.",
    		"loginpass.same"=>"Passwords must be match"
    	]);

    	$profile =$this->uploadFile($request->file('profile_image'));
        $cv_upload=$this->uploadFile($request->file('cv_upload'));
        $award_upload=$this->uploadFile($request->file('award_upload'));
        $media1=$this->uploadFile($request->file('media1'));
        $media2=$this->uploadFile($request->file('media2'));
        $media3=$this->uploadFile($request->file('media3'));

        $user=new User;
        $user->role="2";
        $user->email=$request['loginemail'];
        $slug=str_replace(" ","-",$request["fname"]." ".$request["lname"]);
        $random=rand(10,100000);
        $user->slug=$random."-".$slug;
        $user->password=Hash::make($request["loginpass"]);
        $user->name=$request["fname"]." ".$request["lname"];
        $user->title=$request["title"];
        $user->firstname=$request["fname"];
        $user->lastname=$request["lname"];
        $user->phone=$request["phone"];
        $user->travel=$request["travel"];
        $user->address=$request["address"];
        $user->education=$request["education"];
        $user->experience=$request["experience"];
        $user->cv=$request["cv"];
        $user->cv_upload=$cv_upload;
        $user->award=$request["award"];
        $user->award_upload=$award_upload;
        $user->about=$request["about"];
        $user->language=$request["languages"];
        $user->weekly=$request['weekly'];
        $user->price1=$request["price"];
        $user->price2=$request["price1"];
        $user->price3=$request["price2"];
        $user->profile=$profile;
        $media_id=rand(1000000,3000000);
        $user->youtube=$request["youtubeLink"];
        $user->media1=$media_id;
        $user->house=$request["home"];
        $user->studio=$request["studio"];
        $user->place=$request["stdplace"];
        $user->level=$request["begin"];
        $user->level2=$request["inter"];
        $user->level3=$request["advance"];
        $this->fileSave($media_id,$media1);
        $this->fileSave($media_id,$media2);
        if($user->save()){
           $user=DB::table('users')
           ->select('id','name')
           ->where('email','=',$request['loginemail'])
           ->first();
           Session::put('role','2');
           Session::put('user',$user->id);
           Session::put('username',$user->name);
           return  "1";
        }
        
    }
    private function uploadFile($file){
        if(file_exists($file)){
            //Move Uploaded File
            $destinationPath = 'webData/tutorData';
            $custom=date('joYhis')."_";
            $file->move($destinationPath,$custom.$file->getClientOriginalName());
            return $destinationPath."/".$custom.$file->getClientOriginalName();
        }
    }
    public function previewmedia(Request $request){
        $file=$this->previewM($request->file('cv_upload'));
        return $file;
    }
     public function previewmedia_2(Request $request){
        $file=$this->previewM($request->file('award_upload'));
        return $file;
    }
    private function previewM($file){
        if(file_exists($file)){
            //Move Uploaded File
            $destinationPath = 'webData/temp';
            $custom=date('joYhis')."_";
            $file->move($destinationPath,$custom.$file->getClientOriginalName());
            return $destinationPath."/".$custom.$file->getClientOriginalName();
        }
    }
    
    public function profile(){
        $id=Session::get('user');
        $profile_data=DB::select("SELECT * FROM `users` where id='".$id."'");
        return $this->checkmulti('tutor.profile','datas',$profile_data);
    }

  // Check Role By Sessions For Setting
    public function checkmulti2($value,$key,$data,$key1,$data1){
        $session=Session::get('role');
        if($session=="1"){
            return redirect(route('login'));
        }
        else if($session=="2"){
            return view($value,["$key"=>$data],["$key1"=>$data1]);
        }else if($session=="3"){
            return redirect(route('login')); 
        }else{
            return redirect(route('login')); 
        }
    }

    public function setting(){
        $id=Session::get('user');
        $profile_data=DB::select("SELECT * FROM `users` where id='".$id."'");
        $groups = Subjects::with('subgroup')->get()->toArray();
        return $this->checkmulti2('tutor.setting','datas',$profile_data,"groups",$groups);
    }
    public function SaveServices(Request $request){
        if(DB::update("UPDATE `users` SET `services`='".$request["services"]."' WHERE `id`=".$request["id"]."")){
            return "done";
        }
    }
    public function SaveYoutube(Request $request){
        if(DB::update("UPDATE `users` SET `youtube`='".$request["url"]."' WHERE `id`=".$request["id"]."")){
            return "done";
        }
    }
    public function findtutor(Request $request){
        if($request["service"]!="" AND $request["query"]!=""){
            $profile=DB::select("SELECT * FROM `users` where services LIKE '%".$request["service"]."%' AND name LIKE '%".$request["query"]."%'  AND role='2' ");
        }else if($request["service"]!=""){
            $profile=DB::select("SELECT * FROM `users` where services LIKE '%".$request["service"]."%'  AND role='2' ");
        }
        else if($request["query"]!=""){
            $profile=DB::select("SELECT * FROM `users` where  name LIKE '%".$request["query"]."%'  AND role='2' ");
        }
        else{
            $profile=DB::select("SELECT * FROM `users`  where role='2'");
        }
        $data = Subjects::with('subgroup')->get()->toArray();
        //User::where('services','LIKE','%'.$request["service"].'%')->count();
        return  view('tutor.findtutor',["groups"=> $data],["profiles"=>$profile]);
    }
    public function TutorSuggestion(Request $request){
       $data=groupsubjects::where("title","LIKE",$request['query'].'%')->pluck('title')->toArray();
       return $data;
    }
    public function publicProfile(Request $request){
        $id=Session::get('user');
        $slug=$request['slug'];
        $profile_data=DB::select("SELECT * FROM `users` where slug='".$slug."'");
        return view('tutor.public',['datas'=>$profile_data]);
    }
    public function getMedia(Request $request){
            $data=Media_files::where("user_id","=",$request['query'])->pluck('type','media');
            return $data;
    }
    public function savemedia_(Request $request){

        echo "Syed umer";
        die;
        $input=$request->all();
        $images=array();
        if($files=$request->file('images')){
            foreach($files as $file){
                $name=$file->getClientOriginalName();
                $file->move('image',$name);
                //$images[]=$name;
            }
        }
        echo implode("|",$images);
    }
    private function fileSave($id,$media){
        $media_files=new Media_files;
        $media_files->user_id=$id;
        $media_files->role="2";
        $media_files->type="img";
        $media_files->media=$media;
        $media_files->save();
    }
    public function passwordChanged(){
     return "Hello world";
    }
}