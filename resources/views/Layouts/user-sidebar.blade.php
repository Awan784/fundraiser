<div data-active-color="black" data-background-color="white" data-image="" class="app-sidebar">
    <div class="sidebar-header">
      <div class="logo clearfix"><a href="index.html" class="logo-text float-left">
          <div class="logo-img"><img src="{{ asset('/user/app-assets/img/logo.png') }}" alt="Convex Logo"/></div><span class="text align-middle">Mouliya</span></a></div>
    </div>
    <div class="sidebar-content">
      <div class="nav-container">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
          <li class="{{Request::url() == url('/user-dashboard') ? 'active' : ''}}  nav-item"><a href="{{ route('user-dashboard') }}"><i class="icon-home"></i><span data-i18n="" class="menu-title">Dashboard</span></a>
          </li>
          
          <li class="{{Request::url() == url('/active/fundraiser') ? 'active' : ''}}  nav-item"><a href="{{ route('User-ActiveFundrasier') }}"><i class="icon-book-open"></i><span data-i18n="" class="menu-title">Active Fundraisers</span></a>
          </li>
          <li class="{{Request::url() == url('/user/closed/fundraiser') ? 'active' : ''}} nav-item"><a href="{{ route('User-ClosedFundrasier') }}"><i class="icon-notebook"></i><span data-i18n="" class="menu-title">Closed Fundraisers</span></a>
          </li>
          <li class=" nav-item"><a href="messages.html"><i class="icon-speech"></i><span data-i18n="" class="menu-title">Communications</span></a>
          </li>
          <li class=" nav-item"><a href="user-contact-us.html"><i class="icon-support"></i><span data-i18n="" class="menu-title">Contact Us</span></a>
          </li>
          <li class=" nav-item"><a href="withdrawals.html"><i class="icon-paper-plane"></i><span data-i18n="" class="menu-title">Withdrawals</span></a>
          </li>
          <li class="{{Request::url() == url('/user/profile') ? 'active' : ''}} nav-item"><a href="{{ route('User-Profile') }}"><i class="icon-users"></i><span data-i18n="" class="menu-title">Profile</span></a>
          </li>
          <li class=" nav-item d-lg-none"><a href="{{ route('User-logout') }}"><i class="icon-power"></i><span data-i18n="" class="menu-title">Sign Out</span></a>
          </li>
        </ul>
      </div>
    </div>
    <div class="sidebar-background"></div>
  </div>