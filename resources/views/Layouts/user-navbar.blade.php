<nav class="navbar navbar-expand-lg navbar-light bg-faded ">
    <div class="container-fluid">
      <div class="navbar-header">
        <div class="logo "><a href="index.html" class="logo-text d-lg-none float-left">
          <div class="logo-img"><img class="mobile-logo" src="../app-assets/img/logo.png" alt="Convex Logo"/></div></a></div>
        <button type="button" data-toggle="collapse" class="navbar-toggle d-lg-none float-right"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><span class="d-lg-none navbar-right navbar-collapse-toggle"></span>
      </span>
          <h6 class="welcome-admin">Welcome <span class="gr-green-text">{{ auth()->user()->full_name }}</span></h6>
        
      </div>
      <div class="navbar-container">
        <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <a href="{{ route('User-logout') }}" class="logout-color"><i class="icon-power mr-2"></i><span>Logout</span></a>

        </div>
      </div>
    </div>
  </nav>