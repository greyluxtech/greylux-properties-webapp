{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Login') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}


@extends('layouts.pagelayout')

@section('content')
    <!-- Page Banner Start-->
<section class="page-banner padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="text-uppercase">Login</h1>
          <p>Serving you since 1999. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
          <ol class="breadcrumb text-center">
            <li><a href="#">Home</a></li>
            <li><a href="#">Pages</a></li>
            <li class="active">Login</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <!-- Page Banner End --> 
  
  
  <!-- Login -->
  <section id="login" class="padding">
    <div class="container">
      <h3 class="hidden">hidden</h3>
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="profile-login">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Login</a></li>
              <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Register</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content padding_half">
              <div role="tabpanel" class="tab-pane fade in active" id="home">
                <div class="agent-p-form">
                    @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <x-jet-validation-errors class="mb-4" style="color: red" />

                  <form action="{{ route('login') }}" method="POST" class="callus clearfix">
                    @csrf
                    <div class="single-query form-group col-sm-12">
                      <input class="keyword-input" id="email" type="email" name="email" :value="old('email')" required autofocus>
                    </div>
                    <div class="single-query form-group  col-sm-12">
                      <input class="keyword-input" id="password" type="password" name="password" required autocomplete="current-password">
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="col-sm-6">
                          <div class="search-form-group white form-group text-left">
                            <div class="check-box-2"><i><input id="remember_me" type="checkbox" name="remember""></i></div>
                            <span>Remember Me</span>
                          </div>
                        </div>
                        <div class="col-sm-6 text-right">
                          @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}"class="lost-pass">Lost your password?</a>
                            </a>
                        @endif
                        </div>
                      </div>
                    </div>
                    <div class=" col-sm-12">
                      <input type="submit" value="submit now" class="btn-slide border_radius"> 
                    </div>
                  </form>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="profile">
                <div class="agent-p-form">
                    <x-jet-validation-errors class="mb-4" style="color: red"/>
                      <form class="callus clearfix" method="POST" action="{{ route('register') }}">
                        @csrf
                    <div class="single-query col-sm-12 form-group">
                      <input type="text" class="keyword-input" id="name" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="name">
                    </div>
                    <div class="single-query col-sm-12 form-group">
                      <input type="text" class="keyword-input" id="email" name="email" :value="old('email')" placeholder="email" required>
                    </div>
                    <div class="single-query col-sm-12 form-group">
                      <input id="password" class="keyword-input" type="password" name="password" required autocomplete="new-password" placeholder="password">
                    </div>
                    <div class="single-query col-sm-12 form-group">
                      <input id="password_confirmation" class="keyword-input" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="confirm password" >
                    </div>
                    <div class="search-form-group white col-sm-12 form-group text-left">
                      <div class="check-box-2"><i><input type="checkbox" name="check-box" required></i></div>
                      <span>I accept the terms and conditions</span>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                      <div class="query-submit-button">
                        <input type="submit" value="Creat an Account" class="btn-slide">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Login end -->
@endsection
