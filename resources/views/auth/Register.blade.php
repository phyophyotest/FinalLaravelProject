@extends('layouts.authlayout')
@section('content')
    <div class="container">
        <div class="col-md-4 offset-4">
            <!-- Material form register -->
<div class="card mt-4">

    <h5 class="card-header blue white-text text-center py-4">
        <strong>Register</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0 ">

        <!-- Form -->
        <form class="text-center" style="color: #757575;" action="#!">

            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormFirstName" class="form-control">
                        <label for="materialRegisterFormFirstName">User name</label>
                    </div>
                </div>
            </div>

            <!-- E-mail -->
            <div class="md-form mt-0">
                <input type="email" id="materialRegisterFormEmail" class="form-control">
                <label for="materialRegisterFormEmail">E-mail</label>
            </div>

            <!-- Password -->
            <div class="md-form">
                <input type="password" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
                <label for="materialRegisterFormPassword">Password</label>
                <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                   
                </small>
            </div>
            <label for="">Select Your Profile Picture</label>
            <div class="md-form">
                <input type="file" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
                
            </div>
            <!-- Sign up button -->
            <button class="btn blue white-text btn-block my-4 waves-effect z-depth-0" type="submit">Register</button>
            <!-- Register -->
            <p>
                <a href="{{route('login')}}">Already Register</a>
            </p>
        </form>
        <!-- Form -->

    </div>

</div>
<!-- Material form register -->
        </div>
    </div>
@endsection