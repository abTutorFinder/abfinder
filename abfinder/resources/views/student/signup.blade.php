@extends('layout')


@section('title')
    <title>Student Sign Up | abTutorFinder</title>
@endsection

@section('content')
<div class="stdSignup">
    <div class="container">
      <div class="row">
          <div class="col-md-5 col-lg-5 col-xs-12 signUp">
              <div class="head-line"></div>
              <form id="stdSignup">
                @csrf
                <div class="from-content">
                  <center>
                    <h3 class="head">Sign up as a student</h3>
                    <p>Create your account by filling the form below</p>
                    <br>
                  </center>
                    <div class="form-group">
                      <div class="fa fa-user icon"></div>
                      <input type="text" name="fname"  class="form-control" id="fname" placeholder="First Name"   >
                      <span class="error_msg" id="fname_msg"></span>
                    </div>
                    <div class="form-group">
                      <div class="fa fa-user icon"></div>
                      <input type="text" name="lname"  class="form-control" id="lname" placeholder="Last  Name"   >
                      <span class="error_msg" id="lname_msg"></span>
                    </div>
                    <div class="form-group">
                      <div class="fa fa-signal icon"></div>
                      <select class="form-control" name="levels" style="width: 86%;display: inline-block;">
                        <option value="Beginner">Beginner</option>
                        <option value="Intermediate ">Intermediate </option>
                        <option value="Advanced">Advanced</option>
                      </select>
                      <span class="error_msg" id="lname_msg"></span>
                    </div>
                    <div class="form-group">
                      <div class="fa fa-envelope icon"></div>
                      <input type="email" name="email"  class="form-control" id="email" placeholder="Email address"   >
                      <span class="error_msg" id="email_msg"></span>
                    </div>

                    <div class="form-group">
                      <div class="fa fa-phone icon"></div>
                      <input type="tel" class="form-control" name="phone" style="width: 100% !important" id="phone" >
                      <span class="error_msg" id="phone_msg"></span>
                    </div>

                    <div class="form-group">
                      <div class="fa fa-lock icon"></div>
                      <input type="password" name="password"  class="form-control" id="password" placeholder="Password"   >
                      <span class="error_msg" id="password_msg"></span>
                    </div>
                    <div class="form-group">
                      <div class="fa fa-lock icon"></div>
                      <input type="password" name="password_con"  class="form-control" id="Confirm password" placeholder="Password"   >
                      <span class="error_msg" id="password_con_msg"></span>
                    </div>
                    <center>
                    <input type="submit" name="" class="btn btn-success btn-block" value="Sign up" style="width:80% !important" >
                  </center>
                </div>
              </form>
          </div>
          <div class="col-md-7 col-lg-7 col-xs-12">
            <center>
              <br>
              <img src="{{asset('images/boy.png')}}" style="width: 580px">
            </center>
          </div>
      </div>
    </div>
</div>


@endsection

@section('jsBlock')

<script type="text/javascript" src={{asset('js/password.js')}}></script>
<script type="text/javascript">
  $("form#stdSignup").submit(function(e) {
    $("input,textarea").removeClass("error");
    $(".error_msg").html("");
      var form_data = new FormData(this);
      e.preventDefault();
      $.ajax({
          url: "{{route('stdSignup')}}",
          type: "POST",
          data: form_data,
          async: false,
          success: function (msg) {
              if(msg=="1"){
                  document.location.reload(true);
              }
          },error: function (xhr) {
             $.each(xhr.responseJSON.errors, function(key,value) {
               //$('#errordefine').append('<div class="alert alert-danger">'+key+'</div');
               $("#"+key+"_msg").html(value);
               $("input[name="+key+"],textarea[name="+key+"]").addClass("error");
              });
           },
          cache: false,
          contentType: false,
          processData: false
      });
  });
</script> <script src="{{asset('js/intlTelInput.min.js')}}"></script>
  
<script>
    $("#phone").intlTelInput({
      // allowDropdown: false,
      // autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: "body",
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
      // hiddenInput: "full_number",
      // initialCountry: "auto",
      // localizedCountries: { 'de': 'Deutschland' },
      // nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
      // separateDialCode: true,
      utilsScript: "{{asset('js/utils.js')}}"
    });
    </script>
@endsection