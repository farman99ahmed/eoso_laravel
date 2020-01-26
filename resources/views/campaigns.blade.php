@extends('layout.app', ['style' => 'profile-page'])

@component('asset.head')
    Campaigns - EOSO
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
            <h2 class="title">Paathshala</h2>
            <h5 class="description">Started in 2018, Pathshaala is an initiative by Each One Save One wherein the students of NMIMS Shirpur campus visit Anand Sadan Ashram every Sunday to teach and volunteer subjects like Mathematics, Science, English and Computer Science along with extra curricular activities such as sports, art workshop, speaking skills and personality buildup. Anand Sadan Ashram is a missionary school located in Shirpur, Maharashtra which is a residence centre for underprivileged tribal children with limited resources and facilities. Volunteers of EOSO solve their doubts and give them support in all possible ways so that they can make their dreams and aspirations come true. We  are not alone and they have all our help and guidance to help them through the process.</h5>

          </div>
        </div>
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">Cleanliness Drive / Oral Hygiene</h2>
            <h5 class="description">Our Prime Minister Mr. Narendra Modi initiated a program Swatchhta Abhiyan and it’s our duty as a citizen of India to maintain cleanliness around ourselves. Each One Save One team conducted a hygiene camp under Swachhata Hi Seva’18 drive for 600 hundred students at Waghadi Ashram School with an aim to spread awareness about self-hygiene through Nukkad natak, followed by visual aids that demonstrated and taught them the correct way of brushing teeth, hand wash and face wash.After which a small dental checkup was made to evaluate the dental hygiene of students at ashram school. Many children were found to have cavities and plaque. Each One Save One team provided all of them with a toothbrush and paste. And also educated them about how they could maintain their oral and personal hygiene. We have also conducted event which included cleaning of the campus and classrooms and places where the students lived and studied. and informed about the importance of cleaner surrounding requirement for once health and disease free future.</h5>

          </div>
        </div>          
    <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">Kadam</h2>
            <h5 class="description">Walking daily on an Indian terrain is very hard task for all of us. Well we cannot improve the roads overnight but what we can do is provide the necessary utilities for the underprivileged to walk down the trail of life effortlessly. By Kadam we aim to fulfil the need of having proper footwear for the tiny feet of our beloved children for each step they take in life, this is done by distributing shoes and any other necessity such as slippers or sandals given by hearty distributors and bring smiles on their faces.</h5>

          </div>
        </div>
        <!-- Carousel Card -->
        <div class="row d-flex justify-content-center">
          <div class="col-md-8 ">
            <div class="card card-raised card-carousel">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/img/activity/activity (1).jpg" alt="Gallery">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/activity/activity (2).jpg" alt="Gallery">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/activity/activity (3).jpg" alt="Gallery">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/activity/activity (4).jpg" alt="Gallery">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/activity/activity (5).jpg" alt="Gallery">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/activity/activity (6).jpg" alt="Gallery">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/activity/activity (7).jpg" alt="Gallery">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/activity/activity (8).jpg" alt="Gallery">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/activity/activity (9).jpg" alt="Gallery">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/activity/activity (10).jpg" alt="Gallery">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <i class="material-icons">keyboard_arrow_left</i>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <i class="material-icons">keyboard_arrow_right</i>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- End Carousel Card -->
      </div>


    </div>

  </div>
</div>


@endsection