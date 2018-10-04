<?php
use App\Http\Middleware\checkRole;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('student')->group(function(){
	Route::get("signup","StudentController@studentSignup")->name('signup');
	Route::post("signup","StudentController@Signup")->name('stdSignup');
	Route::get("profile","StudentController@profile")->name('stdprofile');
});

Route::prefix('tutor')->group(function(){
	Route::get("signup","Tutor@tutorSignup")->name('tutorSignup');
	Route::post("savesignup","Tutor@tutorSignUpEntry")->name('savesignup');
	Route::get("profile","Tutor@profile")->name("profile_tutor");
	Route::get("find-a-tutor/","Tutor@findtutor")->name('findtutor_simple');
	Route::get("find-a-tutor/{service?}","Tutor@findtutor")->name('findtutor');
	Route::get("setting","Tutor@setting")->name("tutor_setting");
	Route::post("saveServices","Tutor@SaveServices")->name('SaveServices');
	Route::post("SaveYoutube","Tutor@SaveYoutube")->name('SaveYoutube');
	Route::get("tutorsuggest/{query?}","Tutor@TutorSuggestion");
	Route::get("public/{slug}","Tutor@publicProfile");
	Route::get("getMedia/{query}","Tutor@getMedia");
	Route::post("pwdchanged","Tutor@passwordChanged")->name('tutorpwdChange');
	Route::post("uploadmedia","Tutor@savemedia_")->name("saveMediaa");
	Route::post("Previewmedia","Tutor@previewmedia")->name("PreviewMedia");
	Route::post("Previewmedia2","Tutor@previewmedia_2")->name("PreviewMedia2");
});

Route::prefix('admin')->group(function(){
	Route::get("main","Adminpanel@Home")->name('adminmain');
	Route::get("logout","Adminpanel@logout")->name('logout');
	/* Add Subject */
	Route::get("add-subject","Adminpanel@addSubject")->name('add-subject');
	Route::post("addsubject","Adminpanel@addgroup")->name('saveGroup');
	Route::get("getsubject","Adminpanel@getgroup")->name('getgroup');
	Route::post("deletesubject","Adminpanel@deletegroup")->name('deletegroup');
	Route::post("editsubject","Adminpanel@editgroup")->name('editgroup');
	/* Add Subject */

	/* Set Subject */
	Route::get("setsubject","Adminpanel@setsubject")->name('setgroup');
	Route::post("setsave","Adminpanel@setsave")->name('setsave');
	Route::get("getset/{ida}","Adminpanel@getset")->name('getset');
	Route::post("deletesubs","Adminpanel@deletesubs")->name('deletesubs');
	/* Set Subject */

	//Add User 
	Route::get("adduser","Adminpanel@adduser")->name('adduser');
	Route::get("getuser","Adminpanel@getUser")->name('getuser');
	Route::post("saveuser","Adminpanel@saveUser")->name('saveuser');
	Route::post("updateuser","Adminpanel@updateUser")->name('updateuser');
	Route::post("deleteuser","Adminpanel@deleteUser")->name('deleteuser');

	//Add Page
	Route::get("add-page","Adminpanel@addPage")->name("add-page");
	Route::post("save-page","Adminpanel@savePage")->name("savePage");
	Route::get("update-page/{slug}","Adminpanel@updatePage")->name("updatePage");
	Route::post("updatePageSave","Adminpanel@updatePageData")->name('updatePageData');
	Route::get("all-pages","Adminpanel@allPages")->name("allPages");
});

Route::get("/logout","FrontendController@logout");
Route::get("/login","FrontendController@login")->name('login');
Route::post("checklogin","FrontendController@checklogin")->name('checklogin');
Route::get("/","FrontendController@home");
Route::get("/{slug?}","FrontendController@home")->name('home');
Route::get("404","FrontendController@page_404")->name('404');

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});

Route::get("/service/{name}",function($name){
return $name." Page Under Construction <br>
<a href='/'>Back To Home</a>
";
});