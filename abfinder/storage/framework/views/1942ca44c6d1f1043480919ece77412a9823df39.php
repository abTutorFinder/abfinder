<?php $__env->startSection('title'); ?>
   <title> Tutor Sign Up | abTutorFinder</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<style type="text/css">
  body{
    background-image: url('<?php echo e(asset("")); ?>/images/repeat.jpg');
  }
</style>
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
<div class="studentSignupContent" >
    <div class="container long">

        <form id="tutorSignup" enctype="multipart/form-data">
             <?php echo csrf_field(); ?>
            <div class="col-md-12">
              <div class="head-line"></div><br>
                <div class="tab-content">
                      <div  class="tab-pane fade in active">
                            <div class="row">
                                <div class="col-md-3 col-lg-3 col-xs-12">
                                    <!-- Email For Login -->
                                        <div class="form-group">
                                          <center>
                                            <label class="bottom" ><div class="fa fa-envelope icon"></div> Email For Login <span class="req">*</span></label><br>
                                            </center>
                                            <input type="email" name="loginemail" class="form-control"   >
                                            <span class="error_msg" id="loginemail_msg"></span>
                                         </div>
                                     <!-- Email For Login -->
                                </div>
                                <div class="col-md-3 col-lg-3 col-xs-12">
                                    <!-- Password For Login -->
                                        <div class="form-group">
                                          <center>
                                            <label class="bottom" ><div class="fa fa-user-lock icon"></div> Password For Login <span class="req">*</span></label><br>
                                          </center>
                                            <input type="password" name="loginpass"  class="form-control" id="pass"   >
                                            <span class="error_msg" id="loginpass_msg"></span>
                                         </div>
                                     <!-- Password For Login -->
                                </div>
                                <div class="col-md-3 col-lg-3 col-xs-12">
                                    <!-- Password For Login -->
                                        <div class="form-group">
                                          <center>
                                            <label class="bottom"><div class="fa fa-sync icon"></div> Confirm Password <span class="req">*</span></label><br>
                                            </center>
                                            <input type="password" name="repeatpass" class="form-control" id="repeatpass"   >
                                            <span class="error_msg" id="repeatpass_msg"></span>
                                         </div>
                                     <!-- Password For Login -->
                                </div>
                                <div class="col-md-3 col-lg-3 col-xs-12">
                                	<br>
                                	<button class="btn btn-info btn_weekly"  data-toggle="modal" data-target="#myModal" style="margin-top: 16px;"><i class="fa fa-calendar"></i> Weekly Schedule</button>
                                </div>
                            </div>

                            <hr/>

                            <div class="row">
                                <div class="col-md-3 col-lg-3 col-xs-12">
                                    <!-- F Name -->
                                        <div class="form-group">
                                          <center>
                                            <label class="bottom"> <div class="fa fa-user-circle icon"></div> First Name <span class="req">*</span></label><br>
                                           </center>
                                            <select class="form-control" name="title" style="width: 16%;display: inline-block;padding: 0px;">
                                              <option value="Mr.">Mr.</option>
                                              <option value="Ms.">Ms.</option>
                                            </select>
                                            <input type="text" class="form-control" name="fname" style=" width: 81%;"  >
                                            <span class="error_msg" id="fname_msg"></span>
                                         </div>
                                     <!-- F Name -->
                                </div>
                                <div class="col-md-3 col-lg-3 col-xs-12">
                                    <!-- L Name -->
                                        <div class="form-group">
                                          <center>
                                            <label class="bottom" ><div class="fa fa-user-circle icon"></div> Last Name <span class="req">*</span></label><br>
                                          </center>
                                            <input type="text" class="form-control" name="lname"  >
                                            <span class="error_msg" id="lname_msg"></span>
                                         </div>
                                     <!-- L Name -->
                                </div>
                                <div class="col-md-3 col-lg-3 col-xs-12">
                                    <!-- L Name -->
                                        <div class="form-group">
                                          <center>
                                            <label class="bottom"><span class="fa fa-phone"></span> Phone <span class="req">*</span></label>
                                          </center>
                                            <input type="tel" class="form-control" name="phone" id="phone"   style="width: 100% !important">
                                            <span class="error_msg" id="phone_msg"></span>

                                         </div>
                                     <!-- L Name -->
                                </div>
                                <div class="col-md-3 col-lg-3 col-xs-12">
                                     <!-- Travel -->
                                        <div class="form-group row">
                                            <div class="row"> 
                                              <center>
                                                <label class="bottom" ><span class="fa fa-map-marked-alt"></span>&nbsp; Willing to travel </label>
                                              
                                                <div class="col-md-12">
                                                  <select class="form-control" name="travel" style="width: 91%">
                                                      <option value="0">Any</option>
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
                                                </center>
                                            </div>
                                            <span class="error_msg" id="travel_msg"></span>
                                         </div>
                                     <!-- Travel -->
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3 col-lg-3 col-xs-12">
                                    <!-- L Name -->
                                        <div class="form-group">
                                          <center>
                                            <label class="bottom"><div class="fa fa-map-marker-alt icon"></div> Street Address<span class="req">*</span></label><br>
                                          </center>
                                            <input type="text" class="form-control" name="address" >
                                            <span class="error_msg" id="address_msg"></span>
                                         </div>
                                     <!-- L Name -->


                                      
                                </div>
                                <div class="col-md-3 col-lg-3 col-xs-12">
                                    <!-- Education -->
                                        <div class="form-group">
                                            <center>
                                              <label class="bottom"> <div class="fa fa-graduation-cap icon"></div> Education</label><br>
                                            </center>
                                            <textarea class="form-control" name="education" style="height:152px" ></textarea>
                                            <span class="error_msg" id="education_msg"></span>
                                         </div>
                                     <!-- Education -->
                                </div>
                                <div class="col-md-3 col-lg-3 col-xs-12">
                                    <!-- Education -->
                                        <div class="form-group">
                                          <center>
                                            <label class="bottom"><div class="fa fa-briefcase icon"></div> Experience</label><br>
                                          </center>
                                            <textarea class="form-control" name="experience" style="height: 152px" ></textarea>
                                            <span class="error_msg" id="experience_msg"></span>
                                         </div>
                                     <!-- Education -->
                                </div>
                                <div class="col-md-3 col-lg-3 col-xs-12">
                                    <!-- profile Image -->
                                        
                                            <div class="row">
                                              <center>
                                                <label class="bottom"><span class="fa fa-user-circle icon"></span> &nbsp;Profile Image</label>
                                              </center>
                                              <div class="col-md-7 col-lg-7 col-xs-12">
                                                <div class="form-group">
                                                   <a class="popupImage" rel="group1" id="profile_image_a" href="<?php echo e(asset('images/demo.jpg')); ?>"><img id="profile_image_preview" src="<?php echo e(asset('images/demo.jpg')); ?>" alt="" style="height: 152px" />
                                                  </a>
                                              </div>
                                            </div>
                                            <div class="col-md-5 col-lg-5 col-xs-12">
                                              <br><br>
                                                 <div class="upload-btn-wrapper">
                                                    <button class="btn half">Upload</button>
                                                    <input type="file" name="profile_image" id="profile_image"   class="form-control" onchange="ImagePreview('profile_image')" />
                                                    <span class="error_msg" id="profile_image_msg"></span>
                                                  </div>
                                            </div>
                                         </div>
                                     <!--profile Image -->

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3 col-lg-3 col-xs-12">
                                    <!-- CV-->
                                        <div class="form-group">
                                          <center>
                                            <label class="bottom"><div class="fab fa-readme icon"></div> CV/Resume</label><br>
                                          </center>
                                            <textarea class="form-control" name="cv" ></textarea>
                                            <span class="error_msg" id="cv_msg"></span>
                                            <center><b>or</b></center> 
                                            <div class="upload-btn-wrapper">
                                              <button class="btn">Upload a file</button>
                                              <input type="file" name="cv_upload" id="cv"  class="form-control" onchange="mediaPrview('Cvpreview')" />
                                            </div>
                                            <div id="Cvpreview"></div>
                                            <span class="error_msg" id="cv_upload_msg"></span>
                                            
                                         </div>
                                     <!-- Cv -->
                                </div>
                                <div class="col-md-3 col-lg-3 col-xs-12">
                                    <!-- Awards/Affiliations-->
                                        <div class="form-group">
                                          <center>
                                            <label class="bottom"><span class="fa fa-award icon"></span> Awards/Affiliations</label><br>
                                          </center>
                                            <textarea class="form-control" name="award" ></textarea>
                                             <span class="error_msg" id="award_msg"></span>
                                            <center><b>or</b></center> 

                                            <div class="upload-btn-wrapper ">
                                              <button class="btn">Upload a file</button>
                                               <input type="file" name="award_upload" id="award"  class="form-control" onchange="mediaPrview2('awardPreview')" />
                                            </div>
                                            <div id="awardPreview"></div>
                                            <!--<object width="90" height="80" style="overflow:hidden;" data="http://www.orimi.com/pdf-test.pdf"></object>-->
                                             <span class="error_msg" id="award_upload_msg"></span>
                                           
                                         </div>
                                     <!-- Awards/Affiliations -->
                                </div>
                                <div class="col-md-3 col-lg-3 col-xs-12">
                                    <!-- Awards/Affiliations-->
                                        <div class="form-group">
                                          <center>
                                            <label class="bottom"><div class="fa fa-id-card icon"></div> About Yourself</label><br>
                                          </center>
                                            <textarea class="form-control" name="about"  style="height:157px" ></textarea>
                                             <span class="error_msg" id="about_msg"></span>
                                         </div>
                                     <!-- Awards/Affiliations -->
                                       <label ><span class="fa fa-users"></span>&nbsp; Level of Students</label>
                                       <br>
                                       <div class="row">
                                         <div class="col-md-4 col-lg-4 col-xs-4">
                                           <label class="checkBox_label">Beginner<br> <input type="checkbox" name="begin" value="1"></label>
                                         </div>
                                         <div class="col-md-4 col-lg-4 col-xs-4">
                                           <label class="checkBox_label">Intermediate<br> <input type="checkbox" name="inter"  value="1"></label>
                                         </div>
                                         <div class="col-md-4 col-lg-4 col-xs-4">
                                           <label class="checkBox_label">Advanced<br> <input type="checkbox" name="advance"  value="1"></label>
                                         </div>
                                       </div>
                                       <br>
                                       <hr/>

                                       <label ><span class="fa fa-map-marker-alt"></span>&nbsp; Lesson Location</label>
                                       <br>
                                       <div class="row">
                                          <div class="col-md-4 col-lg-4 col-xs-4">
                                           <label class="checkBox_label">Home<br> <input type="checkbox" name="home" value="1"></label>
                                          </div>
                                          <div class="col-md-3 col-lg-3 col-xs-3">
                                            <label class="checkBox_label">Studio<br> <input type="checkbox" name="studio"  value="1"></label>
                                          </div>
                                          <div class="col-md-5 col-lg-5 col-xs-5">
                                            <label class="checkBox_label">Student Place<br> <input type="checkbox" name="stdplace"  value="1"></label>
                                          </div>
                                       </div>
                                       <br/>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xs-12">
                                    <div class="form-group">
                                      <center>
                                        <label class="bottom"><span class="fa fa-compact-disc"></span> &nbsp;Media Files</label>
                                      </center>
                                        <div class="row">
                                            <div class="col-md-6 col-lg-6 col-xs-12">
                                             
                                              <a class="popupImage" rel="group1" id="media1_a" href="<?php echo e(asset('images/demo.jpg')); ?>"><img id="media1_preview" src="<?php echo e(asset('images/demo.jpg')); ?>" alt="" style="width: 100%;height: 124px" />
                                              </a>
                                               <div class="upload-btn-wrapper">
                                                <button class="btn half" style="width: 100% !important">Upload a file</button>
                                                <input type="file" name="media1" id="media1"  class="form-control" onchange="ImagePreview('media1')" />
                                              </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-xs-12">
                                             
                                              <a class="popupImage" rel="group1" id="media2_a" href="<?php echo e(asset('images/demo.jpg')); ?>"><img id="media2_preview" src="<?php echo e(asset('images/demo.jpg')); ?>" alt="" style="width: 100%;height: 124px" />
                                              </a>
                                               <div class="upload-btn-wrapper">
                                                <button class="btn half" style="width: 100% !important">Upload a file</button>
                                                <input type="file" name="media2" id="media2"  class="form-control" onchange="ImagePreview('media2')" />
                                              </div>
                                            </div>

                                        </div>
                                         <!--<div class="upload-btn-wrapper">
                                              <button class="btn">Upload a file</button>
                                              <input type="file" name="media1" id="media1"  class="form-control" />
                                            </div>
                                            <span class="error_msg" id="media1_msg"></span>
                                            <div class="upload-btn-wrapper">
                                              <button class="btn">Upload a file</button>
                                              <input type="file" name="media2" id="media2"  class="form-control" />
                                            </div>
                                            <span class="error_msg" id="media2_msg"></span>
                                            <div class="upload-btn-wrapper">
                                              <button class="btn">Upload a file</button>
                                              <input type="file" name="media3" id="media3"  class="form-control" />
                                            </div>
                                            <span class="error_msg" id="media3_msg"></span>-->
                                            <br>
                                          <div class="form-group">
                                              <label ><span class="fa fa-language"></span>&nbsp; Languages</label>

                                              <input type="text" class="form-control" name="languages" value=""/>
                                              <span>Seperate by comma <b>(,)</b></span>
                                          </div>
                                          <span class="error_msg" id="languages_msg"></span>
                                          
                                            <label ><span class="fa fa-video"></span>&nbsp; Video Link</label>
                                          <input type="text" name="youtubeLink" placeholder="Insert video Link here" class="form-control" style="width: 100%">

                                          <span class="error_msg" id="youtubeLink_msg"></span>
                                     </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-xs-12 col-lg-12">
                                  <center>
                                    <h3>Price Per Lesson</h3>
                                  </center>
                                  <div class="row">
                                      <div class="col-md-4 col-lg-4 col-xs-12">
                                        <center>
                                         <div class="fa fa-money-bill-alt icon"></div> &nbsp;<label>30min</label> 
                                          <br>
                                          <input type="range" class="form-control" id="price" name="price" placeholder="Min $0 To Max $500" min="1" max="500" style="width: 80%" value="0">
                                          <b>$<span id="valuesMax">1</span></b>
                                          <span class="error_msg" id="price_msg"></span>
                                        </center>
                                      </div>
                                      <div class="col-md-4 col-lg-4 col-xs-12">
                                        <center>
                                          <div class="fa fa-money-bill-alt icon"></div> &nbsp;<label>45min</label> 
                                           <input type="range" class="form-control" id="price1" name="price1" placeholder="Min $0 To Max $500" min="1" max="500" style="width: 80%" value="0">
                                          <b>$<span id="valuesMax1">1</span></b>
                                            <span class="error_msg" id="price1_msg"></span>
                                        </center>
                                      </div>
                                      <div class="col-md-4 col-lg-4 col-xs-12">
                                        <center>
                                          <div class="fa fa-money-bill-alt icon"></div> &nbsp;<label>60min</label> 

                                            <input type="range" class="form-control" id="price2" name="price2" placeholder="Min $0 To Max $500" min="1" max="500" style="width: 80%" value="0">
                                            <b>$<span id="valuesMax2">1</span></b>
                                            <span class="error_msg" id="price2_msg"></span>
                                        </center>
                                      </div>
                                  </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <center>
                                    <div class="col-md-4 col-lg-4 col-xs-12" style="float: none;">
                                        <input type="submit" class="btn btn-success btn-block" id="signup" value="Save"/>
                                    </div>
                                </center>
                            </div>
                            
                      </div>
                </div>
            </div>
        </form>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('jsBlock'); ?>

<script type="text/javascript" src=<?php echo e(asset('js/password.js')); ?>></script>
<script type="text/javascript">
  $(document).ready(function(){
     $('#Cvpreview').html("<img src='<?php echo e(asset('')); ?>images/demo.jpg' width='100%' style='height:200px' />");
     $('#awardPreview').html("<img src='<?php echo e(asset('')); ?>images/demo.jpg' width='100%' style='height:200px' />");
  });

   function mediaPrview(value){
      form=$('form#tutorSignup')[0];
      var form_data = new FormData(form);
      //e.preventDefault();
      $.ajax({
          url: "<?php echo e(route('PreviewMedia')); ?>",
          type: "POST",
          data: form_data,
          async: false,
          success: function (msg) {
            if(msg!=""){
              $('#'+value+'').html("<a href='<?php echo e(asset('')); ?>"+msg+"' style='display:block'><object width='100%' height='200px'  data='<?php echo e(asset('')); ?>"+msg+"'></object></a>");
            }
           
          },
          cache: false,
          contentType: false,
          processData: false
      });
  }
   function mediaPrview2(value){
      form=$('form#tutorSignup')[0];
      var form_data = new FormData(form);
      //e.preventDefault();
      $.ajax({
          url: "<?php echo e(route('PreviewMedia2')); ?>",
          type: "POST",
          data: form_data,
          async: false,
          success: function (msg) {
            if(msg!=""){
              $('#'+value+'').html("<a href='<?php echo e(asset('')); ?>"+msg+"' style='display:block'><object width='100%' height='200px'  data='<?php echo e(asset('')); ?>"+msg+"'></object></a>");
            }
           
          },
          cache: false,
          contentType: false,
          processData: false
      });
  }
      
</script>
<script type="text/javascript">
  $("form#tutorSignup").submit(function(e) {
    $("input,textarea").removeClass("error");
    $(".error_msg").html("");
      var form_data = new FormData(this);
      form_data.append("weekly",JSON.stringify($("#day-schedule").data('artsy.dayScheduleSelector').serialize()));
      e.preventDefault();
      $.ajax({
          url: "<?php echo e(route('savesignup')); ?>",
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
</script>
<script type="text/javascript">

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
        interval: 30,
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
  <script src="<?php echo e(asset('js/intlTelInput.min.js')); ?>"></script>
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
      utilsScript: "<?php echo e(asset('js/utils.js')); ?>"
    });
    $('input[name="languages"]').amsifySuggestags({
        suggestions: ['English','Chinese','Russian','French','Spanish','German','Italian '],
        whiteList: true
    });

  </script>

<script type="text/javascript" src="/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $("#profile_image_preview").attr('src','<?php echo e(asset('')); ?>images/profile.png');
  /* This is basic - uses default settings */
  
  $("a.popupImage").fancybox();
  
  /* Apply fancybox to multiple items */
  
  $("a.popupImage").fancybox({
    'transitionIn'  : 'elastic',
    'transitionOut' : 'elastic',
    'speedIn'   : 600, 
    'speedOut'    : 200, 
    'overlayShow' : false
  });
  
});
  function ImagePreview(value){
      var preview = document.getElementById(value+"_preview");
      var popup=document.getElementById(value+"_a");
      var file    = document.getElementById(value).files[0];
      var reader  = new FileReader();

  reader.onloadend = function () {
    preview.src = reader.result;
    popup.href=reader.result;
  }

  if (file) {
    reader.readAsDataURL(file);
  } else {
    preview.src = "";
  }
  }

$("#price").change(function(){
  price=$("#price").val();
  $("#valuesMax").html(price);
  if(price<=0 || price>=501){
    $("#price_msg").html('Make sure price between $1 to $500');
  }else{
     $("#price_msg").html('');
  }
});
$("#price1").change(function(){
  price=$("#price1").val();
  $("#valuesMax1").html(price);
  if(price<=0 || price>=501){
    $("#price1_msg").html('Make sure price between $1 to $500');
  }else{
     $("#price1_msg").html('');
  }
});
$("#price2").change(function(){
  price=$("#price2").val();
  $("#valuesMax2").html(price);
  if(price<=0 || price>=501){
    $("#price2_msg").html('Make sure price between $1 to $500');
  }else{
     $("#price2_msg").html('');
  }
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>