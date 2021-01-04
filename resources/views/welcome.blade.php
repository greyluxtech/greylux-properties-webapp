{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> --}}

@extends('layouts.mainlayout')
@section('content')
  
 <!--Loader-->
 <div class="loader">
    <div class="span">
        <div class="location_indicator"></div>
    </div>
</div>
<!--Loader-->


<!--Slider-->
<div class="rev_slider_wrapper">
    <div id="rev_overlaped" class="rev_slider" data-version="5.0">
        <ul>
            <!-- SLIDE -->
            <li data-transition="fade">
                <img src="frontend/images/home1-banner1.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                    class="rev-slidebg">
            </li>
            <li data-transition="fade">
                <img src="frontend/images/home1-banner2.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                    class="rev-slidebg">
            </li>
            <li data-transition="fade">
                <img src="frontend/images/home1-banner3.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                    class="rev-slidebg">
            </li>
            <div class="tp-static-layers">
                <div class="tp-caption tp-static-layer" id="slide-37-layer-2" data-x="['left','left','left','left']"
                    data-hoffset="['50','50','50','50']" data-y="['bottom','bottom','bottom','bottom']"
                    data-voffset="['230','180','150','100']" data-whitespace="nowrap"
                    data-visibility="['on','on','on','on']" data-fontsize="['48','48','28','28']" data-start="500"
                    data-responsive_offset="on" data-basealign="slide" data-startslide="0" data-endslide="5"
                    style="z-index: 5;">
                    <h1><span class="t_white">We Can Find just Right <br>Property for You.</span></h1>
                </div>
                <div class="tp-caption tp-static-layer" id="slide-37-layer-2" data-x="['left','left','left','left']"
                    data-hoffset="['50','50','50','50']" data-y="['bottom','bottom','bottom','bottom']"
                    data-voffset="['150','100','120','120']" data-whitespace="nowrap"
                    data-visibility="['on','on','on','on']" data-start="500" data-basealign="slide"
                    data-startslide="0" data-endslide="5" style="z-index: 5;">
                    <p class="t_white">We Deal with Different kinds of Properties No matter you need a House,
                        an Apartment or garage. <br> You’ll find a good option on our Theme.
                    </p>
                </div>
                <div class="tp-caption tp-static-layer" id="slide-37-layer-2" data-x="['left','left','left','left']"
                    data-hoffset="['50','50','50','50']" data-y="['bottom','bottom','bottom','bottom']"
                    data-voffset="['60','60','60','60']" data-whitespace="nowrap"
                    data-visibility="['on','on','on','on']" data-start="500" data-basealign="slide"
                    data-startslide="0" data-endslide="5" style="z-index: 5;"><a href="listing1.html"
                        class="btn-white border_radius uppercase">view Properties</a>
                </div>
            </div>
        </ul>
    </div>
</div>
<!--Slider ends-->


<!--Header-->
<div id="mainMenuBarAnchor"></div>
<header class="white_header">
    <nav class="navbar navbar-default bootsnav">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="attr-nav">
                        <div class="upper-column info-box first">
                            <div class="icons"><i class="icon-telephone114"></i></div>
                            <ul>
                                <li><strong>Phone Number</strong></li>
                                <li>+1 900 234 567 - 68</li>
                            </ul>
                        </div>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="index6.html"><img src="images/logo.png" class="logo"
                                alt=""></a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" data-in="fadeIn" data-out="fadeOut">
                            <li class="dropdown active">
                                <a href="#." class="dropdown-toggle" data-toggle="dropdown">Home </a>
                                <ul class="dropdown-menu">
                                    <li><a href="index-1.html">Home Style 1</a></li>
                                    <li><a href="index2.html">Home Style 2</a></li>
                                    <li><a href="index3.html">Home Style 3</a></li>
                                    <li><a href="index4.html">Home Style 4</a></li>
                                    <li> <a href="index5.html">Home Style 5</a></li>
                                    <li> <a href="index6.html">Home Style 6</a></li>
                                    <li> <a href="index7.html">Home Style 7</a></li>
                                    <li> <a href="index8.html">Home Style 8</a></li>
                                    <li> <a href="index9.html">Home Style 9</a></li>
                                    <li> <a href="fullscreen.html">Home Fullscreen<span>new</span></a></li>
                                </ul>
                            </li>
                            <li class="dropdown megamenu-fw">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Listing</a>
                                <ul class="dropdown-menu megamenu-content" role="menu">
                                    <li>
                                        <div class="row">
                                            <div class="col-menu col-md-3">
                                                <h5 class="title">PROPERTIES LIST</h5>
                                                <div class="content">
                                                    <ul class="menu-col">
                                                        <li><a href="listing1.html">Properties List</a></li>
                                                        <li><a href="index7.html">Single Property</a></li>
                                                        <li><a href="listing2.html">Search by City</a></li>
                                                        <li><a href="listing5.html">Search by Category</a></li>
                                                        <li><a href="listing3.html">Search by Type</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-menu col-md-9">
                                                <h5 class="title bottom20">PROPERTIES LIST</h5>
                                                <div class="row">
                                                    <div id="nav_slider" class="owl-carousel">
                                                        <div class="item">
                                                            <div class="image bottom15">
                                                                <img src="images/nav-slider1.jpg"
                                                                    alt="Featured Property">
                                                                <span class="nav_tag yellow text-uppercase">for
                                                                    rent</span>
                                                            </div>
                                                            <h4><a href="property_detail1.html">Park Avenue
                                                                    Apartment</a></h4>
                                                            <p>Towson London, MR 21501</p>
                                                        </div>
                                                        <div class="item">
                                                            <div class="image bottom15">
                                                                <img src="images/nav-slider2.jpg"
                                                                    alt="Featured Property">
                                                                <span class="nav_tag yellow text-uppercase">for
                                                                    rent</span>
                                                            </div>
                                                            <h4><a href="property_detail2.html">Park Avenue
                                                                    Apartment</a></h4>
                                                            <p>Towson London, MR 21501</p>
                                                        </div>
                                                        <div class="item">
                                                            <div class="image bottom15">
                                                                <img src="images/nav-slider3.jpg"
                                                                    alt="Featured Property">
                                                                <span class="nav_tag yellow text-uppercase">for
                                                                    rent</span>
                                                            </div>
                                                            <h4><a href="property_detail3.html">Park Avenue
                                                                    Apartment</a></h4>
                                                            <p>Towson London, MR 21501</p>
                                                        </div>
                                                        <div class="item">
                                                            <div class="image bottom15">
                                                                <img src="images/nav-slider1.jpg"
                                                                    alt="Featured Property">
                                                                <span class="nav_tag yellow text-uppercase">for
                                                                    rent</span>
                                                            </div>
                                                            <h4><a href="property_detail1.html">Park Avenue
                                                                    Apartment</a></h4>
                                                            <p>Towson London, MR 21501</p>
                                                        </div>
                                                        <div class="item">
                                                            <div class="image bottom15">
                                                                <img src="images/nav-slider2.jpg"
                                                                    alt="Featured Property">
                                                                <span class="nav_tag yellow text-uppercase">for
                                                                    rent</span>
                                                            </div>
                                                            <h4><a href="property_detail2.html">Park Avenue
                                                                    Apartment</a></h4>
                                                            <p>Towson London, MR 21501</p>
                                                        </div>
                                                        <div class="item">
                                                            <div class="image bottom15">
                                                                <img src="images/nav-slider3.jpg"
                                                                    alt="Featured Property">
                                                                <span class="nav_tag yellow text-uppercase">for
                                                                    rent</span>
                                                            </div>
                                                            <h4><a href="property_detail3.html">Park Avenue
                                                                    Apartment</a></h4>
                                                            <p>Towson London, MR 21501</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown megamenu-fw">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Properties</a>
                                <ul class="dropdown-menu megamenu-content bg" role="menu">
                                    <li>
                                        <div class="row">
                                            <div class="col-menu col-md-3">
                                                <h5 class="title">PROPERTY LISTINGS</h5>
                                                <div class="content">
                                                    <ul class="menu-col">
                                                        <li><a href="listing1.html">List Style 1</a></li>
                                                        <li><a href="listing2.html">List Style 2</a></li>
                                                        <li><a href="listing3.html">List Style 3</a></li>
                                                        <li><a href="listing4.html">List Style 4</a></li>
                                                        <li><a href="listing5.html">List Style 5</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-menu col-md-3">
                                                <h5 class="title">PROPERTY LISTINGS</h5>
                                                <div class="content">
                                                    <ul class="menu-col">
                                                        <li><a href="listing6.html">List Style 5</a></li>
                                                        <li><a href="listing7.html">List Style 6</a></li>
                                                        <li><a href="listing1.html">Search by City</a></li>
                                                        <li><a href="listing2.html">Search by Category</a></li>
                                                        <li><a href="listing3.html">Search by Type</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-menu col-md-3">
                                                <h5 class="title">PROPERTY DETAIL</h5>
                                                <div class="content">
                                                    <ul class="menu-col">
                                                        <li><a href="property_detail1.html">Property Detail 1</a>
                                                        </li>
                                                        <li><a href="property_detail2.html">Property Detail 2</a>
                                                        </li>
                                                        <li><a href="property_detail3.html">Property Detail 3</a>
                                                        </li>
                                                        <li><a href="index7.html">Single Property</a></li>
                                                        <li><a href="listing4.html">Search by Type</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-menu col-md-3">
                                                <h5 class="title">OTHER PAGES</h5>
                                                <div class="content">
                                                    <ul class="menu-col">
                                                        <li><a href="favorite_properties.html">Favorite
                                                                Properties</a></li>
                                                        <li><a href="agent_profile.html">Agent Profile</a></li>
                                                        <li><a href="404.html">404 Error</a></li>
                                                        <li><a href="contact.html">Contact Us</a></li>
                                                        <li><a href="testimonial.html">Testimonials</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#." class="dropdown-toggle" data-toggle="dropdown">Features </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown">
                                        <a href="#." class="dropdown-toggle" data-toggle="dropdown">News</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="news.html">news Style1</a></li>
                                            <li><a href="news2.html">news Style2<span>new</span></a></li>
                                            <li><a href="news3.html">news Style3<span>new</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#." class="dropdown-toggle" data-toggle="dropdown">Property
                                            Agents</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="agent1.html">Agent Style1</a></li>
                                            <li><a href="agent2.html">Agent Style2</a></li>
                                            <li><a href="agent3.html">Agent Style3<span>new</span></a></li>
                                            <li><a href="agent4.htm4">Agent Style4<span>new</span></a></li>
                                            <li><a href="agent5.htm5">Agent Style5<span>new</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#." class="dropdown-toggle" data-toggle="dropdown">Agetn Profile
                                            Styles</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="agent_profile.html">Agent Profile 1</a></li>
                                            <li><a href="agent_profile2.html">Agent Profile 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#." class="dropdown-toggle" data-toggle="dropdown">Testimonials</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="testimonial.html">Style 1</a></li>
                                            <li><a href="testimonial2.html">Style 2<span>new</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#." class="dropdown-toggle" data-toggle="dropdown">FAQ's</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="faq.html">Style 1</a></li>
                                            <li><a href="faq2.html">Style 2<span>new</span></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="favorite_properties.html">Favorite Properties</a></li>
                                    <li class="dropdown">
                                        <a href="#." class="dropdown-toggle" data-toggle="dropdown">404 Error</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="404.html">404 Error 1</a></li>
                                            <li><a href="404-2.html">404 Error 2<span>new</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="#.">Buy Now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<!--Header Ends-->




<button type="button" class="form_opener"><i class="fa fa-bars"></i></button>
<div class="tp_overlay">
    <div class="topbar clearfix">
        <ul class="breadcrumb_top">
            <li><a href="favorite_properties.html"><i class="icon-icons43"></i>Favorites</a></li>
            <li><a href="submit_property.html"><i class="icon-icons215"></i>Submit Property</a></li>
            <li><a href="my_properties.html"><i class="icon-icons215"></i>My Property</a></li>
            <li><a href="profile.html"><i class="icon-icons230"></i>Profile</a></li>
            <li><a href="login.html"><i class="icon-icons179"></i>Login / Register</a></li>
            <li class="last-icon"><i class="icon-icons215"></i></li>
        </ul>
    </div>

    <form class="callus top30 clearfix centered">
        <h2 class="text-uppercase t_white bottom20 text-center">advanced search</h2>
        <div class="row">
            <div class="col-sm-6">
                <div class="single-query bottom15">
                    <input type="text" class="keyword-input" placeholder="Keyword (e.g. 'office')">
                </div>
            </div>
          
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="single-query bottom15">
                    <input type="text" class="keyword-input" placeholder="Min Area (sq ft)">
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="single-query bottom15">
                    <input type="text" class="keyword-input" placeholder="Max Area (sq ft)">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-8 bottom15">
                <div class="single-query-slider">
                    <div class="clearfix top20">
                        <label class="pull-left">Price Range:</label>
                        <div class="price text-right">
                            <span>$</span>
                            <div class="leftLabel"></div>
                            <span>to $</span>
                            <div class="rightLabel"></div>
                        </div>
                    </div>
                    <div data-range_min="0" data-range_max="1500000" data-cur_min="0" data-cur_max="1500000"
                        class="nstSlider">
                        <div class="bar"></div>
                        <div class="leftGrip"></div>
                        <div class="rightGrip"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 text-right form-group top30">
                <button type="submit" class="border_radius btn-yellow text-uppercase">Search</button>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="group-button-search">
                    <a data-toggle="collapse" href=".search-propertie-filters" class="more-filter">
                        <i class="fa fa-plus text-1" aria-hidden="true"></i><i class="fa fa-minus text-2 hide"
                            aria-hidden="true"></i>
                        <div class="text-1">Show more search options</div>
                        <div class="text-2 hide">less more search options</div>
                    </a>
                </div>
                <div class="search-propertie-filters collapse">
                    <div class="container-2">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="search-form-group white bottom10">
                                    <input type="checkbox" name="check-box">
                                    <span>Features</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="search-form-group white bottom10">
                                    <input type="checkbox" name="check-box">
                                    <span>Balcony</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="search-form-group white bottom10">
                                    <input type="checkbox" name="check-box">
                                    <span>Gas Heat</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="search-form-group white bottom10">
                                    <input type="checkbox" name="check-box">
                                    <span>Washer, Dryer</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="search-form-group white bottom10">
                                    <input type="checkbox" name="check-box">
                                    <span>TV Cable</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="search-form-group white bottom10">
                                    <input type="checkbox" name="check-box">
                                    <span>Swimming Pool</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="search-form-group white bottom10">
                                    <input type="checkbox" name="check-box">
                                    <span>Home Theater</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>




<!-- Gallery -->
<section id="property" class="padding bg_gallery">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="uppercase">real estate properties</h2>
                <p class="heading_space">We have Properties in these Areas View a list of Featured Properties.</p>
            </div>
        </div>
        <div class="clearfix">
            <div id="filters-property" class="cbp-l-filters-button text-center">
                <div data-filter=".latest" class="cbp-filter-item-active cbp-filter-item">LATEST</div>
                <div data-filter=".sale" class="cbp-filter-item">SALE</div>
                <div data-filter=".rent" class="cbp-filter-item">RENT</div>
            </div>
        </div>
        <div id="property-gallery" class="cbp listing1">
            <div class="cbp-item latest sale">
                <div class="property_item">
                    <div class="image">
                        <a href="property_detail1.html"><img src="images/listing1.jpg" alt="latest property"
                                class="img-responsive"></a>
                        <div class="price clearfix">
                            <span class="tag pull-right">$8,600 Per Month</span>
                        </div>
                        <span class="tag_t">For Sale</span>
                        <span class="tag_l">Featured</span>
                    </div>
                    <div class="proerty_content">
                        <div class="proerty_text">
                            <h3 class="captlize"><a href="property_detail1.html">Park avenue apartment</a></h3>
                            <p>45 Regent Street, London, UK</p>
                        </div>
                        <div class="property_meta transparent">
                            <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span>
                            <span><i class="icon-bed"></i>2 Office Rooms</span>
                            <span><i class="icon-safety-shower"></i>1 Bathroom</span>
                        </div>
                        <div class="property_meta transparent bottom30">
                            <span><i class="icon-old-television"></i>TV Lounge</span>
                            <span><i class="icon-garage"></i>1 Garage</span>
                            <span></span>
                        </div>
                        <div class="favroute clearfix">
                            <p><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
                            <ul class="pull-right">
                                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                                <li><a href="#seventy" class="share_expender" data-toggle="collapse"><i
                                            class="icon-share3"></i></a></li>
                            </ul>
                        </div>
                        <div class="toggle_share collapse" id="seventy">
                            <ul>
                                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i>
                                        Facebook</a></li>
                                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i>
                                        Twitter</a></li>
                                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cbp-item latest rent">
                <div class="property_item">
                    <div class="image">
                        <a href="property_detail2.html"><img src="images/listing2.jpg" alt="latest property"
                                class="img-responsive"></a>
                        <div class="price clearfix">
                            <span class="tag pull-right">$8,600 Per Month</span>
                        </div>
                        <span class="tag_t">For Rent</span>
                    </div>
                    <div class="proerty_content">
                        <div class="proerty_text">
                            <h3 class="captlize"><a href="property_detail2.html">Park avenue apartment</a></h3>
                            <p>45 Regent Street, London, UK</p>
                        </div>
                        <div class="property_meta transparent">
                            <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span>
                            <span><i class="icon-bed"></i>2 Office Rooms</span>
                            <span><i class="icon-safety-shower"></i>1 Bathroom</span>
                        </div>
                        <div class="property_meta transparent bottom30">
                            <span><i class="icon-old-television"></i>TV Lounge</span>
                            <span><i class="icon-garage"></i>1 Garage</span>
                            <span></span>
                        </div>
                        <div class="favroute clearfix">
                            <p><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
                            <ul class="pull-right">
                                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                                <li><a href="#six" class="share_expender" data-toggle="collapse"><i
                                            class="icon-share3"></i></a></li>
                            </ul>
                        </div>
                        <div class="toggle_share collapse" id="six">
                            <ul>
                                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i>
                                        Facebook</a></li>
                                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i>
                                        Twitter</a></li>
                                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cbp-item latest sale">
                <div class="property_item">
                    <div class="image">
                        <a href="property_detail3.html"><img src="images/listing3.jpg" alt="latest property"
                                class="img-responsive"></a>
                        <div class="price clearfix">
                            <span class="tag pull-right">$8,600 Per Month</span>
                        </div>
                        <span class="tag_t">For Sale</span>
                        <span class="tag_l">Featured</span>
                    </div>
                    <div class="proerty_content">
                        <div class="proerty_text">
                            <h3 class="captlize"><a href="property_detail3.html">Park avenue apartment</a></h3>
                            <p>45 Regent Street, London, UK</p>
                        </div>
                        <div class="property_meta transparent">
                            <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span>
                            <span><i class="icon-bed"></i>2 Office Rooms</span>
                            <span><i class="icon-safety-shower"></i>1 Bathroom</span>
                        </div>
                        <div class="property_meta transparent bottom30">
                            <span><i class="icon-old-television"></i>TV Lounge</span>
                            <span><i class="icon-garage"></i>1 Garage</span>
                            <span></span>
                        </div>
                        <div class="favroute clearfix">
                            <p><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
                            <ul class="pull-right">
                                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                                <li><a href="#three" class="share_expender" data-toggle="collapse"><i
                                            class="icon-share3"></i></a></li>
                            </ul>
                        </div>
                        <div class="toggle_share collapse" id="three">
                            <ul>
                                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i>
                                        Facebook</a></li>
                                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i>
                                        Twitter</a></li>
                                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cbp-item latest rent">
                <div class="property_item">
                    <div class="image">
                        <a href="property_detail1.html"><img src="images/listing4.jpg" alt="latest property"
                                class="img-responsive"></a>
                        <div class="price clearfix">
                            <span class="tag pull-right">$8,600 Per Month</span>
                        </div>
                        <span class="tag_t">For Rent</span>
                    </div>
                    <div class="proerty_content">
                        <div class="proerty_text">
                            <h3 class="captlize"><a href="property_detail1.html">Park avenue apartment</a></h3>
                            <p>45 Regent Street, London, UK</p>
                        </div>
                        <div class="property_meta transparent">
                            <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span>
                            <span><i class="icon-bed"></i>2 Office Rooms</span>
                            <span><i class="icon-safety-shower"></i>1 Bathroom</span>
                        </div>
                        <div class="property_meta transparent bottom30">
                            <span><i class="icon-old-television"></i>TV Lounge</span>
                            <span><i class="icon-garage"></i>1 Garage</span>
                            <span></span>
                        </div>
                        <div class="favroute clearfix">
                            <p><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
                            <ul class="pull-right">
                                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                                <li><a href="#twe" class="share_expender" data-toggle="collapse"><i
                                            class="icon-share3"></i></a></li>
                            </ul>
                        </div>
                        <div class="toggle_share collapse" id="twe">
                            <ul>
                                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i>
                                        Facebook</a></li>
                                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i>
                                        Twitter</a></li>
                                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cbp-item latest sale">
                <div class="property_item">
                    <div class="image">
                        <a href="property_detail2.html"><img src="images/listing8.jpg" alt="latest property"
                                class="img-responsive"></a>
                        <div class="price clearfix">
                            <span class="solid">Solid Out</span>
                        </div>
                        <span class="tag_t">For Sale</span>
                    </div>
                    <div class="proerty_content">
                        <div class="proerty_text">
                            <h3 class="captlize"><a href="property_detail2.html">Park avenue apartment</a></h3>
                            <p>45 Regent Street, London, UK</p>
                        </div>
                        <div class="property_meta transparent">
                            <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span>
                            <span><i class="icon-bed"></i>2 Office Rooms</span>
                            <span><i class="icon-safety-shower"></i>1 Bathroom</span>
                        </div>
                        <div class="property_meta transparent bottom30">
                            <span><i class="icon-old-television"></i>TV Lounge</span>
                            <span><i class="icon-garage"></i>1 Garage</span>
                            <span></span>
                        </div>
                        <div class="favroute clearfix">
                            <p><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
                            <ul class="pull-right">
                                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                                <li><a href="#twomore" class="share_expender" data-toggle="collapse"><i
                                            class="icon-share3"></i></a></li>
                            </ul>
                        </div>
                        <div class="toggle_share collapse" id="twomore">
                            <ul>
                                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i>
                                        Facebook</a></li>
                                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i>
                                        Twitter</a></li>
                                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cbp-item latest sale">
                <div class="property_item">
                    <div class="image">
                        <a href="property_detail3.html"><img src="images/listing6.jpg" alt="latest property"
                                class="img-responsive"></a>
                        <div class="price clearfix">
                            <span class="tag pull-right">$8,600 Per Month</span>
                        </div>
                        <span class="tag_t">For Sale</span>
                        <span class="tag_l">Featured</span>
                    </div>
                    <div class="proerty_content">
                        <div class="proerty_text">
                            <h3 class="captlize"><a href="property_detail3.html">Park avenue apartment</a></h3>
                            <p>45 Regent Street, London, UK</p>
                        </div>
                        <div class="property_meta transparent">
                            <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span>
                            <span><i class="icon-bed"></i>2 Office Rooms</span>
                            <span><i class="icon-safety-shower"></i>1 Bathroom</span>
                        </div>
                        <div class="property_meta transparent bottom30">
                            <span><i class="icon-old-television"></i>TV Lounge</span>
                            <span><i class="icon-garage"></i>1 Garage</span>
                            <span></span>
                        </div>
                        <div class="favroute clearfix">
                            <p><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
                            <ul class="pull-right">
                                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                                <li><a href="#one" class="share_expender" data-toggle="collapse"><i
                                            class="icon-share3"></i></a></li>
                            </ul>
                        </div>
                        <div class="toggle_share collapse" id="one">
                            <ul>
                                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i>
                                        Facebook</a></li>
                                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i>
                                        Twitter</a></li>
                                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cbp-item latest rent">
                <div class="property_item">
                    <div class="image">
                        <a href="property_detail1.html"><img src="images/listing7.jpg" alt="latest property"
                                class="img-responsive"></a>
                        <div class="price clearfix">
                            <span class="tag pull-right">$8,600 Per Month</span>
                        </div>
                        <span class="tag_t">For Rent</span>
                        <span class="tag_l">Featured</span>
                    </div>
                    <div class="proerty_content">
                        <div class="proerty_text">
                            <h3 class="captlize"><a href="property_detail1.html">Park avenue apartment</a></h3>
                            <p>45 Regent Street, London, UK</p>
                        </div>
                        <div class="property_meta transparent">
                            <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span>
                            <span><i class="icon-bed"></i>2 Office Rooms</span>
                            <span><i class="icon-safety-shower"></i>1 Bathroom</span>
                        </div>
                        <div class="property_meta transparent bottom30">
                            <span><i class="icon-old-television"></i>TV Lounge</span>
                            <span><i class="icon-garage"></i>1 Garage</span>
                            <span></span>
                        </div>
                        <div class="favroute clearfix">
                            <p><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
                            <ul class="pull-right">
                                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                                <li><a href="#seven" class="share_expender" data-toggle="collapse"><i
                                            class="icon-share3"></i></a></li>
                            </ul>
                        </div>
                        <div class="toggle_share collapse" id="seven">
                            <ul>
                                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i>
                                        Facebook</a></li>
                                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i>
                                        Twitter</a></li>
                                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cbp-item latest sale">
                <div class="property_item">
                    <div class="image">
                        <a href="property_detail2.html"><img src="images/listing5.jpg" alt="latest property"
                                class="img-responsive"></a>
                        <div class="price clearfix">
                            <span class="tag pull-right">$8,600 Per Month</span>
                        </div>
                        <span class="tag_t">For Sale</span>
                        <span class="tag_l">Featured</span>
                    </div>
                    <div class="proerty_content">
                        <div class="proerty_text">
                            <h3 class="captlize"><a href="property_detail2.html">Park avenue apartment</a></h3>
                            <p>45 Regent Street, London, UK</p>
                        </div>
                        <div class="property_meta transparent">
                            <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span>
                            <span><i class="icon-bed"></i>2 Office Rooms</span>
                            <span><i class="icon-safety-shower"></i>1 Bathroom</span>
                        </div>
                        <div class="property_meta transparent bottom30">
                            <span><i class="icon-old-television"></i>TV Lounge</span>
                            <span><i class="icon-garage"></i>1 Garage</span>
                            <span></span>
                        </div>
                        <div class="favroute clearfix">
                            <p><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
                            <ul class="pull-right">
                                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                                <li><a href="#onemore" class="share_expender" data-toggle="collapse"><i
                                            class="icon-share3"></i></a></li>
                            </ul>
                        </div>
                        <div class="toggle_share collapse" id="onemore">
                            <ul>
                                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i>
                                        Facebook</a></li>
                                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i>
                                        Twitter</a></li>
                                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cbp-item latest sale">
                <div class="property_item">
                    <div class="image">
                        <a href="property_detail3.html"><img src="images/listing9.jpg" alt="latest property"
                                class="img-responsive"></a>
                        <div class="price clearfix">
                            <span class="tag pull-right">$8,600 Per Month</span>
                        </div>
                        <span class="tag_t">For Sale</span>
                    </div>
                    <div class="proerty_content">
                        <div class="proerty_text">
                            <h3 class="captlize"><a href="property_detail3.html">Park avenue apartment</a></h3>
                            <p>45 Regent Street, London, UK</p>
                        </div>
                        <div class="property_meta transparent">
                            <span><i class="icon-select-an-objecto-tool"></i>4800 sq ft</span>
                            <span><i class="icon-bed"></i>2 Office Rooms</span>
                            <span><i class="icon-safety-shower"></i>1 Bathroom</span>
                        </div>
                        <div class="property_meta transparent bottom30">
                            <span><i class="icon-old-television"></i>TV Lounge</span>
                            <span><i class="icon-garage"></i>1 Garage</span>
                            <span></span>
                        </div>
                        <div class="favroute clearfix">
                            <p><i class="icon-calendar2"></i>&nbsp;5 Days ago </p>
                            <ul class="pull-right">
                                <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                                <li><a href="#sixy" class="share_expender" data-toggle="collapse"><i
                                            class="icon-share3"></i></a></li>
                            </ul>
                        </div>
                        <div class="toggle_share collapse" id="sixy">
                            <ul>
                                <li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i>
                                        Facebook</a></li>
                                <li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i>
                                        Twitter</a></li>
                                <li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 text-center top20">
            <a href="listing1.html" class="btn-dark border_radius uppercase margin40">more listings</a>
        </div>
    </div>
</section>
<!-- Gallery End -->


<!--Deals-->
<section id="deal" class="padding_bottom_half padding_top">
    <div class="container">
        <div class="row">
            <div class="col-sm-10">
                <h2 class="uppercase">Best Deal Properties</h2>
                <p class="heading_space">We have Properties in these Areas View a list of Featured Properties.</p>
            </div>
        </div>
        <div class="row">
            <div id="two-col-slider" class="owl-carousel">
                <div class="item">
                    <div class="listing_full">
                        <div class="image">
                            <img alt="image" src="images/b-d-property.jpg">
                            <span class="tag_t">For Sale</span>
                        </div>
                        <div class="listing_full_bg">
                            <div class="listing_inner_full">
                                <span><a href="#"><i class="icon-like"></i></a></span>
                                <a href="property_detail1.html">
                                    <h3>Park Avenue Apartment</h3>
                                    <p>Towson London, MR 21501</p>
                                </a>
                                <div class="favroute clearfix">
                                    <div class="property_meta"><span><i class="icon-select-an-objecto-tool"></i>4800
                                            sq ft</span><span><i class=" icon-bed"></i>3 Bedrooms</span><span><i
                                                class="icon-safety-shower"></i>2 Bedrooms</span><span
                                            class="border-l">$38,600 / pm</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="listing_full">
                        <div class="image">
                            <img alt="image" src="images/b-d-property2.jpg">
                            <span class="tag_t">For Sale</span>
                        </div>
                        <div class="listing_full_bg">
                            <div class="listing_inner_full">
                                <span><a href="#"><i class="icon-like"></i></a></span>
                                <a href="property_detail2.html">
                                    <h3>Park Avenue Apartment</h3>
                                    <p>Towson London, MR 21501</p>
                                </a>
                                <div class="favroute clearfix">
                                    <div class="property_meta"><span><i class="icon-select-an-objecto-tool"></i>4800
                                            sq ft</span><span><i class=" icon-bed"></i>3 Bedrooms</span><span><i
                                                class="icon-safety-shower"></i>2 Bedrooms</span><span
                                            class="border-l">$38,600 / pm</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="listing_full">
                        <div class="image">
                            <img alt="image" src="images/b-d-property3.jpg">
                            <span class="tag_t">For Sale</span>
                        </div>
                        <div class="listing_full_bg">
                            <div class="listing_inner_full">
                                <span><a href="#"><i class="icon-like"></i></a></span>
                                <a href="property_detail3.html">
                                    <h3>Park Avenue Apartment</h3>
                                    <p>Towson London, MR 21501</p>
                                </a>
                                <div class="favroute clearfix">
                                    <div class="property_meta"><span><i class="icon-select-an-objecto-tool"></i>4800
                                            sq ft</span><span><i class=" icon-bed"></i>3 Bedrooms</span><span><i
                                                class="icon-safety-shower"></i>2 Bedrooms</span><span
                                            class="border-l">$38,600 / pm</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="listing_full">
                        <div class="image">
                            <img alt="image" src="images/b-d-property4.jpg">
                            <span class="tag_t">For Sale</span>
                        </div>
                        <div class="listing_full_bg">
                            <div class="listing_inner_full">
                                <span><a href="#"><i class="icon-like"></i></a></span>
                                <a href="property_detail1.html">
                                    <h3>Park Avenue Apartment</h3>
                                    <p>Towson London, MR 21501</p>
                                </a>
                                <div class="favroute clearfix">
                                    <div class="property_meta"><span><i class="icon-select-an-objecto-tool"></i>4800
                                            sq ft</span><span><i class=" icon-bed"></i>3 Bedrooms</span><span><i
                                                class="icon-safety-shower"></i>2 Bedrooms</span><span
                                            class="border-l">$38,600 / pm</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Deals ends-->


<!--Parallax-->
<section id="parallax_four" class="padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 bottom30">
                <h2 class="uppercase">Over then <strong>7000</strong> Happy Customer</h2>
            </div>
            <div class="col-sm-8 col-md-10">
                <div class="row">
                    <div class="col-sm-6 margin40">
                        <i class="icon-presentation"></i>
                        <h4 class="bottom10">Good Sale & Marketing</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh
                            tempor cum soluta nobis eleifend.</p>
                    </div>
                    <div class="col-sm-6 margin40">
                        <i class="icon-icons215"></i>
                        <h4 class="bottom10">Good Sale & Marketing</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh
                            tempor cum soluta nobis eleifend.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About Owner ends-->


<!--Testinomials-->
<section id="testinomialBg" class="padding bg_light">
    <div id="agent-2" class="padding_bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2 class="uppercase">AGENTS YOU CAN TRUST</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec viverra erat Aenean elit
                        tellus.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 margin40">
                    <div class="agent_wrap">
                        <div class="image">
                            <img src="images/agent-one.jpg" alt="Agents">
                            <div class="img-info">
                                <h3>Bohdan Kononets</h3>
                                <span>sales executive</span>
                                <p class="top20 bottom30">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                    sed diam nonummy nibh tempor cum soluta nobis consectetuer.</p>
                                <table class="agent_contact table">
                                    <tbody>
                                        <tr class="bottom10">
                                            <td><strong>Phone:</strong></td>
                                            <td class="text-right">(+01) 34 56 7890</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Email Adress:</strong></td>
                                            <td class="text-right"><a href="#.">bohdan@castle.com</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <a class="btn-more" href="agent_profile.html">
                                    <i><img alt="arrow" src="images/arrow-yellow.png"></i><span>Full
                                        Profile</span><i><img alt="arrow" src="images/arrow-yellow.png"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 margin40">
                    <div class="agent_wrap">
                        <div class="image">
                            <img src="images/agent-five.jpg" alt="Agents">
                            <div class="img-info">
                                <h3>Bohdan Kononets</h3>
                                <span>sales executive</span>
                                <p class="top20 bottom30">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                    sed diam nonummy nibh tempor cum soluta nobis consectetuer.</p>
                                <table class="agent_contact table">
                                    <tbody>
                                        <tr class="bottom10">
                                            <td><strong>Phone:</strong></td>
                                            <td class="text-right">(+01) 34 56 7890</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Email Adress:</strong></td>
                                            <td class="text-right"><a href="#.">bohdan@castle.com</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <a class="btn-more" href="agent_profile.html">
                                    <i><img alt="arrow" src="images/arrow-yellow.png"></i><span>Full
                                        Profile</span><i><img alt="arrow" src="images/arrow-yellow.png"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 margin40">
                    <div class="agent_wrap">
                        <div class="image">
                            <img src="images/agent-six.jpg" alt="Agents">
                            <div class="img-info">
                                <h3>Bohdan Kononets</h3>
                                <span>sales executive</span>
                                <p class="top20 bottom30">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                    sed diam nonummy nibh tempor cum soluta nobis consectetuer.</p>
                                <table class="agent_contact table">
                                    <tbody>
                                        <tr class="bottom10">
                                            <td><strong>Phone:</strong></td>
                                            <td class="text-right">(+01) 34 56 7890</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Email Adress:</strong></td>
                                            <td class="text-right"><a href="#.">bohdan@castle.com</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <a class="btn-more" href="agent_profile.html">
                                    <i><img alt="arrow" src="images/arrow-yellow.png"></i><span>Full
                                        Profile</span><i><img alt="arrow" src="images/arrow-yellow.png"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container bg_white padding">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h2 class="uppercase">Happy Customers</h2>
                <p class="heading_space">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec
                    viverra erat Aenean elit tellus.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="testinomial-slider" class="owl-carousel display navigate">
                    <div class="item">
                        <div class="testinomial_content text-center">
                            <img src="images/author2.png" alt="happy client" class="bottom15">
                            <h4 class="uppercase"> SAM NICHOLSON</h4>
                            <span class="smmery bottom15">( NorthMarq Capital )</span>
                            <img src="images/stars.png" alt="rating" class="bottom30">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                tempor cum soluta nobis consectetuer adipiscing. Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis
                                fermentum sem, ac viverra ante luctus vel.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testinomial_content text-center">
                            <img src="images/author.png" alt="happy client" class="bottom15">
                            <h4 class="uppercase"> SAM NICHOLSON</h4>
                            <span class="smmery bottom15">( NorthMarq Capital )</span>
                            <img src="images/stars.png" alt="rating" class="bottom30">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                tempor cum soluta nobis consectetuer adipiscing. Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis
                                fermentum sem, ac viverra ante luctus vel.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testinomial_content text-center">
                            <img src="images/author2.png" alt="happy client" class="bottom15">
                            <h4 class="uppercase"> SAM NICHOLSON</h4>
                            <span class="smmery bottom15">( NorthMarq Capital )</span>
                            <img src="images/stars.png" alt="rating" class="bottom30">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                tempor cum soluta nobis consectetuer adipiscing. Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis
                                fermentum sem, ac viverra ante luctus vel.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Testinomials ends-->


<!--Partners-->
<section id="logos">
    <div class="container partner2 padding">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="uppercase">Our Partners</h2>
                <p class="heading_space">Aliquam nec viverra erat. Aenean elit tellus mattis quis maximus.</p>
            </div>
        </div>
        <div class="row">
            <div id="partners" class="owl-carousel">
                <div class="item">
                    <img src="images/logo1.png" alt="Featured Partner">
                </div>
                <div class="item">
                    <img src="images/logo2.png" alt="Featured Partner">
                </div>
                <div class="item">
                    <img src="images/logo3.png" alt="Featured Partner">
                </div>
                <div class="item">
                    <img src="images/logo4.png" alt="Featured Partner">
                </div>
                <div class="item">
                    <img src="images/logo5.png" alt="Featured Partner">
                </div>
                <div class="item">
                    <img src="images/logo1.png" alt="Featured Partner">
                </div>
                <div class="item">
                    <img src="images/logo2.png" alt="Featured Partner">
                </div>
                <div class="item">
                    <img src="images/logo3.png" alt="Featured Partner">
                </div>
                <div class="item">
                    <img src="images/logo4.png" alt="Featured Partner">
                </div>
                <div class="item">
                    <img src="images/logo5.png" alt="Featured Partner">
                </div>
                <div class="item">
                    <img src="images/logo1.png" alt="Featured Partner">
                </div>
                <div class="item">
                    <img src="images/logo2.png" alt="Featured Partner">
                </div>
                <div class="item">
                    <img src="images/logo3.png" alt="Featured Partner">
                </div>
                <div class="item">
                    <img src="images/logo4.png" alt="Featured Partner">
                </div>
                <div class="item">
                    <img src="images/logo5.png" alt="Featured Partner">
                </div>
            </div>
        </div>
    </div>
</section>
<!--Partners Ends-->
    @endsection