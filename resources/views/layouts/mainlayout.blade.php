<!DOCTYPE html>
<html lang="en">
 <head>
   @include('layouts.partials.head')
 </head>
 <body>
    <div id="app">                 
{{-- @include('layouts.partials.header') --}}
             <!-- Content Wrapper. Contains page content -->
             <div class="content-wrapper">
                @yield('content')
            </div>
@include('layouts.partials.footer')
{{-- @include('layouts.partials.form') --}}
@include('layouts.partials.footer-script')
</div>
 </body>
</html>