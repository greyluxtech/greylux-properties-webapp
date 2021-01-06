<!DOCTYPE html>
<html lang="en">
 <head>
   @include('dashboard.layouts.head')
 </head>
 <body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar"> 
        @include('dashboard.layouts.header')
             <!-- Content Wrapper. Contains page content -->
             <div class="app-main">
                @include('dashboard.layouts.Lsidebar')
                <div class="app-main__outer">
                @yield('content')
                @include('dashboard.layouts.footer')
                </div>
            </div>
@include('dashboard.layouts.footer-script')
</div>
 </body>
</html>