<div id="intro" class="">
    <header id="header" class="header-narrow header-below-slider"
        data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAtElement': '#header', 'stickySetTop': '0', 'stickyChangeLogo': false}">
        <div class="header-body header-body-bottom-border-fixed" style="border-top: none !important">
            <div class="header-container header-container-height-sm container" style="height: 100px !important">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-logo">
                                <a href="#">
                                    <img alt="#" width="120" height="60" data-sticky-width="82" data-sticky-height="40"
                                        src="https://cdn3.iconfinder.com/data/icons/geek-3/24/Jedi_Order_sigil_logo_star_wars-256.png">
                                    <p style="color:black"><b>E-Marriage Registration</b></p>
                                </a>
                            </div>
                        </div>
                    </div>
                    @if(session()->has('message'))
                    <p class="alert alert-success">{{session()->get('message')}}</p>
                    @endif

                    <!-- @if(session()->has('error'))
<p class="alert alert-danger">{{session()->get('error')}}</p>
@endif -->
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <div class="header-nav header-nav-no-space-dropdown header-nav-stretch">
                                <div
                                    class="header-nav-main header-nav-main-rounded header-nav-main-dropdown-no-borders header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                    <nav class="collapse w3-text-medium">
                                        <ul class="nav nav-pills" id="mainNav" style="position: relative;">
                                            <li> @auth
                                                <a class="dropdown-item w3-hover-purple w3-medium w3-text-purple"
                                                    href="{{route('home')}}">
                                                    Home
                                                </a>
                                            </li> @endauth

                                            <li class="dropdown"> @auth
                                                <a class="dropdown-item w3-hover-purple w3-medium w3-text-purple"" href="
                                                    #">
                                                    Management
                                                </a>
                                                <ul class="dropdown-menu"
                                                    -style="transform: skew(20deg) !important; margin-left: 10px !important;">
                                                    <li>
                                                        <a class="dropdown-item w3-hover-purple w3-medium w3-text-purple"
                                                            href="{{route('aboutus')}}">
                                                            Who we are
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="dropdown-item w3-hover-purple w3-medium w3-text-purple"
                                                            href="{{route('speciality')}}">
                                                            Our Speciality
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item w3-hover-purple w3-medium w3-text-purple"
                                                            href="{{route('employee')}}">
                                                            Recent Stories
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>@endauth
                                            <li class="dropdown"> @auth
                                                <a class="dropdown-item w3-hover-purple w3-medium w3-text-purple"" href="
                                                    #">
                                                    Payment
                                                </a>
                                                <ul class="dropdown-menu"
                                                    -style="transform: skew(20deg) !important; margin-left: 10px !important;">
                                                    <li>
                                                        <a class="dropdown-item w3-hover-purple w3-medium w3-text-purple"
                                                            href="{{route('payment')}}">
                                                            Make Payment
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item w3-hover-purple w3-medium w3-text-purple"
                                                            href="{{route('paymentcondition')}}">
                                                            Method &amp; Conditions
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>@endauth
                                            <li class="dropdown"> @auth
                                                <a class="dropdown-item w3-hover-purple w3-medium w3-text-purple"" href="
                                                    #">
                                                    Find Us
                                                </a>
                                                <ul class="dropdown-menu"
                                                    -style="transform: skew(20deg) !important; margin-left: 10px !important;">
                                                    <li>
                                                        <a class="dropdown-item w3-hover-purple w3-medium w3-text-purple"
                                                            href="{{route('ouroffices')}}">
                                                            Our Offices
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item w3-hover-purple w3-medium w3-text-purple"
                                                            href="{{route('support')}}">
                                                            Help &amp; Customer Support
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>@endauth
                                            <li class="dropdown"> @auth
                                                <a class="dropdown-item w3-hover-purple w3-medium w3-text-purple"
                                                    href="#">
                                                    Services
                                                </a>
                                                <ul class="dropdown-menu"
                                                    -style="transform: skew(20deg) !important; margin-left: 10px !important;">
                                                    <li>
                                                        <a class="dropdown-item w3-hover-purple w3-medium w3-text-purple"
                                                            href="{{route('marriage')}}">
                                                            Marriage
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item w3-hover-purple w3-medium w3-text-purple"
                                                            href="{{route('devorce')}}">
                                                            Divorce
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item w3-hover-purple w3-medium w3-text-purple"
                                                            href="{{route('certificate')}}">
                                                            Certificate
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>@endauth
                                            <li>@auth
                                                <a class="dropdown-item w3-hover-purple w3-medium w3-text-purple"
                                                    href="{{route('rules')}}">Marriage Rules</a>
                                            </li>@endauth

                                            <li style="position: absolute; top: 0px; right: -80px;">@auth
                                                <a class="dropdown-item w3-hover-purple w3-medium w3-text-purple"
                                                    href="{{ route('kazi') }}">
                                                    KaziList
                                                </a>
                                            </li>@endauth

                                            @if(auth()->user())
                                            <li>
                                                <a href="{{route('logout')}}"
                                                    class="dropdown-item w3-hover-purple w3-medium w3-text-purple">{{auth()->user()->name}}|
                                                    Logout </a>
                                            </li>@endif

                                            {{-- <li class="dropdown"> --}}


                                                {{-- <!-- @if(!auth()->user()) --}}
                                                {{-- <a class="dropdown-item w3-hover-purple w3-medium w3-text-purple" href="{{ route('admin') }}" >Login </a>
                                                @endif --> --}}
                                                <!-- <ul class="dropdown-menu" -style="transform: skew(20deg) !important; margin-left: 10px !important;">
                                                    <li>
                                                        <a class="dropdown-item w3-hover-purple w3-medium w3-text-purple"href="{{route('admin')}}">
                                                            Admin
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item w3-hover-purple w3-medium w3-text-purple"href="{{route('user')}}">
                                                            User
                                                        </a>
                                                    </li>
                                                </ul> -->


                                            <li style="position: absolute; top: 0px; right: -120px;">@auth
                                                <a class="dropdown-item w3-hover-purple w3-medium w3-text-purple" href="{{route('show.message')}}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M3 3h18a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm17 4.238l-7.928 7.1L4 7.216V19h16V7.238zM4.511 5l7.55 6.662L19.502 5H4.511z"/></svg>
                                                </a>

                                            </li>@endauth



                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
