@extends('includes.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>tripdear.com | Contact us</title>

<style type="text/css">
  section.banner-section{
  padding: 50px 0px;
  background-color: #ffffff;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  position: relative;
  min-height:200px;
}
.black-overlay {
  background-color: #006fa4c4;
  height: 100%;
  width: 100%;
  position: absolute;
  top: 0px;
  left: 0px;
}
/*--------/banner-section----------*/
section.form-section{
  padding: 50px 0px;
  background-color: #ffffff;
  min-height: 580px;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}
.contact-info {
  padding: 15px;
  background-color: #fff;
  box-shadow: 0px 0px 10px #0000002b;
  border-top: 3px solid #0572c9;
  border-bottom: 4px solid #f9bf08;
  border-radius: 20px;
}
</style>

@include('includes.header')

  <section class="banner-section" style="background-image: url(assets/images/banners.jpg);">
    <div class="black-overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-12">
          <h1 class="text-white"><b>Contact Us</b></h1>
        </div>
      </div><!--/row-->
    </div><!--/container-->
  </section>
  <!--/banner-section-->

  <section class="form-section" style="background-image: url(assets/images/contact-us2.svg);">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-12">
          <div class="contact-info">
            <form action="/contact-us" method="post">
				@csrf
              <div class="row">
                <div class="col-md-12 col-12 mb-3">
                  <input class="form-control form-control-lg" type="text" name="name" placeholder="Name" autocomplete="off" required>
                </div>
                <div class="col-md-12 col-12 mb-3">
                  <input class="form-control form-control-lg" type="email" name="email" placeholder="Email" autocomplete="off" required>
                </div>
                <div class="col-md-12 col-12 mb-3">
                  <input class="form-control form-control-lg" type="text" name="phone" placeholder="Phone" autocomplete="off" required>
                </div>
                <div class="col-md-12 col-12 mb-3">
                   <textarea class="form-control form-control-lg" id="" rows="4" name="msg" placeholder="Message" autocomplete="off" required></textarea>
                </div>
                <div class="col-md-12 col-12 mb-3">
                  <button class="blue-btn-lg btn-block">Submit</button>
                </div>
              </div>
            </form>
          </div><!--/contact-info-->
        </div>
      </div><!--/row-->
    </div><!--/container-->
  </section>
  <!--/form-section-->


  @include('includes.footer')