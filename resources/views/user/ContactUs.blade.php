@extends('layouts.pagelayout')
@section('content')
   <div class="container-fluid">
       <h1 class="mt-4">Contace Us</h1>
       <div class="row">
           <div class="col-md-6">
           <!-- Image here-->
           </div>
           <div class="col-md-6">
             <!-- Default form login -->
            <form class="border border-light p-5 mt-5" action="#!">
                <label for="">User name</label>
                <input type="text" id="defaultLoginFormEmail" class="form-control mb-4">
                <label for="">Email</label>
                <input type="email" id="defaultLoginFormPassword" class="form-control mb-4">
                <label for="">Your Message</label>
                <textarea name="" id="" cols="30" rows="10" class="form-control mb-4"></textarea>
                <!-- Add post button -->
                <button class="btn blue btn-block my-4" type="submit">send message</button>

            </form>
            <!-- Default form login -->
           </div>
       </div>
   </div>
@endsection