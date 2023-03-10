<div data-active-color="black" data-background-color="white" data-image="" class="app-sidebar">
    <div class="sidebar-header">
      <div class="logo clearfix"><a href="{{route('featuretopics')}}" class="logo-text float-left">
          <div class="logo-img"><img src="{{asset('/admin/app-assets/img/logo.png')}}" alt="Convex Logo"/></div><span class="text align-middle">Mouliya</span></a></div>
    </div>
    <div class="sidebar-content">
      <div class="nav-container">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
          <li class="{{ (request()->is('admin-dashboard')) ? 'nav-item active' : '' }}"><a href="{{route('admin-dashboard')}}"><i class="icon-home"></i><span data-i18n="" class="menu-title">Dashboard</span></a>
          </li>
          
          <li class="{{ (request()->is('admin/active-fundraiser')) ? 'nav-item active' : '' }}"><a href="{{  route('active-fundraiser') }}"><i class="icon-book-open"></i><span data-i18n="" class="menu-title">Active Fundraisers</span></a>
          </li>
          <li  class="{{ (request()->is('admin/close-fundraiser')) ? 'nav-item active' : '' }}"><a href="{{route('close-fundraiser')}}"><i class="icon-notebook"></i><span data-i18n="" class="menu-title">Closed Fundraisers</span></a>
          </li>
          <li class="{{ (request()->is('admin/feature-topics')) ? 'nav-item active' : '' }}"><a href="{{route('featuretopics')}}"><i class="icon-layers"></i><span data-i18n="" class="menu-title">Feature Topics</span></a>
          </li>
          <li class="{{ (request()->is('admin/commissions')) ? 'nav-item active' : '' }}"><a href="{{route('commissions')}}"><i class="icon-wallet"></i><span data-i18n="" class="menu-title">Commissions</span></a>
          </li>
          <li  class="{{ (request()->is('admin/withdrawls')) ? 'nav-item active' : '' }}"><a href="{{route('withdrawls')}}"><i class="icon-paper-plane"></i><span data-i18n="" class="menu-title">Withdrawals</span></a>
          </li>
          <li class="{{ (request()->is('admin/website-message')) ? 'nav-item active' : '' }}"><a href="{{route('website-message')}}"><i class="icon-support"></i><span data-i18n="" class="menu-title">Contact Us</span></a>
          </li>
           
          <li class="{{ (request()->is('admin/report')) ? 'nav-item active' : '' }}"><a href="{{route('report')}}"><i class="icon-support"></i><span data-i18n="" class="menu-title">Reports</span></a>
          </li>
          <li class="{{ (request()->is('admin/user')) ? 'nav-item active' : '' }}"><a href="{{route('user')}}"><i class="icon-users"></i><span data-i18n="" class="menu-title">Users</span></a>
          </li>
          
          
          
         <!--  <li class=" nav-item d-lg-none"><a href="#"><i class="icon-user"></i><span data-i18n="" class="menu-title">Profile</span></a>
          </li> -->
          <li class=" nav-item d-lg-none"><a href="login-page.html"><i class="icon-power"></i><span data-i18n="" class="menu-title">Sign Out</span></a>
          </li>
        </ul>
      </div>
    </div>
    <div class="sidebar-background"></div>
  </div>