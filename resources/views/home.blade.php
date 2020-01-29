@extends('layout.app', ['style' => 'landing-page'])

@component('asset.head')
    Each One Save One
@endcomponent

@section('content')



  <div class="page-header header-filter" data-parallax="true" style="background-image: url('assets/img/header.jpg')">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="title">Each One Save One</h1>
          <h3><strong> <a class="typewrite" data-period="2000" data-type='[ "#spreadingsmiles" ]'>

                #spreadingsmiles</a></strong>
          </h3>
          <br>
          <a href="https://youtu.be/jQ0KW8gPuK0" target="_blank" class="btn btn-danger btn-raised btn-lg">
            <i class="fa fa-play"></i> Watch video
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="col-md-8 ml-auto mr-auto">
        <div class="section text-center">
          <h2 class="title">What is EOSO </h2>
          <h5 class="description">Each One Save One is a non-profitable social forum of NMIMS, MPTP Shirpur Campus. Our aim is to bring smiles on innocent faces and motivate the underprivileged for bright future of our country.

          </div>
        <div class="section text-center">
          <h2 class="title">Vison and Mision </h2>
          <h5 class="description"><strong>Our Vision: </strong>Our work aims to ensure that marginalized and
            underprivileged get their share of
            opportunities. We believe that every individual should receive basic amenities for sustenance, and they may
            go
            on to become an active and contributing member of the society, with bright futures
            ahead.</br></br><strong>Our
              Mission: </strong>To form a
            foundation which socially progresses to provides a platform for an individual to raise their voice, gain
            their
            rights and build a life with full potential and revert back the same.</h5>

            <div class="row">
              <div class="col-md-12 ml-auto mr-auto">
                <h2 class="title">Message From Our Mentor</h2>
                <div class="col-md-3 ml-auto mr-auto">
                  <img src="assets/img/pd.jpeg" alt="Sample Activity" class="img-raised rounded-circle img-fluid">
                </div></br>
                <h5 class="description blockquote undefined text-justify">Each One Save One is an organization which has always made me realize how important it is for each one of us to do our part as an individual for the betterment of the society. Being a part of a society it gives each and everyone of us an opportunity to make it sustainable. We ought to provide an impact to the society by giving back the best we can. Every step we have taken so far has made us learn so much about the limitless opportunities. Each One Save One has provided the team and me a fantastic chance to keep on learning and growing each and everyday. </br></br>
                  <strong>Dr. Payal Dande</strong></h5>
      
              </div>
            </div>
        </div>
      </div>
      <div class="col-md-12 ml-auto mr-auto"></div>
      <div class="team">
        <div class="row d-flex justify-content-center">


          <div class="col">
            <div class="team-player">
              <div class="card card-plain">
                <div class="col-md-6 ml-auto mr-auto">
                  <img src="assets/img/activity/1.jpg" alt="Sample Activity" class="img-raised rounded img-fluid">
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="team-player">
              <div class="card card-plain">
                <div class="col-md-6 ml-auto mr-auto">
                  <img src="assets/img/activity/2.jpg" alt="Sample Activity" class="img-raised rounded img-fluid">
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="section text-center">


      <!---
      <div class="features">
        <div class="row">
          <div class="col-md-4">
            <div class="info">
              <div class="icon icon-info">
                <i class="material-icons">question_answer</i>
              </div>
              <h4 class="info-title">EOSO FACT 1</h4>
              <p>Divide details about your product or agency work into parts. Write a few lines about each one. A
                paragraph describing a feature will be enough.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info">
              <div class="icon icon-success">
                <i class="material-icons">question_answer</i>
              </div>
              <h4 class="info-title">EOSO FACT 2</h4>
              <p>Divide details about your product or agency work into parts. Write a few lines about each one. A
                paragraph describing a feature will be enough.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info">
              <div class="icon icon-danger">
                <i class="material-icons">question_answer</i>
              </div>
              <h4 class="info-title">EOSO FACT 3</h4>
              <p>Divide details about your product or agency work into parts. Write a few lines about each one. A
                paragraph describing a feature will be enough.</p>
            </div>
          </div>
        </div>
      </div>
        --->

    </div>
  </div>
  </div>



@endsection