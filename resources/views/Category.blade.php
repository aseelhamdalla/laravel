@extends('layout.dashbord_main')

@section('contant')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                        <div class="card-header">Manage Category</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Create Category</h3>
                            </div>
                            <hr>
                            <form action="/Category/create" method="post" enctype="multipart/form-data">
                                @csrf


                                <div class="form-group">


                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">job Category</label>
                                        <input id="cc-pament" name="job_cat" type="text" class="form-control">
                                    </div>




                                    {{-- <select name="job_cat" class="form-control">
                                        <option value="">select job Category</option>
                                        <option>Programming</option>
                                        <option>Web development</option>
                                        <option>Computer Systems</option>
                                        <option>Network Engineering</option>
                                        <option>IT Security – Cyber Security</option>
                                        <option>Hardware and technical support</option>
                                    </select> --}}



                                </div>

                            </div>
                            <div>
                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" name="submit">
                                    <span id="payment-button-amount">Create</span>
                                </button>
                            </div>
                        </form>
                </div>
            </div>
            <div class="row m-t-30">
                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3">
                            <thead>
                                <tr>
                                    <th>job_cat_id</th>
                                    <th>job_id</th>
                                    <th>job_Category</th>
                                    <th>Edit</th>
                                    <th>Delete</th>


                                </tr>
                            </thead>
                             <tbody>
                              <tr>

                             @foreach($categories as $categorie )
                            <td>{{$categorie->job_cat_id}}</td>
                            <td>{{$categorie->job_cat}}</td>
                           <td>{{$categorie->job_Category}}</td>

                          <td><a href="/Category/{{$categorie->job_cat_id}}/edit"  class='btn btn-primary'>Edit</a></td>
                       <td><a href="/Category/{{$categorie->job_cat_id}}/delete" class='btn btn-danger'>Delete</a></td>
                           </tr>
                           @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE-->
@endsection

