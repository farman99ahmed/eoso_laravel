@extends('layout.app', ['style' => 'profile-page'])

@component('asset.head')
    Contact Us - EOSO
@endcomponent

@section('content')


<div class="page-header header-filter " data-parallax="true" style="background-image: url('assets/img/header2.jpg');">
</div>
<div class="main main-raised">
  <div class="profile-content">
    <div class="container">
      <div class="section text-center">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">Contact Us</h2>
            <h5 class="description"><strong>SVKMs NMIMS </br>Mukesh Patel Technology Park </br>Shirpur, Distt. Dhule
                </br>Maharashtra, 425405</br>
                <i class="fa fa-phone" aria-hidden="true"> +91 9876543210</i></br>
                <i class="fa fa-envelope" aria-hidden="true"> eachonesaveone.eoso@gmail.com</i></br></strong>

          </div>
        </div>
        </br>
        <div class="map-responsive">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3717.64423984104!2d74.84090541424983!3d21.285545484339785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x17fd878d62441fe6!2sSVKM&#39;s%20NMIMS%20University%20MPTP%20Shirpur%20Campus!5e0!3m2!1sen!2sin!4v1571025044337!5m2!1sen!2sin"
            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>

      </div>


    </div>

  </div>
</div>

@endsection