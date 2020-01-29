@extends('layout.app', ['style' => 'profile-page'])

@component('asset.head')
    Store - EOSO
@endcomponent

@section('content')


<div class="page-header header-filter" data-parallax="true" style="background-image: url('assets/img/header2.jpg');">
</div>
<div class="main main-raised">
  <div class="profile-content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto">
          <div class="profile">
            <div class="avatar">
              <img src="assets/img/team/pintu.jpg" alt="Circle Image" class="img-raised rounded-circle img-fluid">
            </div>
            <div class="name">
              <h3 class="title">Pintu</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="description text-center">
        <p>Just like every other child Pintu also has many dreams, yet his life started a little off track than others. He was abandoned at a railway station in Kerala by his parents and somehow ended up at a specially abled school in Shirpur. He discovered his passion for art and started painting with the minimal amount of resources he was provided with. He wishes to study further and become a renowned painter in future. One constant thing which Pintu has maintained throughout his life is a smile on his face even when nothing was going right. We appreciate Pintu always for maintaining the spirit of moving forward. 
Some of Pintu’s beautiful art work is shown below, if you wish to support Pintu for achieving his dreams then you can buy any of his art work or donate in kind or monetarily. 
</p>
      </div>
      <div class="tab-content tab-space">
        <div class="row d-flex justify-content-center">
          <button onclick="location.href='#'" class="learn-more">
            <span class="circle">
              <span class="icon arrow"></span>
            </span>
            <span class="button-text">Buy Now</span>
          </button>
        </div>
        <div class="tab-pane active text-center gallery">
          <div class="row">
            <div class="col-md-3 ml-auto">
              <strong>Art# 1</strong><img src="assets/img/shop/pintu (1).JPG" class="img-raised rounded">
              <strong>Art# 2</strong><img src="assets/img/shop/pintu (2).JPG" class="img-raised rounded">
              <strong>Art# 3</strong><img src="assets/img/shop/pintu (3).JPG" class="img-raised rounded">
              <strong>Art# 4</strong><img src="assets/img/shop/pintu (4).JPG" class="img-raised rounded">
              <strong>Art# 5</strong><img src="assets/img/shop/pintu (5).JPG" class="img-raised rounded">
              <strong>Art# 6</strong><img src="assets/img/shop/pintu (6).JPG" class="img-raised rounded">
              <strong>Art# 7</strong><img src="assets/img/shop/pintu (7).JPG" class="img-raised rounded">
              <strong>Art# 8</strong><img src="assets/img/shop/pintu (8).JPG" class="img-raised rounded">
            </div>
            <div class="col-md-3">
              <strong>Art# 9</strong><img src="assets/img/shop/pintu (9).JPG" class="img-raised rounded">
              <strong>Art# 10</strong><img src="assets/img/shop/pintu (10).JPG" class="img-raised rounded">
              <strong>Art# 11</strong><img src="assets/img/shop/pintu (11).JPG" class="img-raised rounded">
              <strong>Art# 12</strong><img src="assets/img/shop/pintu (12).JPG" class="img-raised rounded">
              <strong>Art# 13</strong><img src="assets/img/shop/pintu (13).JPG" class="img-raised rounded">
              <strong>Art# 14</strong><img src="assets/img/shop/pintu (14).JPG" class="img-raised rounded">
              <strong>Art# 15</strong><img src="assets/img/shop/pintu (15).JPG" class="img-raised rounded">
            </div>
            <div class="col-md-3 mr-auto">
              <strong>Art# 16</strong><img src="assets/img/shop/pintu (16).JPG" class="img-raised rounded">
              <strong>Art# 17</strong><img src="assets/img/shop/pintu (17).JPG" class="img-raised rounded">
              <strong>Art# 18</strong><img src="assets/img/shop/pintu (18).JPG" class="img-raised rounded">
              <strong>Art# 19</strong><img src="assets/img/shop/pintu (19).JPG" class="img-raised rounded">
              <strong>Art# 20</strong><img src="assets/img/shop/pintu (20).JPG" class="img-raised rounded">
              <strong>Art# 21</strong><img src="assets/img/shop/pintu (21).JPG" class="img-raised rounded">
              <strong>Art# 22</strong><img src="assets/img/shop/pintu (22).JPG" class="img-raised rounded">
              <strong>Art# 23</strong><img src="assets/img/shop/pintu (23).JPG" class="img-raised rounded">
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
</div>  

@endsection