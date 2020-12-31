@extends('layout.main2')

@section('section1')
<div class="py-5">
<div class="container">
<div class="row">

<aside class="col col-xl-5 order-xl-1 col-lg-6 order-lg-1 col-6">
<div class="box mb-3 shadow-sm rounded bg-white profile-box text-center">
<div class="py-4 px-3 border-bottom">
<img src="{{asset('public_theme/images/user/s4.png')}}" class="img-fluid mt-2 rounded-circle" alt="Responsive image">
<h5 class="font-weight-bold text-dark mb-1 mt-4">Gurdeep Osahan</h5>
<p class="mb-0 text-muted">UI / UX Designer</p>
</div>
<div class="container">
    <div class="row justify-content-md-center">
    <a class="font-weight-bold p-3 d-block" href="http://127.0.0.1:8000/edit" >
        <button class="btn  btn-lg btn-success" type="button"> Edit profile</button> </a>

        <a class="font-weight-bold p-3 d-block" href="http://127.0.0.1:8000/applied_job" >
            <button class="btn  btn-lg btn-success" type="button"> Applied jobs</button> </a>
</div>
</div>
</div>



<div class="box shadow-sm  rounded bg-white mb-3">
    <div class="box-title border-bottom p-3">
    <h6 class="m-0">Skills & Endorsements</h6>
    </div>
    <div class="box-body">
    <div class="d-flex align-items-center osahan-post-header p-3 border-bottom people-list">
    <div class="dropdown-list-image mr-3">
    <img class="rounded-circle" src="images/l4.png" alt="">
    </div>
    <div class="font-weight-bold">
    <div class="text-truncate">Character Concept <span class="badge badge-dark ml-1">1</span></div>
    <div class="small text-muted"><span class="text-primary">You and 1 connection</span> have given endorsements for this skill
    </div>
    </div>
    </div>
    <div class="d-flex align-items-center osahan-post-header p-3 border-bottom people-list">
    <div class="dropdown-list-image mr-3">
    <img class="rounded-circle" src="images/l8.png" alt="">
    </div>
    <div class="font-weight-bold">
    <div class="text-truncate">Digital Painting <span class="badge badge-danger ml-1">6</span></div>
    <div class="small text-muted"><span class="text-primary">Ask</span> has given an endorsement for this skill
    </div>
    </div>
    </div>
    <div class="d-flex align-items-center osahan-post-header p-3 people-list">
    <div class="dropdown-list-image mr-3">
    <img class="rounded-circle" src="images/l5.png" alt="">
    </div>
    <div class="font-weight-bold">
    <div class="text-truncate">Adobe Photoshop <span class="badge badge-info ml-1">3</span></div>
    <div class="small text-muted"><span class="text-primary">Julia Cox</span> has given an endorsement for this skill
    </div>
    </div>
    </div>
    </div>
    </div>
</aside>
<main class="col col-xl-7 order-xl-2 col-lg-12 order-lg-2 col-md-12 col-sm-12 col-12">
<div class="box shadow-sm rounded bg-white mb-3">
<div class="box-title border-bottom p-3">
<h6 class="m-0">About You (Bio)</h6>
</div>
<div class="box-body p-3">
<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
</p>
<p class="mb-0">Find the most qualified people in the most unexpected places. Information for applicants to consider when applying for local positions. The largest community on the web to find and list jobs that aren't restricted by commutes or a specific location.
</p>
</div>
</div>

<div class="box shadow-sm rounded bg-white mb-3">
<div class="box-title border-bottom p-3">
<h6 class="m-0">Education</h6>
</div>
<div class="box-body p-3 border-bottom">
<div class="d-flex align-items-top job-item-header pb-2">
<div class="mr-2">
<h6 class="font-weight-bold text-dark mb-0">Stanford University</h6>
<div class="text-truncate text-primary">Master’s programmes</div>
<div class="small text-gray-500">Oct 2020 - Present (4 year 7 month) </div>
</div>
<img class="img-fluid ml-auto mb-auto" src="images/e1.png" alt="">
</div>
<p class="mb-0">Find the most qualified people in the most unexpected places. Information for applicants to consider when applying for local positions.</p>
</div>
<div class="box-body p-3">
<div class="d-flex align-items-top job-item-header pb-2">
<div class="mr-2">
<h6 class="font-weight-bold text-dark mb-0">Harvard University</h6>
<div class="text-truncate text-primary">Maths and science education</div>
<div class="small text-gray-500">Oct 2020 - Present (4 year 7 month) </div>
</div>
<img class="img-fluid ml-auto mb-auto" src="images/e2.png" alt="">
</div>
<p class="mb-0">Wualified people in the most unexpected places. Information for applicants to consider when applying for local positions.</p>
</div>
</div>
</main>

</div>
</div>
</div>
@endsection