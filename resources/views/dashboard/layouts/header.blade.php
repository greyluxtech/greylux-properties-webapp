{{-- <header class="main-header">


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!-- Left Side Of Navbar -->
    <ul class="navbar-nav mr-auto">

    </ul>

    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto">
      <!-- Authentication Links -->
      @guest
      <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
      </li>
      @if (Route::has('register'))
      <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
      </li>
      @endif
      @else

      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>

      @endguest
    </ul>
  </div>


  <!-- Logo -->
  <a href="index.html" class="logo">
    <!-- mini logo -->
    <div class="logo-mini">
      <span class="light-logo"><img src="../images/logo-light.png" alt="logo"></span>
      <span class="dark-logo"><img src="../images/logo-dark.png" alt="logo"></span>
    </div>
    <!-- logo-->
    <div class="logo-lg">
      <span class="light-logo"><img src="../images/logo-light-text.png" alt="logo"></span>
      <span class="dark-logo"><img src="../images/logo-dark-text.png" alt="logo"></span>
    </div>
  </a>
  <!-- Header Navbar -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <div>
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <i class="ti-align-left"></i>
      </a>

      <a href="#" data-provide="fullscreen" class="sidebar-toggle" title="Full Screen">
        <i class="mdi mdi-crop-free"></i>
      </a>

    </div>

    <div class="navbar-custom-menu r-side">
      <ul class="nav navbar-nav">


        <!-- User Account-->
        <li class="">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="User">
            <i class="fa fa-cog fa-spin"></i>
          </a>
          <ul class="dropdown-menu animated flipInX">
            <!-- User image -->
            <li class="user-header bg-img" style="background-image: url(dashboard/images/user-info.jpg)"
              data-overlay="3">
              <div class="flexbox align-self-center">
                <h4 class="user-name align-self-center">
                  <span>{{Auth::User()->name}}</span>
                  <small>{{Auth::User()->email}}</small>
                </h4>
              </div>
            </li>
            <!-- Menu Body -->
            <li class="user-body">
              <a class="dropdown-item" href="{{ route('profile') }}"><i class="ion ion-person"></i> My Profile</a>
              <a class="dropdown-item" href="{{ route('wallet') }}"><i class="ion ion-bag"></i> My Balance</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();"><i class="ion-log-out"></i>
                Logout</a>
            </li>
          </ul>
        </li>

        <li><span class="text-info font-weight-600">${{Auth::user()->balance}}</span>
          <p class="no-margin font-weight-600"><span class="text-yellow">0.00000000 BTC</span></p>
        </li>

      </ul>
    </div>
  </nav>
</header> --}}


{{-- <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-jet-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-jet-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                                <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </button>
                        @else
                            <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        @endif
                    </x-slot>

                    <x-slot name="content">
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Manage Account') }}
                        </div>

                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Profile') }}
                        </x-jet-dropdown-link>

                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                {{ __('API Tokens') }}
                            </x-jet-dropdown-link>
                        @endif

                        <div class="border-t border-gray-100"></div>

                        <!-- Team Management -->
                        @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Team') }}
                            </div>

                            <!-- Team Settings -->
                            <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                {{ __('Team Settings') }}
                            </x-jet-dropdown-link>

                            @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                    {{ __('Create New Team') }}
                                </x-jet-dropdown-link>
                            @endcan

                            <div class="border-t border-gray-100"></div>

                            <!-- Team Switcher -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Switch Teams') }}
                            </div>

                            @foreach (Auth::user()->allTeams() as $team)
                                <x-jet-switchable-team :team="$team" />
                            @endforeach

                            <div class="border-t border-gray-100"></div>
                        @endif

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                {{ __('Logout') }}
                            </x-jet-dropdown-link>
                        </form>
                    </x-slot>
                </x-jet-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-jet-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                </div>

                <div class="ml-3">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-jet-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                        {{ __('API Tokens') }}
                    </x-jet-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Logout') }}
                    </x-jet-responsive-nav-link>
                </form>

                <!-- Team Management -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="border-t border-gray-200"></div>

                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Team') }}
                    </div>

                    <!-- Team Settings -->
                    <x-jet-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                        {{ __('Team Settings') }}
                    </x-jet-responsive-nav-link>

                    <x-jet-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                        {{ __('Create New Team') }}
                    </x-jet-responsive-nav-link>

                    <div class="border-t border-gray-200"></div>

                    <!-- Team Switcher -->
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Switch Teams') }}
                    </div>

                    @foreach (Auth::user()->allTeams() as $team)
                        <x-jet-switchable-team :team="$team" component="jet-responsive-nav-link" />
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</nav> --}}

<div class="app-header header-shadow">
  <div class="app-header__logo">
      {{-- <div class="logo-src"></div> --}}
      <h2>Greylux</h2>
      <div class="header__pane ml-auto">
          <div>
              <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                  <span class="hamburger-box">
                      <span class="hamburger-inner"></span>
                  </span>
              </button>
          </div>
      </div>
  </div>
  <div class="app-header__mobile-menu">
      <div>
          <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
              <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
              </span>
          </button>
      </div>
  </div>
  <div class="app-header__menu">
      <span>
          <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
              <span class="btn-icon-wrapper">
                  <i class="fa fa-ellipsis-v fa-w-6"></i>
              </span>
          </button>
      </span>
  </div>    <div class="app-header__content">
      <div class="app-header-left">
          {{-- <div class="search-wrapper">
              <div class="input-holder">
                  <input type="text" class="search-input" placeholder="Type to search">
                  <button class="search-icon"><span></span></button>
              </div>
              <button class="close"></button>
          </div>        --}}
        </div>
      <div class="app-header-right">
          <div class="header-dots">
              <div class="dropdown">
                  <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown"
                      class="p-0 mr-2 btn btn-link">
                      <span class="icon-wrapper icon-wrapper-alt rounded-circle">
                          <span class="icon-wrapper-bg bg-danger"></span>
                          <i class="icon text-danger icon-anim-pulse ion-android-notifications"></i>
                          <span class="badge badge-dot badge-dot-sm badge-danger">Notifications</span>
                      </span>
                  </button>
                  <div tabindex="-1" role="menu" aria-hidden="true"
                      class="dropdown-menu-xl rm-pointers dropdown-menu dropdown-menu-right">
                      <div class="dropdown-menu-header mb-0">
                          <div class="dropdown-menu-header-inner bg-deep-blue">
                              <div class="menu-header-image opacity-1" style="background-image: url('assets/images/dropdown-header/city3.jpg');"></div>
                              <div class="menu-header-content text-dark">
                                  <h5 class="menu-header-title">Notifications</h5>
                                  <h6 class="menu-header-subtitle">You have <b>21</b> unread messages</h6>
                              </div>
                          </div>
                      </div>
                      <ul class="tabs-animated-shadow tabs-animated nav nav-justified tabs-shadow-bordered p-3">
                          <li class="nav-item">
                              <a role="tab" class="nav-link active" data-toggle="tab" href="#tab-messages-header">
                                  <span>Messages</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a role="tab" class="nav-link" data-toggle="tab" href="#tab-events-header">
                                  <span>Events</span>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a role="tab" class="nav-link" data-toggle="tab" href="#tab-errors-header">
                                  <span>System Errors</span>
                              </a>
                          </li>
                      </ul>
                      <div class="tab-content">
                          <div class="tab-pane active" id="tab-messages-header" role="tabpanel">
                              <div class="scroll-area-sm">
                                  <div class="scrollbar-container">
                                      <div class="p-3">
                                          <div class="notifications-box">
                                              <div class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--one-column">
                                                  <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                      <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                          <div class="vertical-timeline-element-content bounce-in">
                                                              <h4 class="timeline-title">All Hands Meeting</h4>
                                                              <span class="vertical-timeline-element-date"></span>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                      <div>
                                                          <span class="vertical-timeline-element-icon bounce-in"></span>
                                                          <div class="vertical-timeline-element-content bounce-in">
                                                              <p>Yet another one, at <span class="text-success">15:00 PM</span></p>
                                                              <span class="vertical-timeline-element-date"></span>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                      <div>
                                                          <span class="vertical-timeline-element-icon bounce-in"></span>
                                                          <div class="vertical-timeline-element-content bounce-in">
                                                              <h4 class="timeline-title">Build the production release
                                                                  <span class="badge badge-danger ml-2">NEW</span>
                                                              </h4>
                                                              <span class="vertical-timeline-element-date"></span>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="vertical-timeline-item dot-primary vertical-timeline-element">
                                                      <div>
                                                          <span class="vertical-timeline-element-icon bounce-in"></span>
                                                          <div class="vertical-timeline-element-content bounce-in">
                                                              <h4 class="timeline-title">Something not important
                                                                  <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                                                      <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                          <div class="avatar-icon">
                                                                              <img src="assets/images/avatars/1.jpg" alt="">
                                                                          </div>
                                                                      </div>
                                                                      <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                          <div class="avatar-icon">
                                                                              <img src="assets/images/avatars/2.jpg" alt="">
                                                                          </div>
                                                                      </div>
                                                                      <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                          <div class="avatar-icon">
                                                                              <img src="assets/images/avatars/3.jpg" alt="">
                                                                          </div>
                                                                      </div>
                                                                      <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                          <div class="avatar-icon">
                                                                              <img src="assets/images/avatars/4.jpg" alt="">
                                                                          </div>
                                                                      </div>
                                                                      <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                          <div class="avatar-icon">
                                                                              <img src="assets/images/avatars/5.jpg" alt="">
                                                                          </div>
                                                                      </div>
                                                                      <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                          <div class="avatar-icon">
                                                                              <img src="assets/images/avatars/9.jpg" alt="">
                                                                          </div>
                                                                      </div>
                                                                      <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                          <div class="avatar-icon">
                                                                              <img src="assets/images/avatars/7.jpg" alt="">
                                                                          </div>
                                                                      </div>
                                                                      <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                          <div class="avatar-icon">
                                                                              <img src="assets/images/avatars/8.jpg" alt="">
                                                                          </div>
                                                                      </div>
                                                                      <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                                                          <div class="avatar-icon"><i>+</i></div>
                                                                      </div>
                                                                  </div>
                                                              </h4>
                                                              <span class="vertical-timeline-element-date"></span>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="vertical-timeline-item dot-info vertical-timeline-element">
                                                      <div>
                                                          <span class="vertical-timeline-element-icon bounce-in"></span>
                                                          <div class="vertical-timeline-element-content bounce-in">
                                                              <h4 class="timeline-title">This dot has an info state</h4>
                                                              <span class="vertical-timeline-element-date"></span>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                      <div>
                                                          <span class="vertical-timeline-element-icon bounce-in"></span>
                                                          <div class="vertical-timeline-element-content bounce-in">
                                                              <h4 class="timeline-title">All Hands Meeting</h4>
                                                              <span class="vertical-timeline-element-date"></span>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                      <div>
                                                          <span class="vertical-timeline-element-icon bounce-in"></span>
                                                          <div class="vertical-timeline-element-content bounce-in">
                                                              <p>Yet another one, at <span class="text-success">15:00 PM</span>
                                                              </p><span class="vertical-timeline-element-date"></span>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                      <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                          <div class="vertical-timeline-element-content bounce-in">
                                                              <h4 class="timeline-title">Build the production release
                                                                  <span class="badge badge-danger ml-2">NEW</span>
                                                              </h4>
                                                              <span class="vertical-timeline-element-date"></span>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="vertical-timeline-item dot-dark vertical-timeline-element">
                                                      <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                          <div class="vertical-timeline-element-content bounce-in">
                                                              <h4 class="timeline-title">This dot has a dark state</h4>
                                                              <span class="vertical-timeline-element-date"></span>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="tab-pane" id="tab-events-header" role="tabpanel">
                              <div class="scroll-area-sm">
                                  <div class="scrollbar-container">
                                      <div class="p-3">
                                          <div class="vertical-without-time vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                              <div class="vertical-timeline-item vertical-timeline-element">
                                                  <div>
                                                      <span class="vertical-timeline-element-icon bounce-in">
                                                          <i class="badge badge-dot badge-dot-xl badge-success"> </i>
                                                      </span>
                                                      <div class="vertical-timeline-element-content bounce-in">
                                                          <h4 class="timeline-title">All Hands Meeting</h4>
                                                          <p>Lorem ipsum dolor sic amet, today at 
                                                              <a href="javascript:void(0);">12:00 PM</a>
                                                          </p>
                                                          <span class="vertical-timeline-element-date"></span>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="vertical-timeline-item vertical-timeline-element">
                                                  <div>
                                                      <span class="vertical-timeline-element-icon bounce-in">
                                                          <i class="badge badge-dot badge-dot-xl badge-warning"> </i>
                                                      </span>
                                                      <div class="vertical-timeline-element-content bounce-in">
                                                          <p>Another meeting today, at <b class="text-danger">12:00 PM</b></p>
                                                          <p>Yet another one, at <span class="text-success">15:00 PM</span></p>
                                                          <span class="vertical-timeline-element-date"></span>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="vertical-timeline-item vertical-timeline-element">
                                                  <div>
                                                      <span class="vertical-timeline-element-icon bounce-in">
                                                          <i class="badge badge-dot badge-dot-xl badge-danger"> </i>
                                                      </span>
                                                      <div class="vertical-timeline-element-content bounce-in">
                                                          <h4 class="timeline-title">Build the production release</h4>
                                                          <p>Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut
                                                              labore et dolore magna elit enim at minim veniam quis nostrud
                                                          </p>
                                                          <span class="vertical-timeline-element-date"></span>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="vertical-timeline-item vertical-timeline-element">
                                                  <div>
                                                      <span class="vertical-timeline-element-icon bounce-in">
                                                          <i class="badge badge-dot badge-dot-xl badge-primary"> </i>
                                                      </span>
                                                      <div class="vertical-timeline-element-content bounce-in">
                                                          <h4 class="timeline-title text-success">Something not important</h4>
                                                          <p>Lorem ipsum dolor sit amit,consectetur elit enim at minim veniam quis nostrud</p>
                                                          <span class="vertical-timeline-element-date"></span>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="vertical-timeline-item vertical-timeline-element">
                                                  <div>
                                                      <span class="vertical-timeline-element-icon bounce-in">
                                                          <i class="badge badge-dot badge-dot-xl badge-success"> </i>
                                                      </span>
                                                      <div class="vertical-timeline-element-content bounce-in">
                                                          <h4 class="timeline-title">All Hands Meeting</h4>
                                                          <p>Lorem ipsum dolor sic amet, today at 
                                                              <a href="javascript:void(0);">12:00 PM</a>
                                                          </p>
                                                          <span class="vertical-timeline-element-date"></span>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="vertical-timeline-item vertical-timeline-element">
                                                  <div>
                                                      <span class="vertical-timeline-element-icon bounce-in">
                                                          <i class="badge badge-dot badge-dot-xl badge-warning"> </i>
                                                      </span>
                                                      <div class="vertical-timeline-element-content bounce-in">
                                                          <p>Another meeting today, at <b class="text-danger">12:00 PM</b></p>
                                                          <p>Yet another one, at <span class="text-success">15:00 PM</span></p>
                                                          <span class="vertical-timeline-element-date"></span>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="vertical-timeline-item vertical-timeline-element">
                                                  <div>
                                                      <span class="vertical-timeline-element-icon bounce-in">
                                                          <i class="badge badge-dot badge-dot-xl badge-danger"> </i>
                                                      </span>
                                                      <div class="vertical-timeline-element-content bounce-in">
                                                          <h4 class="timeline-title">Build the production release</h4>
                                                          <p>Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut
                                                              labore et dolore magna elit enim at minim veniam quis nostrud
                                                          </p>
                                                          <span class="vertical-timeline-element-date"></span>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="vertical-timeline-item vertical-timeline-element">
                                                  <div>
                                                      <span class="vertical-timeline-element-icon bounce-in">
                                                          <i class="badge badge-dot badge-dot-xl badge-primary"> </i>
                                                      </span>
                                                      <div class="vertical-timeline-element-content bounce-in">
                                                          <h4 class="timeline-title text-success">Something not important</h4>
                                                          <p>Lorem ipsum dolor sit amit,consectetur elit enim at minim veniam quis nostrud</p>
                                                          <span class="vertical-timeline-element-date"></span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="tab-pane" id="tab-errors-header" role="tabpanel">
                              <div class="scroll-area-sm">
                                  <div class="scrollbar-container">
                                      <div class="no-results pt-3 pb-0">
                                          <div class="swal2-icon swal2-success swal2-animate-success-icon">
                                              <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                                              <span class="swal2-success-line-tip"></span>
                                              <span class="swal2-success-line-long"></span>
                                              <div class="swal2-success-ring"></div>
                                              <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                                              <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                                          </div>
                                          <div class="results-subtitle">All caught up!</div>
                                          <div class="results-title">There are no system errors!</div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <ul class="nav flex-column">
                          <li class="nav-item-divider nav-item"></li>
                          <li class="nav-item-btn text-center nav-item">
                              <button class="btn-shadow btn-wide btn-pill btn btn-focus btn-sm">View Latest Changes</button>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="dropdown">
                  <button type="button" data-toggle="dropdown" class="p-0 mr-2 btn btn-link">
                      <span class="icon-wrapper icon-wrapper-alt rounded-circle">
                          <span class="icon-wrapper-bg bg-focus"></span>
                          <span class="language-icon opacity-8 flag large DE"></span>
                      </span>
                  </button>
                  <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu dropdown-menu-right">
                      <div class="dropdown-menu-header">
                          <div class="dropdown-menu-header-inner pt-4 pb-4 bg-focus">
                              <div class="menu-header-image opacity-05" style="background-image: url('assets/images/dropdown-header/city2.jpg');"></div>
                              <div class="menu-header-content text-center text-white">
                                  <h6 class="menu-header-subtitle mt-0"> Choose Language</h6>
                              </div>
                          </div>
                      </div>
                      <h6 tabindex="-1" class="dropdown-header"> Popular Languages</h6>
                      <button type="button" tabindex="0" class="dropdown-item">
                          <span class="mr-3 opacity-8 flag large US"></span> USA
                      </button>
                      <button type="button" tabindex="0" class="dropdown-item">
                          <span class="mr-3 opacity-8 flag large CH"></span> Switzerland
                      </button>
                      <button type="button" tabindex="0" class="dropdown-item">
                          <span class="mr-3 opacity-8 flag large FR"></span> France
                      </button>
                      <button type="button" tabindex="0" class="dropdown-item">
                          <span class="mr-3 opacity-8 flag large ES"></span>Spain
                      </button>
                      <div tabindex="-1" class="dropdown-divider"></div>
                      <h6 tabindex="-1" class="dropdown-header">Others</h6>
                      <button type="button" tabindex="0" class="dropdown-item active">
                          <span class="mr-3 opacity-8 flag large DE"></span> Germany
                      </button>
                      <button type="button" tabindex="0" class="dropdown-item">
                          <span class="mr-3 opacity-8 flag large IT"></span> Italy
                      </button>
                  </div>
              </div>
          </div>
                    
          <div class="header-btn-lg pr-0">
              <div class="widget-content p-0">
                  <div class="widget-content-wrapper">
                      <div class="widget-content-left">
                          <div class="btn-group">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                              <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                  <img width="42" class="rounded-circle" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                                  <i class="fa fa-angle-down ml-2 opacity-8"></i>
                              </a>
                              @else
                              <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                <div>{{ Auth::user()->name }}</div>
    
                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                            @endif
                              <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                  <div class="dropdown-menu-header">
                                      <div class="dropdown-menu-header-inner bg-info">
                                          <div class="menu-header-image opacity-2" style="background-image: url('backend/assets/images/dropdown-header/city3.jpg');"></div>
                                          <div class="menu-header-content text-left">
                                              <div class="widget-content p-0">
                                                  <div class="widget-content-wrapper">
                                                      <div class="widget-content-left mr-3">
                                                          <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                                      </div>
                                                      <div class="widget-content-left">
                                                          <div class="widget-heading">{{ Auth::user()->name }}</div>
                                                          <div class="widget-subheading opacity-8">{{ Auth::user()->email }}</div>
                                                      </div>
                                                      <div class="widget-content-right mr-2">
                                                        <form method="POST" action="{{ route('logout') }}">
                                                            @csrf
                                                          <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                          this.closest('form').submit();" class="btn-pill btn-shadow btn-shine btn btn-focus">Logout
                                                          </a>
                                                        </form>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="scroll-area-xs" style="height: 150px;">
                                      <div class="scrollbar-container ps">
                                          <ul class="nav flex-column">
                                              <li class="nav-item-header nav-item">Activity</li>
                                              <li class="nav-item">
                                                  <a href="{{ route('profile.show') }}" class="nav-link" :active="request()->routeIs('profile.show')">Profile</a>
                                              </li>
                                              @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                              <li class="nav-item-header nav-item">
                                                <a href="{{ route('api-tokens.index') }}" class="nav-link" :active="request()->routeIs('api-tokens.index')">
                                                    {{ __('API Tokens') }}
                                                </a>
                                              </li>
                                              @endif

                                              @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                                        <div class="border-t border-gray-200"></div>
                    
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Manage Team') }}
                                        </div>
                    
                                        <!-- Team Settings -->
                                        <x-jet-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                                            {{ __('Team Settings') }}
                                        </x-jet-responsive-nav-link>
                    
                                        <x-jet-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                                            {{ __('Create New Team') }}
                                        </x-jet-responsive-nav-link>
                    
                                        <div class="border-t border-gray-200"></div>
                    
                                        <!-- Team Switcher -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Switch Teams') }}
                                        </div>
                    
                                        @foreach (Auth::user()->allTeams() as $team)
                                            <x-jet-switchable-team :team="$team" component="jet-responsive-nav-link" />
                                        @endforeach
                                    

                                              <li class="nav-item">
                                                  <a href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')" class="nav-link">{{ __('Team Settings') }}
                                                      <div class="ml-auto badge badge-warning">512</div>
                                                  </a>
                                              </li>
                                              <li class="nav-item">
                                                  <a href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')" class="nav-link">{{ __('Create New Team') }}</a>
                                              </li>
                                              <div class="block px-4 py-2 text-xs text-gray-400">
                                                {{ __('Switch Teams') }}
                                            </div>
                                            @foreach (Auth::user()->allTeams() as $team)
                                            <x-jet-switchable-team :team="$team" component="jet-responsive-nav-link" />
                                             @endforeach
                                            {{-- <li class="nav-item">
                                                <a href="javascript:void(0);" class="nav-link">Logs</a>
                                            </li> --}}

                                              @endif
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      {{-- <div class="widget-content-left  ml-3 header-user-info">
                          <div class="widget-heading"> Alina Mclourd </div>
                          <div class="widget-subheading"> VP People Manager </div>
                      </div> --}}
                      <div class="widget-content-right header-user-info ml-3">
                          <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                              <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                          </button>
                      </div>
                  </div>
              </div>
          </div>       
         </div>
  </div>
</div> 