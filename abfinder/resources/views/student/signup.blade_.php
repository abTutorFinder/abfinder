@extends('layout')


@section('title')
    <title>Student Sign Up | abTutorFinder</title>
@endsection

@section('content')
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Set Weekly Schedule</h4>
        </div>
        <div class="modal-body">
             <div id="day-schedule"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<div class="studentSignupContent">
    <div class="container">
        <div class="col-md-6">
            <!-- Centered Pills -->
            <ul class="nav nav-pills nav-justified">
                  <li><a  href="{{asset('')}}/tutor/signup">Tutor Sign Up</a></li>
                  <li  class="active"><a  >Student Sign Up</a></li>
            </ul>
        </div>
        <br>
        <form>
             @csrf
            <div class="col-md-12">
                <div class="tab-content">
                      <div  class="tab-pane fade in active">
                            <div class="row">
                                <div class="col-md-3 col-lg-3 col-xs-12">
                                    <!-- Email For Login -->
                                        <div class="form-group">
                                            <label >Email For Login <span class="req">*</span></label><br>
                                            <div class="fa fa-envelope icon"></div>
                                            <input type="email" name="loginemail" class="form-control"   required="true">
                                         </div>
                                     <!-- Email For Login -->
                                </div>
                                <div class="col-md-3 col-lg-3 col-xs-12">
                                    <!-- Password For Login -->
                                        <div class="form-group">
                                            <label >Password For Login <span class="req">*</span></label><br>
                                            <div class="fa fa-user-lock icon"></div>
                                            <input type="password" name="loginpass"  class="form-control" id="pass"  required="true" >
                                         </div>
                                     <!-- Password For Login -->
                                </div>
                                <div class="col-md-3 col-lg-3 col-xs-12">
                                    <!-- Password For Login -->
                                        <div class="form-group">
                                            <label >Confirm Password <span class="req">*</span></label><br>
                                            <div class="fa fa-sync icon"></div>
                                            <input type="password" name="repeatpass" class="form-control" id="repeatpass"   required="true">
                                            <span id="repassMsg"></span>
                                         </div>
                                     <!-- Password For Login -->
                                </div>
                                <div class="col-md-3 col-lg-3 col-xs-12">
                                    <br>
                                    <button class="btn btn-info btn_weekly"  data-toggle="modal" data-target="#myModal" autofocus="false" type="button"><i class="fa fa-calendar"></i> Weekly Schedule</button>
                                </div>
                            </div>

                            <hr/>

                            <div class="row">
                                <div class="col-md-3 col-lg-3 col-xs-12">
                                    <!-- F Name -->
                                        <div class="form-group">
                                            <label >First Name <span class="req">*</span></label><br>
                                            <div class="fa fa-user-circle icon"></div>
                                            <input type="text" class="form-control" name="fname"  required="true">
                                         </div>
                                     <!-- F Name -->
                                </div>
                                <div class="col-md-3 col-lg-3 col-xs-12">
                                    <!-- L Name -->
                                        <div class="form-group">
                                            <label >Last Name <span class="req">*</span></label><br>
                                            <div class="fa fa-user-circle icon"></div>
                                            <input type="text" class="form-control" name="lname"  required="true">
                                         </div>
                                     <!-- L Name -->
                                </div>
                                <div class="col-md-3 col-lg-3 col-xs-12">
                                    <!-- L Name -->
                                        <div class="form-group">
                                            <label >Phone <span class="req">*</span></label>
                                            <input type="tel" class="form-control" name="lname" id="phone"  required="true" style="width: 100% !important">
                                         </div>
                                     <!-- L Name -->
                                </div>
                                <div class="col-md-3 col-lg-3 col-xs-12">
                                    <!-- Travel -->
                                        <div class="form-group">
                                            <label >Willing To Travel To Teach <span class="req">*</span></label><br>
                                            <div class="fa fa-route icon"></div>
                                            <select class="form-control" name="travel">
                                                <option value="1">1 Mile</option>
                                                <option value="2">2 Mile</option>
                                                <option value="3">3 Mile</option>
                                                <option value="4">4 Mile</option>
                                                <option value="5">5 Mile</option>
                                                <option value="6">6 Mile</option>
                                                <option value="7">7 Mile</option>
                                                <option value="8">8 Mile</option>
                                                <option value="9">9 Mile</option>
                                                <option value="10">10 Mile</option>
                                            </select>
                                         </div>
                                     <!-- Travel -->
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3 col-lg-3 col-xs-12">
                                    <!-- L Name -->
                                        <div class="form-group">
                                            <label >Street Address<span class="req">*</span></label><br>
                                            <div class="fa fa-map-marker-alt icon"></div>
                                            <input type="text" class="form-control" name="address1" required="true">
                                         </div>
                                     <!-- L Name -->
                                </div>
                                <div class="col-md-3 col-lg-3 col-xs-12">
                                    <!-- Education -->
                                        <div class="form-group">
                                            <label >Education</label><br>
                                            <div class="fa fa-graduation-cap icon"></div>
                                            <textarea class="form-control" name="education" ></textarea>
                                         </div>
                                     <!-- Education -->
                                </div>
                                <div class="col-md-3 col-lg-3 col-xs-12">
                                    <!-- Education -->
                                        <div class="form-group">
                                            <label >Experience</label><br>
                                            <div class="fa fa-briefcase icon"></div>
                                            <textarea class="form-control" name="education" ></textarea>
                                         </div>
                                     <!-- Education -->
                                </div>
                                <div class="col-md-3 col-lg-3 col-xs-12">
                                    <!-- profile Image -->
                                        <div class="form-group">
                                            <label >Profile Image</label>
                                            <div class="upload-btn-wrapper">
                                              <button class="btn">Upload a file</button>
                                              <input type="file" name="profile_image" id="profile_image" accept=".gif, .jpg, .png"  class="form-control" />
                                            </div>
                                                
                                         </div>
                                     <!--profile Image -->
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3 col-lg-3 col-xs-12">
                                    <!-- CV-->
                                        <div class="form-group">
                                            <label >CV/Resume</label><br>
                                            <div class="fab fa-readme icon"></div>
                                            <textarea class="form-control" name="cv" ></textarea>
                                            <center><b>or</b></center> 
                                            <div class="upload-btn-wrapper">
                                              <button class="btn">Upload a file</button>
                                              <input type="file" name="cv" id="cv"  class="form-control" />
                                            </div>
                                            
                                         </div>
                                     <!-- Cv -->
                                </div>
                                <div class="col-md-3 col-lg-3 col-xs-12">
                                    <!-- Awards/Affiliations-->
                                        <div class="form-group">
                                            <label >Awards/Affiliations</label><br>
                                            <div class="fa fa-award icon"></div>
                                            <textarea class="form-control" name="award" ></textarea>
                                            <center><b>or</b></center> 

                                            <div class="upload-btn-wrapper">
                                              <button class="btn">Upload a file</button>
                                               <input type="file" name="award" id="award"  class="form-control" />
                                            </div>
                                           
                                         </div>
                                     <!-- Awards/Affiliations -->
                                </div>
                                <div class="col-md-3 col-lg-3 col-xs-12">
                                    <!-- Awards/Affiliations-->
                                        <div class="form-group">
                                            <label >About Yourself</label><br>
                                            <div class="fa fa-id-card icon"></div>
                                            <textarea class="form-control" name="about"  style="height:157px" ></textarea>
                                         </div>
                                     <!-- Awards/Affiliations -->
                                </div>
                                <div class="col-md-3 col-lg-3 col-xs-12">
                                    <div class="form-group">
                                        <label >Media Files</label>
                                            <div class="upload-btn-wrapper">
                                              <button class="btn">Upload a file</button>
                                              <input type="file" name="media1" id="media1"  class="form-control" />
                                            </div>
                                            
                                            <div class="upload-btn-wrapper">
                                              <button class="btn">Upload a file</button>
                                              <input type="file" name="media1" id="media1"  class="form-control" />
                                            </div>

                                            <div class="upload-btn-wrapper">
                                              <button class="btn">Upload a file</button>
                                              <input type="file" name="media1" id="media1"  class="form-control" />
                                            </div>
                                     </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8 col-lg-8 col-xs-12">
                                    <div class="form-group">
                                        <label >Languages</label>
                                        <input type="text" class="form-control" name="languages" value=""/>
                                        <span>Seperate by comma <b>(,)</b></span>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <center>
                                    <div class="col-md-4 col-lg-4 col-xs-12" style="float: none;">
                                        <button type="button" class="btn btn-success btn-block" id="signup"><i class="fa fa-save"></i>Save</button>
                                    </div>
                                </center>
                            </div>
                            
                      </div>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection

@section('jsBlock')

<script type="text/javascript" src={{asset('js/password.js')}}></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#signup").click(function(e){
            e.preventDefault();

            var _token = $("input[name='_token']").val();
            var first_name = $("input[name='first_name']").val();
            var last_name = $("input[name='last_name']").val();
            var email = $("input[name='email']").val();
            var address = $("textarea[name='address']").val();
            var value= $("#day-schedule").data('artsy.dayScheduleSelector').serialize();
            var _token=$("input[name='_token']").val();
            $.ajax({
                url: "{{route('savesignup')}}",
                type:'POST',
                data: {_token:_token,times:value},
              //  data: {_token:_token,times:JSON.stringify(value)},
                success: function(data) {
                    if($.isEmptyObject(data.error)){
                        alert(data.success);
                        console.log(data.success);
                    }else{
                        printErrorMsg(data.error);
                    }
                }
            });
        }); 

    });
</script>
<script type="text/javascript">
    $('#repeatpass').blur(function() {
        pass=$('#pass').val();
        repass=$("#repeatpass").val();
        if(pass!=repass){
            $("#repassMsg").html("Both password not match!");
        }else{
            $("#repassMsg").html("");
        }
    });

        var cache = {};
        function googleSuggest(request, response) {
            var term = request.term;
            if (term in cache) { response(cache[term]); return; }
            $.ajax({
                url: 'https://query.yahooapis.com/v1/public/yql',
                dataType: 'JSONP',
                data: { format: 'json', q: 'select * from xml where url="http://google.com/complete/search?output=toolbar&q='+term+'"' },
                success: function(data) {
                    var suggestions = [];
                    try { var results = data.query.results.toplevel.CompleteSuggestion; } catch(e) { var results = []; }
                    $.each(results, function() {
                        try {
                            var s = this.suggestion.data.toLowerCase();
                            suggestions.push({label: s.replace(term, '<b>'+term+'</b>'), value: s});
                        } catch(e){}
                    });
                    cache[term] = suggestions;
                    response(suggestions);
                }
            });
        }
    $(function() {
            $('#language').tagEditor({
                placeholder: 'Enter tags ...',
                autocomplete: { source: googleSuggest, minLength: 3, delay: 250, html: true, position: { collision: 'flip' } }
            });
       });
    
</script>
  <script>
    (function ($) {
      $("#day-schedule").dayScheduleSelector({
       
        days: [0, 1, 2, 3, 4, 5, 6],
        interval: 60,
        startTime: '08:00',
        endTime: '24:00',
        stringDays  : ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
        
      });
      $("#day-schedule").on('selected.artsy.dayScheduleSelector', function (e, selected) {
        console.log(selected);
      })
      $("#day-schedule").data('artsy.dayScheduleSelector').deserialize({
        '0': [['09:30', '11:00'], ['13:00', '16:30']]
      });
    })($);
    var value= $("#day-schedule").data('artsy.dayScheduleSelector').serialize();
    //console.log(JSON.stringify(value));
    
  </script>
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
  <script src="{{asset('js/intlTelInput.min.js')}}"></script>
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
    $('input[name="languages"]').amsifySuggestags({
        suggestions: ['English','Chinese','Russian','French','Spanish','German','Italian '],
        whiteList: true
    });
  </script>
@endsection