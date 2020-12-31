@extends('layout.main2')

@section('section1')
<div class="py-5">
<div class="container">
<div class="row">

<aside class="col col-xl-3 order-xl-1 col-lg-6 order-lg-1 col-6">
<div class="box mb-3 shadow-sm rounded bg-white profile-box text-center">
<div class="py-4 px-3 border-bottom">
<img src="{{asset('public_theme/images/user/s4.png')}}" class="img-fluid mt-2 rounded-circle" alt="Responsive image">
<h5 class="font-weight-bold text-dark mb-1 mt-4">Gurdeep Osahan</h5>
<p class="mb-0 text-muted">UI / UX Designer</p>
</div>
<div class="container ml-5">
    <div class="row">
    <a class="font-weight-bold p-3 d-block" href="http://127.0.0.1:8000/edit" >
        <button class="btn  btn-lg btn-success" type="button"> Edit profile</button> </a>


</div>
</div>
</div>


</aside>
<main class="col col-xl-9 order-xl-2 col-lg-12 order-lg-2 col-md-12 col-sm-12 col-12">
<div class="box shadow-sm rounded bg-white mb-3">
<div class="box-title border-bottom p-3">
<h6 class="m-0">Applied jobs</h6>
</div>
<div class="box-body p-3">
<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
</p>
<p class="mb-0">Find the most qualified people in the most unexpected places. Information for applicants to consider when applying for local positions. The largest community on the web to find and list jobs that aren't restricted by commutes or a specific location.
</p>
</div>
</div>

</main>

</div>
</div>
</div>
@endsection