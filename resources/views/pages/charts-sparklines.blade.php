{{-- extend Layouts --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Charts Sparklines')

{{-- page styles --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('/css/pages/charts-sparkline.css')}}">
@endsection

{{-- page content --}}
@section('content')
<div class="section" id="materialize-sparkline">

  <!--Simple Line Chart-->
  <div class="row">
    <div class="col s12 m6 l3">
      <div class="ct-chart card z-depth-2 border-radius-6">
        <div class="card-content">
          <div class="row">
            <div class="col s12">
              <h4 class="card-title">Total Visit</h4>
            </div>
            <div class="col s12 display-flex">
              <div id="sales-bar-1"></div>
              <p class="mt-4 pink-text accent-2"><i class="material-icons dp48 vertical-align-bottom">arrow_upward</i>
                9504</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col s12 m6 l3">
      <div class="ct-chart card z-depth-2 border-radius-6">
        <div class="card-content">
          <div class="row">
            <div class="col s12">
              <h4 class="card-title truncate">Total Page Views</h4>
            </div>
            <div class="col s12 display-flex">
              <div id="sales-bar-2"></div>
              <p class="mt-4 blue-text"><i class="material-icons dp48 vertical-align-bottom">arrow_upward</i>
                1896</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col s12 m6 l3">
      <div class="ct-chart card z-depth-2 border-radius-6">
        <div class="card-content">
          <div class="row">
            <div class="col s12">
              <h4 class="card-title">Unique Visitor</h4>
            </div>
            <div class="col s12 display-flex light-green-text">
              <div id="sales-bar-3"></div>
              <p class="mt-4 "><i class="material-icons dp48 vertical-align-bottom">arrow_upward</i>
                8546</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col s12 m6 l3">
      <div class="ct-chart card z-depth-2 border-radius-6">
        <div class="card-content">
          <div class="row">
            <div class="col s12">
              <h4 class="card-title">Bounce Rate</h4>
            </div>
            <div class="col s12 display-flex amber-text accent-2">
              <div id="sales-bar-4"></div>
              <p class="mt-4 "><i class="material-icons dp48 vertical-align-bottom">arrow_downward</i>
                15%</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col s12 m12 l6">
      <div class="ct-chart card z-depth-2 border-radius-6">
        <div class="card-content">
          <h4 class="card-title">Inline Chart</h4>
          <div id="invoice-line" class="center"></div>
        </div>
      </div>
    </div>
    <div class="col s12 m12 l6">
      <div class="ct-chart card z-depth-2 border-radius-6">
        <div class="card-content">
          <h4 class="card-title">Bar Chart</h4>
          <div id="clients-bar" class="center"></div>
        </div>
      </div>
    </div>
    <div class="col s12 m12 l6">
      <div class="ct-chart card z-depth-2 border-radius-6">
        <div class="card-content">
          <h4 class="card-title">Tristate chart</h4>
          <div id="profit-tristate" class="center"></div>
        </div>
      </div>
    </div>
    <div class="col s12 m12 l6">
      <div class="ct-chart card z-depth-2 border-radius-6">
        <div class="card-content">
          <div class="row">
            <div class="col s12">
              <h4 class="card-title">Bar Chart</h4>
            </div>
            <div class="col s12">
              <div id="bar-chart-sample" class="center"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col s12 m12 l6">
      <div class="ct-chart card z-depth-2 border-radius-6">
        <div class="card-content">
          <h4 class="card-title">Bar + line composite charts</h4>
          <div id="sales-compositebar" class="center"></div>
        </div>
      </div>
    </div>
    <div class="col s12 m12 l6">
      <div class="ct-chart card z-depth-2 border-radius-6">
        <div class="card-content">
          <div class="row">
            <div class="col s12">
              <h4 class="card-title">Pie Chart</h4>
            </div>
            <div class="col s12">
              <div id="pie-chart-sample" class="center"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

{{-- vendor scripts --}}
@section('vendor-script')
<script src="{{asset('/vendors/sparkline/jquery.sparkline.min.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-script')
<script src="{{asset('/js/scripts/charts-sparklines.js')}}"></script>
@endsection