@extends('layout.dashbord_main')
@section('contant')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                        <div class="card-header">Manage Admin</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Create Admin</h3>
                            </div>
                            <hr>
                            <form action="/hangout/cteate" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Admin Fullname</label>
                                    <input id="cc-pament" name="admin_fullname" type="text" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Admin Email</label>
                                    <input id="cc-pament" name="admin_email" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Admin Number</label>
                                    <input id="cc-pament" name="admin_Number" type="text" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Admin Password</label>
                                    <input id="cc-pament" name="admin_password" type="password" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Admin Image</label>
                                    <input id="cc-pament" name="admin_image" type="file" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Insurance</label>
                                    <select name="insurance" class="form-control">
                                        <option value="">select insurance</option>
                                        <option value="0">false</option>
                                        <option value="1">true</option>
                                    </select>

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
                                    <th>#</th>
                                    <th>Full Name</th>
                                    <th> Email</th>
                                    <th>Number</th>
                                    <th>Image</th>
                                    <th>Insurance</th>
                                     <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            
                        </table>
                    </div>
                    <!-- END DATA TABLE-->
@endsection
