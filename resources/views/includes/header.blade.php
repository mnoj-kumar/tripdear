<div class="loading" style="display: flex; justify-content: center; width: 100%;height: 100%;background: white; position: fixed; z-index: 10;">
  <img class="loaderImg" style="width:120px; align-self: center" src="{{ asset('assets/images/loader.gif') }}" alt="Loading">
</div>  
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon.png">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="assets/css/style.css">

<style type="text/css">
  
img.t-logo {
  width: 200px;
}
/*=========== navigation ===========*/
.trip-bust {
  background-color: #003d70;
  border-bottom: 1px solid #f9c922;
  border-top: 3px solid #f9c922;
  z-index: 9;
}
.trip-bust .dropdown-menu.active {
  display: block;
}
.trip-bust .dropdown-menu.active.show {
  display: none;
}
.trip-bust .navbar-toggler:focus {
  outline: 0;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  -ms-box-shadow: none;
  -o-box-shadow: none;
  box-shadow: none;
}
.trip-bust .offcanvas-navbar .nav-item .nav-link {
  padding: 13px 15px !important;
}
.trip-bust .offcanvas-navbar .cart-quantity {
  position: absolute;
  top: 3px;
  right: 0;
  font-size: 13px;
}
.trip-bust .offcanvas-navbar .dropdown-menu {
  left: auto;
  right: 0;
  width: 230px;
  padding: 0;
}
.trip-bust .offcanvas-navbar .dropdown-menu li {
  border-bottom: 1px solid #dddddd;
  padding: 14px;
}

.trip-bust .offcanvas-navbar .dropdown-toggle::after {
  display: none;
}
.trip-bust .price {
  font-weight: bold;
  font-size: 18px;
  color: #7AA93C;
}
.trip-bust .product-dropdown-list li a {
  display: block;
  padding: 10px 0;
  border-bottom: 1px dotted #dddddd;
}
.trip-bust .product-dropdown-list li:last-child a {
  border-bottom: none;
  padding-bottom: 0;
}
.trip-bust .dropdown-item {
  padding: 10px;
  border-bottom: 1px solid #dddddd;
}
.trip-bust .dropdown-item:focus, .trip-bust .dropdown-item:hover {
  background-color: #265196;
  color: #ffffff;
}
.trip-bust .carousel-control-next, .trip-bust .carousel-control-prev {
  opacity: 1;
  color: #ffffff;
}
.trip-bust .carousel-control-next:hover, .trip-bust .carousel-control-prev:hover {
  background-color: transparent !important;
}
.trip-bust .carousel {
  padding-bottom: 10px;
}
.trip-bust .dropdown-heading {
  padding-top: 10px;
}
.trip-bust .navbar-brand {
  color: #265196;
  font-size: 24px;
  font-weight: bold;
}
.trip-bust .iconbar {
  color: #f9f9f9;
}
.trip-bust .product-dropdown-menu .product-heading {
  color: #265196;
  font-size: 20px;
  font-weight: 600;
}
.trip-bust .product-dropdown-menu ul li {
  border-bottom: 1px solid #dddddd;
}
.trip-bust .product-dropdown-menu ul li:last-child {
  border-bottom: none;
}
.trip-bust .product-dropdown-menu ul li a {
  padding: 10px;
  display: block;
}
.trip-bust .product-dropdown-menu ul li a:hover {
  background-color: #265196;
  color: #ffffff;
}
.trip-bust .navbar-nav .nav-item .nav-link {
  color: #ffffff;
  padding: 7px 10px;
  font-size: 17px;
}
.trip-bust .dropdown-menu {
  border: none;
  background-color: #ffffff !important;
  font-size: 14px;
}
.trip-bust .dropdown-menu .nav-item .nav-link {
  color: #1c1c1c;
  padding: 6px 0;
}
/*--------End of navigation-------*/

/*-------- media queries --------*/
@media screen and (min-width: 992px) {
  .navbar {
    padding-top: 0px;
    padding-bottom: 0px;
  }
  .navbar .dropdown-menu {
    border-radius: 0;
    border: none;
/*  -webkit-box-shadow: 2px 3px 10px rgba(0, 0, 0, 0.22);
    -moz-box-shadow: 2px 3px 10px rgba(0, 0, 0, 0.22);
    -ms-box-shadow: 2px 3px 10px rgba(0, 0, 0, 0.22);
    -o-box-shadow: 2px 3px 10px rgba(0, 0, 0, 0.22);
    box-shadow: 2px 3px 10px rgba(0, 0, 0, 0.22);  */
    display: block;
    left: 0;
    opacity: 0;
    padding: 0;
    right: 0;
    top: 96%;
    transform-origin: 0 0;
    -webkit-transform: rotateY(75deg);
    -moz-transform: rotateY(75deg);
    -ms-transform: rotateY(75deg);
    -o-transform: rotateY(75deg);
    transform: rotateY(75deg);
    -webkit-transition: 0.3s linear all;
    -moz-transition: 0.3s linear all;
    -ms-transition: 0.3s linear all;
    -o-transition: 0.3s linear all;
    transition: 0.3s linear all;
    visibility: hidden;
    width: 100%;
  }
  .navbar .dropdown {
    position: static;
  }
  .navbar .dropdown:hover > .dropdown-menu {
    opacity: 1;
    transform: none;
    -webkit-transition: 0.3s linear all;
    -moz-transition: 0.3s linear all;
    -ms-transition: 0.3s linear all;
    -o-transition: 0.3s linear all;
    transition: 0.3s linear all;
    visibility: visible;
  }
  .navbar .dropdown-submenu {
    position: relative;
  }
  .navbar .dropdown-submenu .dropdown-menu {
    left: 100%;
    top: 0;
    -webkit-transform: none;
    -moz-transform: none;
    -ms-transform: none;
    -o-transform: none;
    transform: none;
  }
  .navbar .dropdown-submenu:hover > .dropdown-menu {
    opacity: 1;
    visibility: visible;
    -webkit-transition: 0.3s linear all;
    -moz-transition: 0.3s linear all;
    -ms-transition: 0.3s linear all;
    -o-transition: 0.3s linear all;
    transition: 0.3s linear all;
  }
}
@media screen and (max-width: 992px) {
  #navbarSupportedContent {
    position: absolute;
    top: 52px;
    background-color: #023e61;
    padding-left: 20px;
    padding-right: 20px;
    padding-bottom: 20px;
    left: -20px;
    right: -20px;
    height: auto !important;
    overflow-y: auto;
  }
  .trip-bust .navbar-container {
    justify-content: flex-start;
    position: relative;
  }
  .trip-bust .offcanvas-navbar {
    position: absolute;
    right: 0;
    top: -3px;
    flex-direction: unset;
  }
  .trip-bust .navbar-collapse .navbar-nav .nav-item .nav-link {
    padding: 10px 0;
    border-bottom: 1px solid #dddddd;
    font-size: 14px;
  }
  .trip-bust .navbar-collapse .navbar-nav .nav-item .nav-link:last-child {
    /*border-bottom: none;*/
    border-bottom: 1px solid #9cc0d5;
  }
  .main-wrapper .content-wrapper h1 {
    font-size: 30px;
  }
  .main-wrapper .content-wrapper p {
    font-size: 16px;
  }
}
.box_shadow{
  border-top: 2px solid #a4c2db;
  -webkit-box-shadow: 2px 3px 10px rgba(0, 0, 0, 0.22);
  -moz-box-shadow: 2px 3px 10px rgba(0, 0, 0, 0.22);
  -ms-box-shadow: 2px 3px 10px rgba(0, 0, 0, 0.22);
  -o-box-shadow: 2px 3px 10px rgba(0, 0, 0, 0.22);
  box-shadow: 2px 3px 10px rgba(0, 0, 0, 0.22);
}
@media (max-width: 768px) {
  a.navbar-brand img {
    width: 150px;
  }
}
a.nav-link.log-sig {
  padding: 6px 15px !important;
  background: #f9c922;
  margin: 0px 10px;
  border-radius: 20px;
  cursor: pointer;
  border: none;
  text-align: center;
}
/*-----//End of header media queries ------*/
</style>

</head>
<body>
  <nav class="navbar navbar-expand-lg trip-bust">
    <div class="container navbar-container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars iconbar"></i>
      </button>
      <a class="navbar-brand" href="/"><img src="assets/images/logo.svg" class="t-logo" alt="TripBust"></a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a href="/" class="nav-link"><i class="fa fa-home orange-color"></i> Home</a>
          </li>
          <li class="nav-item">
            <a href="/flights" class="nav-link"><i class="fa fa-plane"></i> Flights</a>
          </li>
          <li class="nav-item">
            <a href="/routes" class="nav-link"><i class="fa fa-map-signs"></i> Routes</a>
          </li>
          <li class="nav-item">
            <a href="/explore" class="nav-link"><i class="fa fa-map-marker"></i> Explore</a>
          </li>
          <!-- <li class="nav-item">
            <a href="/deals" class="nav-link"><i class="fa fa-users"></i> Deals</a>
          </li> -->
          <li class="nav-item position-relative mt-2 mt-md-0">
            <a class="nav-link log-sig" href="/signup">SignUp</a>
          </li>
        </ul>
      </div>
      <ul class="navbar-nav offcanvas-navbar mr-auto d-md-block d-none">
        <li class="nav-item">
          <div class="media">
            <div class="media-body">
              <h4 class="mt-0 mb-0 orange-color"><strong><a href="tel:(888) 481-1227" class="orange-color" >(888) 481-1227</a></strong></h4>
              <p class="font-12 mb-0 text-white">Book Online or Call Us 24/7</p>
            </div>
            <img src="assets/images/tfn-support.png" class="ml-2" alt="...">
          </div>
        </li>
      </ul>
    </div><!-- container -->
  </nav>

