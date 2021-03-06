<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('public/vendors/vendors.min.css') }}">
<!-- BEGIN: VENDOR CSS-->
@yield('vendor-style')
<!-- END: VENDOR CSS-->
<!-- BEGIN: Page Level CSS-->
@if(!empty($configData['mainLayoutType']) && isset($configData['mainLayoutType']))
<link rel="stylesheet" type="text/css"
  href="{{asset('public/css/themes/'.$configData['mainLayoutType'].'-template/materialize.css')}}">
<link rel="stylesheet" type="text/css"
  href="{{asset('public/css/themes/'.$configData['mainLayoutType'].'-template/style.css')}}">
<style>
  .small-text {
    font-size: 0.9rem !important;
  }
  #slide-out-right {
    overflow: auto !important;
    overflow-x: hidden !important;
  }
</style>
@if($configData['mainLayoutType'] === 'horizontal-menu')
{{-- horizontal style file only for horizontal layout --}}
<link rel="stylesheet" type="text/css" href="{{asset('public/css/layouts/style-horizontal.css')}}">
@endif
@else
<h1>mainLayoutType option is either empty or not set in config custom.php file.</h1>
@endif

@yield('page-style')

@if($configData['direction'] === 'rtl')
{{-- rtl style file for rtl version --}}
<link rel="stylesheet" type="text/css" href="{{asset('public/css/style-rtl.css')}}">
@endif
<!-- END: Page Level CSS-->
<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('public/css/laravel-custom.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/css/custom/custom.css')}}">
<!-- END: Custom CSS-->