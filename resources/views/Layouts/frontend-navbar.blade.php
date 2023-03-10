<nav class="navbar navbar-expand-lg light mobile-menu-white">
    <div class="container">
        <a class="navbar-brand" href="{{ route('frontend-index') }}">
            <div class="logo">
                <img src="frontend/assets/img/logowebsite1.png" alt="">
            </div>
        </a>

        <a href="fundraising.html" class="butn butn-md green-dark-bg radius-30 d-block d-sm-none nav-button-stick">
            <span class="text text-white slide-up">Contribute</span>
            <span class="text text-white slide-down">Contribute</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars text-dark"></i>
        </button>



        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        How it works
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('how-works') }}">    How GoFundMe Works</a></li>
                        <li><a class="dropdown-item"
                                href="crowd-funding.html">What is crowdfunding?</a>
                        </li>
                        <li><a class="dropdown-item"
                                href="donate-button.html">The Donate Button</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Resources
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="fundraising-tips.html">Fundraising tips</a></li>
                        <li><a class="dropdown-item" href="fundraising-ideas.html">Fundraising ideas</a></li>
                        <li><a class="dropdown-item" href="help-center.html">Help center</a></li>
                    </ul>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">
                        Contact Us
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{  route('userlogin') }}">
                        Sign In
                    </a>
                </li>
            </ul>
            <div class="social">
                <ul class="rest">
                    <li>
                        <a href="{{  route('fundraiser') }}" class="butn butn-md bg-light radius-30">
                            <span class="text text-dark slide-up home-btn-bold">Start a Fundraiser</span>
                            <span class="text text-dark slide-down home-btn-bold">Start a Fundraiser</span>
                        </a>

                    </li>
                </ul>
            </div>
            

        </div>
    </div>
</nav>