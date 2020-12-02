@extends('layouts.pagelayout')
@section('content')
   <div class="container">
       <h1 class="mt-4">User Profile</h1>
       <!-- Default form login -->
        <form class="border border-light p-5 mt-5" action="#!">
            <label for="">User name</label>
            <input type="text" id="defaultLoginFormEmail" class="form-control mb-4">
            <label for="">Email</label>
            <input type="text" id="defaultLoginFormEmail" class="form-control mb-4">
            
            <label for="">Photo</label>
            <input type="file" id="defaultLoginFormPassword" class="form-control mb-4">
            <label for="">Old name</label>
            <input type="password" id="defaultLoginFormEmail" class="form-control mb-4">
            <label for="">New name</label>
            <input type="password" id="defaultLoginFormEmail" class="form-control mb-4">
            
            <!-- Add post button -->
            <button class="btn blue btn-block my-4" type="submit">Add post</button>

        </form>
        <!-- Default form login -->
   </div>
@endsection