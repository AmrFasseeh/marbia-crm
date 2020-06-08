{{-- extend layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Blog List Page')

{{-- page style --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('public/css/pages/page-blog.css')}}">
@endsection

{{-- page content --}}
@section('content')
<div class="section mt-2" id="blog-list">
  <div class="row">
    <!-- Blog Style One -->

    <!-- Fashion Card -->
    <div class="col s12 m6 l4">
      <div class="card-panel border-radius-6 mt-10 card-animation-1">
        <a href="#"><img class="responsive-img border-radius-8 z-depth-4 image-n-margin"
            src="{{asset('public/images/cards/news-fashion.jpg')}}" alt=""></a>
        <h6 class="deep-purple-text text-darken-3 mt-5"><a href="#">Fashion</a></h6>
        <span>Fashion is a popular style, especially in clothing, footwear, lifestyle, accessories, makeup, hairstyle
          and body.</span>
        <div class="display-flex justify-content-between flex-wrap mt-4">
          <div class="display-flex align-items-center mt-1">
            <img src="{{asset('public/images/user/9.jpg')}}" width="30" alt="fashion"
              class="circle mr-10 vertical-text-middle">
            <span class="pt-2">Taniya</span>
          </div>
          <div class="display-flex mt-3 right-align social-icon">
            <span class="material-icons">favorite_border</span> <span class="ml-3 vertical-align-top">340</span>
            <span class="material-icons ml-10">chat_bubble_outline</span> <span
              class="ml-3 vertical-align-top">80</span>
          </div>
        </div>
      </div>
    </div>
    <!-- Apple News -->
    <div class="col s12 m6 l4">
      <div class="card-panel border-radius-6 mt-10 card-animation-1">
        <a href="#"><img class="responsive-img border-radius-8 z-depth-4 image-n-margin"
            src="{{asset('public/images/cards/news-apple.jpg')}}" alt=""></a>
        <h6 class="deep-purple-text text-darken-3 mt-5"><a href="#">Apple News</a></h6>
        <span>Some users have reported their new phones won't charge when plugged into lightning cables when their
          screens are off.</span>
        <div class="display-flex justify-content-between flex-wrap  mt-4">
          <div class="display-flex align-items-center mt-1">
            <img src="{{asset('public/images/user/1.jpg')}}" width="36" alt="news" class="circle mr-10 vertical-text-middle">
            <span class="pt-2">Mike</span>
          </div>
          <div class="display-flex mt-3 right-align social-icon">
            <span class="material-icons">favorite_border</span> <span class="ml-3 vertical-align-top">434</span>
            <span class="material-icons ml-10">chat_bubble_outline</span> <span
              class="ml-3 vertical-align-top">34</span>
          </div>
        </div>
      </div>
    </div>
    <!-- Twitter News -->
    <div class="col s12 m6 l4">
      <div class="card-panel border-radius-6 mt-10 card-animation-1">
        <a href="#"><img class="responsive-img border-radius-8 z-depth-4 image-n-margin"
            src="{{asset('public/images/cards/news-twitter.jpg')}}" alt=""></a>
        <h6 class="deep-purple-text text-darken-3 mt-5"><a href="#">Twitter Brings Its 'Data Saver</a></h6>
        <span>Microblogging site Twitter has rolled out its latest update for Android and iOS users with the "data
          saver" twitter Application.
        </span>
        <div class="display-flex justify-content-between flex-wrap mt-4">
          <div class="display-flex align-items-center p-0 mt-1">
            <img src="{{asset('public/images/user/8.jpg')}}" width="36" alt="news" class="circle mr-10 vertical-text-middle">
            <span class="pt-2">Emma</span>
          </div>
          <div class="display-flex mt-3 right-align social-icon">
            <span class="material-icons">favorite_border</span> <span class="ml-3 vertical-align-top">234</span>
            <span class="material-icons ml-10">chat_bubble_outline</span> <span
              class="ml-3 vertical-align-top">45</span>
          </div>
        </div>
      </div>
    </div>
    <!-- Blog Style Two -->
  </div>
  <div class="row">
    <!-- Share markets News -->
    <div class="col s12 m6 l4">
      <div class="card-panel border-radius-6 white-text gradient-45deg-deep-purple-blue card-animation-2">
        <h6 class="mt-5"><b><a href="#" class="white-text">Sensex Nosedives 850 Points</a></b></h6>
        <span>Share markets on Thursday: Prominent losers in the Sensex pack were Maruti, ICICI Bank, Reliance and Yes
          Bank.
        </span>
        <div class="display-flex justify-content-between flex-wrap mt-4">
          <div class="display-flex align-items-center mt-1">
            <img src="{{asset('public/images/user/2.jpg')}}" width="36" alt="news" class="circle mr-10 vertical-text-middle">
            <span class="pt-2">Alex</span>
          </div>
          <div class="display-flex mt-3 right-align social-icon">
            <span class="material-icons">favorite_border</span> <span class="ml-3 vertical-align-top">531</span>
            <span class="material-icons ml-10">chat_bubble_outline</span> <span
              class="ml-3 vertical-align-top">99</span>
          </div>
        </div>
      </div>
    </div>
    <!-- USA News -->
    <div class="col s12 m6 l4">
      <div class="card-panel border-radius-6 white-text gradient-45deg-purple-deep-orange card-animation-2">
        <h6 class="mt-5"><b><a href="#" class="white-text">Famous for stylish jewelries</a></b></h6>
        <span>Sophia Fiori is one of the most famous jewelry designer in the USA. Sophia Fiori has got legacy of four
          generations.
        </span>
        <div class="display-flex justify-content-between flex-wrap mt-4">
          <div class="display-flex align-items-center mt-1">
            <img src="{{asset('public/images/user/8.jpg')}}" width="36" alt="news" class="circle mr-10 vertical-text-middle">
            <span class="pt-2">Taniya</span>
          </div>
          <div class="display-flex mt-3 right-align social-icon">
            <span class="material-icons">favorite_border</span> <span class="ml-3 vertical-align-top">167</span>
            <span class="material-icons ml-10">chat_bubble_outline</span> <span
              class="ml-3 vertical-align-top">23</span>
          </div>
        </div>
      </div>
    </div>
    <!-- Fasion News -->
    <div class="col s12 m6 l4">
      <div class="card-panel border-radius-6 white-text gradient-45deg-indigo-light-blue card-animation-2">
        <h6 class="mt-5"><b><a href="#" class="white-text">Lagom Way to Try Fall rends</a></b></h6>
        <span>You're not going to try every fall trend we write about here at Who What Wear, but where's the fun in not
          trying any at all?
        </span>
        <div class="display-flex justify-content-between flex-wrap mt-4">
          <div class="display-flex align-items-center p-0 mt-1">
            <img src="{{asset('public/images/user/4.jpg')}}" width="36" alt="news" class="circle mr-10 vertical-text-middle">
            <span class="pt-2">Peter</span>
          </div>
          <div class="display-flex mt-3 right-align social-icon">
            <span class="material-icons">favorite_border</span> <span class="ml-3 vertical-align-top">627</span>
            <span class="material-icons ml-10">chat_bubble_outline</span> <span
              class="ml-3 vertical-align-top">44</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Trending News -->
  <div class="row">
    <!-- News 1 -->
    <div class="col s12 m6 l4">
      <div class="card-panel border-radius-6 pt-4 pb-4">
        <span class="red-text"><i class="material-icons vertical-align-bottom"> trending_up </i> Trending</span>
        <p class="mt-4 mb-0">Bringing smooth animation transition in android</p>
        <div class="display-flex justify-content-between flex-wrap mt-2">
          <div class="display-flex align-items-center mt-1">
            <img src="{{asset('public/images/user/2.jpg')}}" width="36" alt="news" class="circle mr-10 vertical-text-middle">
            <span class="pt-2">Alex</span>
          </div>
          <div class="display-flex mt-3 right-align social-icon">
            <span class="material-icons">favorite_border</span> <span class="ml-3 vertical-align-top">120</span>
            <span class="material-icons ml-10">chat_bubble_outline</span> <span
              class="ml-3 vertical-align-top">67</span>
          </div>
        </div>
      </div>
    </div>
    <!-- News 2 -->
    <div class="col s12 m6 l4">
      <div class="card-panel border-radius-6 pt-4 pb-4">
        <span class="red-text"><i class="material-icons vertical-align-bottom"> trending_up </i> Trending</span>
        <p class="mt-4 mb-0">Bringing smooth animation transition in android</p>
        <div class="display-flex justify-content-between flex-wrap mt-2">
          <div class="display-flex align-items-center mt-1">
            <img src="{{asset('public/images/user/4.jpg')}}" width="36" alt="news" class="circle mr-10 vertical-text-middle">
            <span class="pt-2">John</span>
          </div>
          <div class="display-flex mt-3 right-align social-icon">
            <span class="material-icons">favorite_border</span> <span class="ml-3 vertical-align-top">120</span>
            <span class="material-icons ml-10">chat_bubble_outline</span> <span
              class="ml-3 vertical-align-top">67</span>
          </div>
        </div>
      </div>
    </div>
    <!-- News 3 -->
    <div class="col s12 m6 l4">
      <div class="card-panel border-radius-6 pt-4 pb-4">
        <span class="red-text"><i class="material-icons vertical-align-bottom"> trending_up </i> Trending</span>
        <p class="mt-4 mb-0">Bringing smooth animation transition in android</p>
        <div class="display-flex justify-content-between flex-wrap mt-2">
          <div class="display-flex align-items-center mt-1">
            <img src="{{asset('public/images/user/3.jpg')}}" width="36" alt="news" class="circle mr-10 vertical-text-middle">
            <span class="pt-2">Mike</span>
          </div>
          <div class="display-flex mt-3 right-align social-icon">
            <span class="material-icons">favorite_border</span> <span class="ml-3 vertical-align-top">120</span>
            <span class="material-icons ml-10">chat_bubble_outline</span> <span
              class="ml-3 vertical-align-top">67</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Horizontal News -->
  <div class="row">
    <!-- News 1 -->
    <div class="col s12 m6 l6">
      <div class="card horizontal border-radius-6">
        <div class="card-image">
          <a href="#"><img class="responsive-img image-n-margin" src="{{asset('public/images/cards/horizontal-news-1.jpg')}}"
              alt=""></a>
        </div>
        <div class="card-stacked">
          <div class="card-content pl-7 pt-7 pr-7 pb-7">
            <p class="mb-4">It’s 2018, and the race is on between tech giants to decide who will control...</p>
            <a href="#">Read More</a>
          </div>
          <div class="card-action pt-4 pb-3">
            <div class="display-flex">
              <div class="display-flex mr-10">
                <span class="material-icons mr-10">favorite_border</span>
                <span class="vertical-align-top">809</span>
              </div>
              <div class="display-flex">
                <span class="material-icons mr-10">chat_bubble_outline</span>
                <span class="vertical-align-top">409</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- News 2 -->
    <div class="col s12 m6 l6">
      <div class="card horizontal border-radius-6">
        <div class="card-image">
          <a href="#"><img class="responsive-img image-n-margin" src="{{asset('public/images/cards/horizontal-news-2.jpg')}}"
              alt=""></a>
        </div>
        <div class="card-stacked">
          <div class="card-content pl-7 pt-7 pr-7 pb-7">
            <p class="mb-4">It’s 2018, and the race is on between tech giants to decide who will control...</p>
            <a href="#">Read More</a>
          </div>
          <div class="card-action pt-4 pb-3">
            <div class="display-flex">
              <div class="display-flex mr-10">
                <span class="material-icons mr-10">favorite_border</span>
                <span class="vertical-align-top">300</span>
              </div>
              <div class="display-flex">
                <span class="material-icons mr-10">chat_bubble_outline</span>
                <span class="vertical-align-top">239</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Background Image News -->
  <div class="row">
    <!-- News 1 -->
    <div class="col s12 m6 l4">
      <div class="card-panel border-radius-6 white-text bg-image-1 pb-4">
        <p class="mt-0 mb-8"><b>Macro Infrared</b> Photographs Unlock The Depth Of Green In A Stunning Array Of Canary
          Island Plants</p>
        <div class="display-flex justify-content-between flex-wrap mt-4">
          <div class="pr-0">
            <a href="#" class="white-text"> Read More</a>
          </div>
          <div class=" display-flex mt-1 right-align social-icon">
            <span class="material-icons">favorite_border</span>
            <span class="ml-3 vertical-align-top">120</span>
            <span class="material-icons ml-10">chat_bubble_outline</span>
            <span class="ml-3 vertical-align-top">09</span>
          </div>
        </div>
      </div>
    </div>
    <!-- News 1 -->
    <div class="col s12 m6 l4">
      <div class="card-panel border-radius-6 white-text bg-image-2 pb-4">
        <p class="mt-0 mb-8"><b>Macro Infrared</b> Photographs Unlock The Depth Of Green In A Stunning Array Of Canary
          Island Plants</p>
        <div class="display-flex justify-content-between flex-wrap mt-4">
          <div class="pr-0">
            <a href="#" class="white-text"> Read More</a>
          </div>
          <div class="display-flex mt-1 right-align social-icon">
            <span class="material-icons">favorite_border</span> <span class="ml-3 vertical-align-top">51</span>
            <span class="material-icons ml-10">chat_bubble_outline</span> <span
              class="ml-3 vertical-align-top">40</span>
          </div>
        </div>
      </div>
    </div>
    <!-- News 1 -->
    <div class="col s12 m6 l4">
      <div class="card-panel border-radius-6 white-text bg-image-3 pb-4">
        <p class="mt-0 mb-8"><b>Macro Infrared</b> Photographs Unlock The Depth Of Green In A Stunning Array Of Canary
          Island Plants</p>
        <div class="display-flex justify-content-between flex-wrap mt-4">
          <div class="pr-0">
            <a href="#" class="white-text"> Read More</a>
          </div>
          <div class="display-flex mt-1 right-align social-icon">
            <span class="material-icons">favorite_border</span> <span class="ml-3 vertical-align-top">444</span>
            <span class="material-icons ml-10">chat_bubble_outline</span> <span
              class="ml-3 vertical-align-top">23</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection