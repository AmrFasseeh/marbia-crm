{{-- pageConfigs variable pass to Helper's updatePageConfig function to update page configuration  --}}
@isset($pageConfigs)
{!! Helper::updatePageConfig($pageConfigs) !!}
@endisset

<!DOCTYPE html>
@php
// confiData variable layoutClasses array in Helper.php file.
$configData = Helper::applClasses();
@endphp
<!--
Template Name: Materialize - Material Design Admin Template
Author: PixInvent
Website: http://www.pixinvent.com/
Contact: hello@pixinvent.com
Follow: www.twitter.com/pixinvents
Like: www.facebook.com/pixinvents
Purchase: https://themeforest.net/item/materialize-material-design-admin-template/11446068?ref=pixinvent
Renew Support: https://themeforest.net/item/materialize-material-design-admin-template/11446068?ref=pixinvent
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

-->
<html class="loading"
  lang="@if(session()->has('locale')){{session()->get('locale')}}@else{{$configData['defaultLanguage']}}@endif"
  data-textdirection="{{ env('MIX_CONTENT_DIRECTION') === 'rtl' ? 'rtl' : 'ltr' }}">
<!-- BEGIN: Head-->

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title') | Dashboard</title>
  <link rel="apple-touch-icon" href="{{asset('public/images/favicon/apple-touch-icon-152x152.png')}}">
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/images/favicon/favicon-32x32.png')}}">
<style>
   #load{
    width:100%;
    height:100%;
    position:fixed;
    z-index:9999;
    display: flex;
    justify-content: center;
    align-content: center;
    align-items: center;
}
</style>
  {{-- Include core + vendor Styles --}}
  @include('panels.styles')

</head>
<!-- END: Head-->
<div id="load">
  <div class="preloader-wrapper active">
    <div class="spinner-layer spinner-red-only">
      <div class="circle-clipper left">
        <div class="circle"></div>
      </div>
      <div class="gap-patch">
        <div class="circle"></div>
      </div>
      <div class="circle-clipper right">
        <div class="circle"></div>
      </div>
    </div>
  </div>
</div>
{{-- @isset(config('custom.custom.mainLayoutType'))
@endisset --}}
@if(!empty($configData['mainLayoutType']) && isset($configData['mainLayoutType']))
@include(($configData['mainLayoutType'] === 'horizontal-menu') ? 'layouts.horizontalLayoutMaster':
'layouts.verticalLayoutMaster')
@else
{{-- if mainLaoutType is empty or not set then its print below line  --}}
<h1>{{'mainLayoutType Option is empty in config custom.php file.'}}</h1>
@endif

</html>