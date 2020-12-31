@extends('layout.main2')

@section('section1')
<nav class="navbar navbar-expand-lg navbar-light topbar static-top shadow-sm bg-white osahan-nav-top px-0">
    <div class="container">
    
    <a class="navbar-brand" href="index-2.html"><img src="images/logo.svg" alt=""></a>
    
    <form class="d-none d-sm-inline-block form-inline mr-auto my-2 my-md-0 mw-100 navbar-search">
    <div class="input-group">
    <input type="text" class="form-control bg-white small" placeholder="Find Services..." aria-label="Search" aria-describedby="basic-addon2">
    <div class="input-group-append">
    <button class="btn btn-success" type="button">
    <i class="fa fa-search fa-sm"></i>
    </button>
    </div>
    </div>
    </form>
    
    <ul class="navbar-nav align-items-center ml-auto">
    <li class="nav-item dropdown no-arrow no-caret mr-3 dropdown-notifications d-sm-none">
    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fa fa-search fa-fw"></i>
    </a>
    
    <div class="dropdown-menu dropdown-menu-right p-3 shadow-sm animated--grow-in" aria-labelledby="searchDropdown">
    <form class="form-inline mr-auto w-100 navbar-search">
    <div class="input-group">
    <input type="text" class="form-control bg-light border-0 small" placeholder="Find Services..." aria-label="Search" aria-describedby="basic-addon2">
    <div class="input-group-append">
    <button class="btn btn-primary" type="button">
    <i class="fa fa-search fa-sm"></i>
    </button>
    </div>
    </div>
    </form>
    </div>
    </li>
  
  
    <li class="nav-item dropdown no-arrow no-caret dropdown-user">
    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="http://127.0.0.1:8000/user_profile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" src="{{asset('public_theme/images/user/s4.png')}}"></a>
    <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
    <h6 class="dropdown-header d-flex align-items-center">
    <img class="dropdown-user-img" src="{{asset('public_theme/images/user/s4.png')}}">
    <div class="dropdown-user-details">
    <div class="dropdown-user-details-name">Askbootstrap</div>
    <div class="dropdown-user-details-email"><a href="http://127.0.0.1:8000/user_profile"></a></div>
     </div>
    </h6>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="account.html">
    <div class="dropdown-item-icon">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
    <circle cx="12" cy="12" r="3"></circle>
    <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
    </svg>
    </div>
    Account
    </a>
    </div>
    </li>


    </ul>
    </div>
    </nav>
<section class="py-5 homepage-search-block position-relative">
    <div class="container">
    <div class="row py-lg-5">
    <div class="col-lg-7">
    <div class="homepage-search-title">
    <h1 class="mb-3 text-shadow text-gray-900 font-weight-bold">Find  Best job you deserve and looking for</h1>
    <h5 class="mb-5 text-shadow text-gray-800 font-weight-normal">Millions of people use miver to turn their ideas into reality.
    </h5>
    </div>
    <div class="homepage-search-form">
    <form class="form-noborder">
    <div class="form-row">
    <div class="col-lg-3 col-md-3 col-sm-12 form-group">
    <div class="location-dropdown">
    <i class="icofont-location-arrow"></i>
    <select class="custom-select form-control border-0 shadow-sm form-control-lg">
    <option> All </option>
    <option> Graphics & Design </option>
    <option> Digital Marketing </option>
    <option> Writing & Translation </option>
    <option> Video & Animation </option>
    <option> Music & Audio </option>
    <option> Programming & Tech </option>
    <option> Business </option>
    <option> Lifestyle </option>
    <option> Industries </option>
    </select>
    </div>
    </div>
     <div class="col-lg-7 col-md-7 col-sm-12 form-group">
    <input type="text" placeholder="Find Services..." class="form-control border-0 form-control-lg shadow-sm">
    </div>
    <div class="col-lg-2 col-md-2 col-sm-12 form-group">
    <button type="submit" class="btn btn-success btn-block btn-lg btn-gradient shadow-sm"><i class="fa fa-search"></i></button>
    </div>
    </div>
    </form>
    </div>
    <div class="popular">
    <span class="text-body-2">Popular</span>
    <ul>
    <li><a href="#" class="text-body-2">Full-stack developer </a></li>
    <li><a href="#" class="text-body-2">UI/ux designer</a></li>
    <li><a href="#" class="text-body-2">Front-end developer</a></li>
    <li><a href="#" class="text-body-2">iOS Software Development Engineer</a></li>
    </ul>
    </div>
    </div>
    <div class="col-lg-5">
    <img class="img-fluid" src="{{asset('public_theme/images/banner.svg')}}" alt='' />
    </div>
    </div>
    </div>
    </section>
    
    <ul class="trusted-by bg-white border-bottom">
    <li><img src="{{asset('public_theme/images/facebook.png')}}"></li>
    <li><img src="{{asset('public_theme/images/google.png')}}"></li>
    <li><img src="{{asset('public_theme/images/mit.png')}}"></li>
    <li><img src="{{asset('public_themeimages/netflix.png')}}"></li>
    <li><img src="{{asset('public_themeimages/paypal.png')}}"></li>
    <li><img src="{{asset('public_themeimages/intuit.png')}}"></li>
    <li><img src="{{asset('public_themeimages/facebook.png')}}"></li>
    </ul>
    
    
    
    <div class="freelance-projects bg-white py-5">
    <div class="container">
    <div class="row freelance-slider">
    <div class="col">
    <div class="freelancer">
    <img src="{{asset('public_theme/images/senatopcustudio.jpg')}}">
    <div class="freelancer-footer">
    <img src="{{asset('public_theme/images/user/s7.png')}}">
    <h5>Logo Design
    <span>by <i>John</i></span>
    </h5>
    </div>
    </div>
    </div>
    <div class="col">
    <div class="freelancer">
    <img src="{{asset('public_theme/images/vnuggz.jpg')}}">
    <div class="freelancer-footer">
    <img src="{{asset('public_theme/images/user/s8.png')}}">
    <h5>Web &amp; Mobile Design
    <span>by <i>John</i></span>
    </h5>
    </div>
    </div>
    </div>
    <div class="col">
    <div class="freelancer">
    <img src="{{asset('public_theme/images/digitalgeria.jpg')}}">
    <div class="freelancer-footer">
    <img src="{{asset('public_theme/images/user/s1.png')}}">
    <h5>Packaging Design
    <span>by <i>John</i></span>
    </h5>
    </div>
    </div>
    </div>
    <div class="col">
    <div class="freelancer">
    <img src="{{asset('public_theme/images/artsi3d.jpg')}}">
    <div class="freelancer-footer">
    <img src="{{asset('public_theme/images/user/s2.png')}}">
    <h5>Brand Style Guides
    <span>by <i>John</i></span>
    </h5>
    </div>
    </div>
    </div>
    <div class="col">
    <div class="freelancer">
    <img src="{{asset('public_theme/images/designerheather.jpg')}}">
     <div class="freelancer-footer">
    <img src="{{asset('public_theme/images/user/s3.png')}}">
    <h5>Illustration
    <span>by <i>John</i></span>
    </h5>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection

@section('section2')
<section>
    <div class="main-page best-selling">
    <div class="view_slider recommended pt-5">
    <div class="container">
    <div class="sorting-div d-flex align-items-center justify-content-between">
    <p class="mb-2">463 Services available</p>
    </div>
    <h3>Services In Web &amp; Mobile Design</h3>
    </div>
    <div class="container">
    <div class="row">
    <div class="col-md-3">
    <a href="product-detail.html">
    <img class="img-fluid" src="{{asset('public_theme/images/list/v1.png')}}" />
    </a>
    <div class="inner-slider">
    <div class="inner-wrapper">
    <h3>
    Contrary to popular belief, Lorem Ipsum is not simply...
    </h3>
    
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="footer-pagination text-center">
    <nav aria-label="Page navigation example">
    <ul class="pagination">
    <li class="page-item">
    <a class="page-link" href="#" aria-label="Previous">
    <span aria-hidden="true"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
    
    </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">4</a></li>
    <li class="page-item"><a class="page-link" href="#">5</a></li>
    <li class="page-item">
    <a class="page-link" href="#" aria-label="Next">
    <span aria-hidden="true"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
    
    </a>
    </li>
    </ul>
    </nav>
    </div>
    </section>
@endsection


@section('section3')
    
@endsection




@section('section4')
    
<div class="guide-wrapper py-5">
    <div class="container">
    <h2>
    Miver
    Guides
    <a href="#" class="float-right">See More guides></a>
    </h2>
    <div class="row">
    <div class="col-md-4">
    <a href="#" class="guide">
    <img src="{{asset('public_theme/images/guide-01.jpg')}}">
    <div class="content">
    <h6>Create a Website</h6>
    <p>Building a stunning website from A to Z</p>
    </div>
    </a>
    </div>
    <div class="col-md-4">
    <a href="#" class="guide">
    <img src="{{asset('public_theme/images/guide-02.jpg')}}">
    <div class="content">
    <h6>Grow With Digital Marketing</h6>
    <p>Promoting your business online</p>
    </div>
    </a>
    </div>
    <div class="col-md-4">
    <a href="#" class="guide">
    <img src="{{asset('public_theme/images/guide-03.jpg')}}">
    <div class="content">
    <h6>Build a Strong Brand</h6>
    <p>Differentiating yourself from the competition</p>
    </div>
    </a>
    </div>
    </div>
    </div>
    </div>
    
    
    <div>
    <div class="get-started">
    <div class="content">
    <h2>Find Freelance Services For Your Business Today</h2>
    <p>We've got you covered for all your business needs</p>
    <a href="#" class="c-btn c-fill-color-btn">Get Started</a>
    </div>
    </div>
    </div>
    @endsection