@extends('layouts.pagelayout')
@section('content')
   <div class="container-fluid">
       <h1 class="mt-4">Contace Us</h1>
       <div class="row">
           <div class="col-md-6">
           <!-- Image here-->
           <iframe class=" mt-5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d488799.48747363617!2d95.9013664492274!3d16.838952475004277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1949e223e196b%3A0x56fbd271f8080bb4!2sYangon!5e0!3m2!1sen!2smm!4v1606924120562!5m2!1sen!2smm" width="600" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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