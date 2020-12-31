@extends('layout.main2')

@section('section1')

<div class="py-5">
<div class="container">
<div class="row">

<aside class="col-md-4">
<div class="box mb-3 shadow-sm rounded bg-white profile-box text-center">
<div class="py-4 px-3 border-bottom">
<img src="images/user/s4.png" class="img-fluid mt-2 rounded-circle" alt="Responsive image">
<h5 class="font-weight-bold text-dark mb-1 mt-4">Gurdeep Osahan</h5>
<p class="mb-0 text-muted">UI / UX Designer</p>
</div>
<div class="p-4">
<label data-toggle="tooltip" data-placement="top" data-original-title="Upload New Picture" class="btn btn-info m-0" for="fileAttachmentBtn">
<i class="mdi mdi-image"></i> Upload
<input id="fileAttachmentBtn" name="file-attachment" type="file" class="d-none">
</label>
<button data-toggle="tooltip" data-placement="top" data-original-title="Delete" type="submit" class="btn btn-danger"><i class="mdi mdi-delete"></i> Delete</button>
</div>
</div>
<div class="shadow-sm rounded bg-white mb-3">
<div class="box-title border-bottom p-3">
<h6 class="m-0">About</h6>
<p class="mb-0 mt-0 small">Tell about yourself in two sentences.
</p>
</div>
<div class="box-body">
<div class="p-3">
<div class="form-group mb-4">
<label class="mb-1">BIO</label>
<div class="position-relative">
<textarea class="form-control" rows="4" name="text" placeholder="Enter Bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor :)</textarea>
</div>
</div>

</div>
</div>
</div>
<div class="shadow-sm rounded bg-white mb-3">
<div class="box-title border-bottom p-3">
<h6 class="m-0">Social profiles</h6>
<p class="mb-0 mt-0 small">Add elsewhere links to your profile.
</p>
</div>
<div class="box-body">
<div class="p-3">
<div class="position-relative icon-form-control mb-2">
<i class="mdi mdi-instagram position-absolute text-muted"></i>
 <input placeholder="Add Instagram link" type="text" class="form-control">
</div>
<div class="position-relative icon-form-control mb-2">
<i class="mdi mdi-facebook position-absolute text-muted"></i>
<input placeholder="Add Facebook link" type="text" class="form-control">
</div>
<div class="position-relative icon-form-control mb-2">
<i class="mdi mdi-twitter position-absolute text-muted"></i>
<input placeholder="Add Twitter link" type="text" class="form-control">
</div>
</div>
</div>
</div>
</aside>
<main class="col-md-8">
<div class="shadow-sm rounded bg-white mb-3">
<div class="box-title border-bottom p-3">
<h6 class="m-0">Add New Job Post</h6>

</div>
<div class="box-body p-3">
<form class="js-validate" novalidate="novalidate">
<div class="row">



<div class="col-sm-6 mb-2">
<div class="js-form-message">
<label id="usernameLabel" class="form-label">
Job Tittle
<span class="text-danger">*</span>
</label>
<div class="form-group">
<input type="text" class="form-control" name="job_title" value="" placeholder="Enter the job title" aria-label="Enter the job title" required="" aria-describedby="usernameLabel" data-msg="Please enter the job title." data-error-class="u-has-error" data-success-class="u-has-success">
</div>
</div>
</div>

<div class="col-sm-6 mb-2">
<div class="js-form-message">
<label id="nameLabel" class="form-label">
Job Description
<span class="text-danger">*</span>
</label>
<div class="form-group">
<input type="textarea" class="form-control" name="job_desc" value="" placeholder="Enter the Job Description" aria-label="Enter the Job Description" required="" aria-describedby="nameLabel" data-msg="Please Enter the Job Description." data-error-class="u-has-error" data-success-class="u-has-success">
</div>
</div>
</div>


</div>
<div class="row">

<div class="col-sm-6 mb-2">
<div class="js-form-message">
<label id="phoneNumberLabel" class="form-label">
Job Category
<span class="text-danger">*</span>
</label>
<div class="form-group">
<select class="form-control" data-msg="Please select Job Category." data-error-class="u-has-error" data-success-class="u-has-success">
<option value="">Select Category</option>
<option value="birthMonthSelect1">Back end </option>
<option value="birthMonthSelect2">Front end</option>
<option value="birthMonthSelect3">UX/UI</option>
</select>
</div>
</div>
</div>

<div class="col-sm-6 mb-2">
<div class="js-form-message">
<label id="websiteLabel" class="form-label">
Company Name
<span class="text-danger">*</span>
</label>
<div class="form-group">
<input class="form-control" type="text" name="company_name" value="" placeholder="Enter company name" aria-label="Enter company name" required="" aria-describedby="websiteLabel" data-msg="Password enter a valid website" data-error-class="u-has-error" data-success-class="u-has-success">
</div>
</div>
</div>







</div>
<div class="row">


<div class="col-sm-6 mb-2">
<div class="js-form-message">
<label id="organizationLabel" class="form-label">
City	
<span class="text-danger">*</span>
</label>
<div class="form-group">
<input type="text" class="form-control" name="job_city" value="" placeholder="Enter the Job City " aria-label="Enter the Job City" required="" aria-describedby="organizationLabel" data-msg="Please enter job city" data-error-class="u-has-error" data-success-class="u-has-success">
</div>
</div>
</div>

<div class="col-sm-6 mb-2">
<div class="js-form-message">
<label id="phoneNumberLabel" class="form-label">
Phone Number
<span class="text-danger">*</span>
</label>
<div class="form-group">
<input class="form-control" type="tel" name="phoneNumber" value="" placeholder="Enter your phone number" aria-label="Enter your phone number" required="" aria-describedby="phoneNumberLabel" data-msg="Please enter a valid phone number" data-error-class="u-has-error" data-success-class="u-has-success">
</div>
</div>
</div>



</div>

<div class="mb-3 text-right">
<button type="submit" class="btn btn-outline-success">Cancel</button>
<button type="submit" class="btn btn-success">Submit</button>
</div>
</main>
</div>
</div>
</div>
+
@endsection