<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  @yield('head');
  <!-- plugins:css -->
  
  <script src="{{asset('admin/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('admin/vendors/js/vendor.bundle.addons.js')}}"></script>
  <link rel="stylesheet" href="{{asset('admin/vendors/iconfonts/font-awesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('admin/vendors/css/vendor.bundle.addons.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/custom.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/summernote.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/summernote-lite.css')}}">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/1.3.1/css/toastr.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
  <!-- endinject -->
</head>
<body>
  <div class="container-scroller">
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index-2.html"><img src="{{asset('admin/images/logo.png')}}" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index-2.html"><img src="{{asset('admin/images/logo.png')}}" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        
        
        <ul class="navbar-nav navbar-nav-right">
          
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="{{asset('admin/images/faces/men.jpg')}}" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
            
              <a class="dropdown-item" href="logout">
                <i class="fas fa-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        
        </ul>
        
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image">
                <img src="{{asset('admin/images/faces/men.jpg')}}" alt="image"/>
              </div>
              <div class="profile-name">
                <p class="name">
                  Welcome Admin
                </p>
                <p class="designation">
                  Super Admin
                </p>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('')}}admin/main">
              <i class="fa fa-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('')}}admin/adduser">
              <i class="fa fa-users menu-icon"></i>
              <span class="menu-title">User</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
              <i class="fa fa-book-open menu-icon"></i>
              <span class="menu-title">Group of subjects</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-layouts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="{{asset('')}}admin/add-subject"><span class="fa fa-plus"></span> &nbsp;&nbsp;Add Group Subjects</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{asset('')}}admin/setsubject"><span class="fa fa-plus"></span> &nbsp;&nbsp;Set sub-group of subjects</a></li>
                <!--<li class="nav-item d-none d-lg-block"> <a class="nav-link" href="pages/layout/horizontal-menu.html"><span class="fa fa-list-ul"></span> &nbsp;&nbsp;All Subjects</a></li>-->
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts1" aria-expanded="false" aria-controls="page-layouts">
              <i class="fa fa-book-open menu-icon"></i>
              <span class="menu-title">Internal Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-layouts1">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="{{asset('')}}/admin/add-page"><span class="fa fa-plus"></span> &nbsp;&nbsp;Add New Page</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{asset('')}}admin/all-pages"><span class="fa fa-list-ul"></span> &nbsp;&nbsp;All Pages</a></li>
              </ul>
            </div>
          </li>
          
        </ul>
      </nav>

  <!-- Header -->

  <!-- Content -->

  @yield('content')

  <!-- Content -->

</div>
</div>
  <!-- partial:partials/_footer.html -->
        <footer class="footer">
          
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  
  <script src="{{asset('admin/js/dropify.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('admin/js/off-canvas.js')}}"></script>
  <script src="{{asset('admin/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('admin/js/misc.js')}}"></script>
  <script src="{{asset('admin/js/settings.js')}}"></script>
  <script src="{{asset('admin/js/todolist.js')}}"></script>
  <script src="{{asset('admin/js/summernote-lite.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/1.3.1/js/toastr.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('admin/js/dashboard.js"></script>
  <!-- End custom js for this page-->


  @yield('jsblock')
</body>

</html>
