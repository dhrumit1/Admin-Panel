@extends('adminDashboard')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />

<style>
    .container {
        position: relative;
        padding-top: 105px;
    }

    .my-5 h3 {
        text-align: center;
    }

    .my-4 {
        text-align: center;
    }

    .g-3 {
        text-align: center;
    }

    .g-4 {
        text-align: center;
    }

    .g-5 {
        text-align: start;
    }

    .bg-secondary-soft {
        background-color: rgba(208, 212, 217, 0.1) !important;
    }

    .rounded {
        border-radius: 5px !important;
    }

    .py-5 {
        padding-top: 3rem !important;
        padding-bottom: 1rem !important;
    }

    .px-4 {
        padding-right: 1.5rem !important;
        padding-left: 1.5rem !important;
    }

    .file-upload .square {
        height: 100px;
        width: 100px;
        margin: auto;
        vertical-align: middle;
        border: 1px solid #e5dfe4;
        background-color: #fff;
        border-radius: 5px;
    }

    .text-secondary {
        --bs-text-opacity: 1;
        color: rgba(208, 212, 217, 0.5) !important;
    }

    .btn-success-soft {
        padding: 5px;
        color: #fff;
        background-color: #28a745;
        border-radius: 5px;
        margin-top: 10px;
    }

    .btn-danger-soft {
        padding: 5px;
        color: #fff;
        background-color: #dc3545;
        border-radius: 5px;
        margin-top: 10px;
    }

    .form-control {
        display: block;
        width: 30%;
        padding: 0.5rem 1rem;
        font-size: 0.9375rem;
        font-weight: 400;
        line-height: 1.5;
        color: #29292e;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #e5dfe4;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border-radius: 5px;
        -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        margin: auto;
    }

    .gap-3 {
        text-align: center;
    }

    h4{
        margin-bottom: 50px;
    }
</style>
@section('content')
<!-- <form action="#" method="post">
@csrf
@method('PUT') -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <!-- Page title -->
            <div class="my-5">
                <h3>Admin Profile</h3>
            </div>
            <!-- Form START -->
            <form class="file-upload" action="{{route('admin.update',$admin->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-5 gx-5">

                    <!-- <div class="col-xxl-4">
						<div class="bg-secondary-soft px-4 py-5 rounded">
							<div class="row g-3">
								<h4>Upload your profile photo</h4>
								<div class="text-center">

									<div class="square position-relative display-2 mb-3">
										<i class="fas fa-fw fa-user position-absolute top-50 start-50 translate-middle text-secondary"></i>
									</div>

									<input type="file" id="customFile" name="file" hidden="">
									<label class="btn btn-success-soft btn-block" for="customFile">Upload</label>
									<button type="button" class="btn btn-danger-soft">Remove</button>
								</div>
							</div>
						</div>
					</div> -->
                    <!-- Contact detail -->
                    <div class="col-xxl-8 mb-5 mb-xxl-0">
                        <div class="bg-secondary-soft px-4 py-5 rounded">
                            <div class="row g-4">
                                <h4 class="my-4">Change Details</h4>
                                <!-- First Name -->
                                <div class="col-md-6">
                                    <label class="form-label">UserName *</label>
                                    <input type="text" name="U_userName" class="form-control" value='{{$admin->UserName}}'>
                                </div>
                                <!-- Last name -->
                                <div class="col-md-6">
                                    <label class="form-label">Name *</label>
                                    <input type="text" name="U_name" class="form-control" value='{{$admin->Name}}'>
                                </div>
                                <!-- Mobile number -->
                                <div class="col-md-6">
                                    <label class="form-label">Mobile number *</label>
                                    <input type="text" name="U_mobileNumber" class="form-control" value='{{$admin->Mobile_No}}'>
                                </div>
                                <!-- Email -->
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Email *</label>
                                    <input type="email" name="U_email" class="form-control" value='{{$admin->Email}}'>
                                </div>
                            </div> <!-- Row END -->
                        </div>
                    </div>
                </div> <!-- Row END -->

                <!-- Social media detail -->
                <!-- <div class="row mb-5 gx-5"> -->
                <!-- change password -->
                <!-- <div class="col-xxl-6">
						<div class="bg-secondary-soft px-4 py-5 rounded">
							<div class="row g-5">
								<h4 class="my-4">Change Password</h4>
								<div class="col-md-6">
									<label for="exampleInputPassword1" class="form-label">Old password *</label>
									<input type="password" class="form-control" id="exampleInputPassword1">
								</div>
								<div class="col-md-6">
									<label for="exampleInputPassword2" class="form-label">New password *</label>
									<input type="password" class="form-control" id="exampleInputPassword2">
								</div>
								<div class="col-md-12">
									<label for="exampleInputPassword3" class="form-label">Confirm Password *</label>
									<input type="password" class="form-control" id="exampleInputPassword3">
								</div>
							</div>
						</div>
					</div> -->
                <!-- </div> -->
                <!-- button -->
                <div class="gap-3 d-md-flex justify-content-md-end text-center">
                    <!-- <button type="button" class="btn-success-soft">Delete profile</button> -->
                    <button type="submit" class="btn-success-soft">Update profile</button>
                </div>
            </form> <!-- Form END -->
        </div>
    </div>
</div>
<!-- </form> -->
@stop
