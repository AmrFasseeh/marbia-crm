<!-- BEGIN VENDOR JS-->
<script src="{{asset('public/js/vendors.min.js')}}"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
@yield('vendor-script')
<!-- END PAGE VENDOR JS-->
<!-- BEGIN THEME  JS-->
<script src="{{asset('public/js/plugins.js')}}"></script>
<script src="{{asset('public/js/search.js')}}"></script>
<script src="{{asset('public/js/custom/custom-script.js')}}"></script>
<script src="{{ asset('public/js/vue.js') }}"></script>
<script src="{{ asset('public/js/dom-autoscroller.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>
@if ($configData['isCustomizer']=== true)
<script src="{{asset('public/js/scripts/customizer.js')}}"></script>
<script>
$('#main').hide();
$('#header').hide();
$('.sidenav-main').hide();
$('.footer').hide();
document.onreadystatechange = function () {
var state = document.readyState
if (state == 'complete') {
document.getElementById('interactive');
document.getElementById('load').style.visibility="hidden";
$('#main').show();
$('#header').show();
$('.sidenav-main').show();
$('.footer').show();
}
}
</script>
@endif
<!-- END THEME  JS-->
<!-- BEGIN PAGE LEVEL JS-->
@yield('page-script')