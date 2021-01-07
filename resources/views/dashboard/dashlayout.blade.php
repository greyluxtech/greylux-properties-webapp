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
<script>
  @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        
        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
  @endif
</script>
 </body>
</html>