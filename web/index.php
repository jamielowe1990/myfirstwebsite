<?php
/*
 * A side project website to showcase all of the stuff that I get up to...
 * Travel, Photography and PHP coding.
 *
 */
class HomePage {

  public function navbar($shopping_cart) {

    $shopping_cart_html = NULL;
    if($shopping_cart) {
      $shopping_cart_html = '<li><a href="#"><span class="fa fa-shopping-cart"></span></a></li>';
    }

    $output = <<<HTML
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="http://www.jimbolowe.com/#about">ABOUT ME</a></li>
                <li><a href="http://www.jimbolowe.com/#photography">PHOTOGRAPHY</a></li>
                <li><a href="http://www.jimbolowe.com/#travel">TRAVEL</a></li>
                <li><a href="http://www.jimbolowe.com/#work">WORK & PROJECTS</a></li>
                <li><a href="http://www.jimbolowe.com/#contact">CONTACT</a></li>
                $shopping_cart_html
              </ul>
            </div>
          </div>
        </nav>
HTML;
    return $output;
  }

  public function wrap_html($content, $cart = false) {
    $page = <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Jamie Lowe</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="instafeed.js"></script>
  <style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;
      font-size: 20px;
      color: #111;
  }
  .container {
      padding: 80px 120px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 15px;
      width: 35%;
      height: 35%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  .carousel-inner img {
      -webkit-filter: grayscale(90%);
      filter: grayscale(90%); /* make all photos black and white */
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail p {
      margin-top: 15px;
      color: #555;
  }
  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }
  .modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 50px;
  }
  .nav-tabs li a {
      color: #777;
  }
  #googleMap {
      width: 100%;
      height: 400px;
  }
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 32px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
HTML;
 $page .= $this->navbar($cart);
 $page .= $content;
 $page .= <<<HTML
</body>
</html>
HTML;
    return $page;
  }

  public function view_gallery() {
    $content = <<<HTML
    Bye!
HTML;
    return $content;
  }

  public function homepage() {
    $content = <<<HTML
        <!-- Container - About Me -->
        <div id="about" class="container text-center">
          <h1>ABOUT ME</h1>
          <br>
          <div class="row">
            <div class="col-md-4">
               <h2><p class="lead">Travel. Photography. PHP.</p></h2>
               <h3><p><em>Welcome to my world.</em></p></h3>
            </div>
            <div class="col-md-8">
               <img src="me.jpg" class="rounded mx-auto d-block person" alt="Oops! Image Not Available" width="50" height="50">
            </div>
          </div>
        </div>

      <!-- Container - Photography -->
      <div id="photography" class="bg-1">
        <script type="text/javascript">
            var feed = new Instafeed({
                get: 'user',
                userId: '343288609',
                sortBy: 'most-recent',
                limit: 8,
                resolution: 'standard_resolution',
                accessToken: '343288609.1677ed0.65c66b68a5c74f1e9b8045634427086b',
                template: '<a href="{{link}}"><img src="{{image}}" style="padding:10px;" height="200" width="200"/></a>'
            });
            feed.run();
        </script>

        <div class="container">
          <h3 class="text-center">PHOTOGRAPHY</h3>
          <div id="intro">
              <p class="text-center">From time to time, I attempt to take a decent photo or two... Here's a few shots taken on recent outings</p>
          </div>
          <div class="row text-center" id="instafeed"></div>
          <div>
              <form method="post" action="index.php">
                  <input type="submit" id="view" name="view" value="View Gallery" class="btn btn-primary">
              </form>
          </div>
        </div>
      </div>

      <div id="travel" class="container">
          <h3 class="text-center">TRAVEL</h3>
          <p class="text-center">My first real travelling experience was back in 2012 when I visited Australia to fulfil my dream. I haven't stopped exploring the world since.</p>
          <div class="row text-center">
              <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Up Next...</a></li>
                <li><a data-toggle="tab" href="#menu1">The Philippines</a></li>
                <li><a data-toggle="tab" href="#menu2">Bali</a></li>
              </ul>

              <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                  <h2>Budapest, Hungary.</h2>
                  <p>???</p>
                </div>
                <div id="menu1" class="tab-pane fade">
                  <h2>March 2017</h2>
                  <p>???</p>
                </div>
                <div id="menu2" class="tab-pane fade">
                  <h2>June 2016</h2>
                  <p>???</p>
                </div>
              </div>
          </div>
      </div>

      <div id="work" class="bg-1">
          <div class="container">
            <h3 class="text-center">WORK & PROJECTS</h3>
            <p class="text-center">My current role as a CRM Solutions Consultant keeps me busy, busy, busy. However, in my spare time I like to build on my skills and try my hand at PHP.</p>
            <div class="row text-center">
                <div class="col-sm-4">
                  <div class="thumbnail">
                    <img src="sm.png" alt="Survey Monkey" width="100" height="100">
                    <p><strong>Survey Monkey</strong></p>
                    <p>2017</p>
                    <button class="btn">See More</button>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="thumbnail">
                    <img src="gtw.jpg" alt="GoTo Webinar" width="100" height="100">
                    <p><strong>GoTo Webinar</strong></p>
                    <p>2017</p>
                    <button class="btn">See More</button>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="thumbnail">
                    <img src="question.png" alt="Coming Soon..." width="100" height="100">
                    <p><strong>???</strong></p>
                    <p>2017</p>
                    <button class="btn">See More</button>
                  </div>
                </div>
            </div>
          </div>
      </div>

      <!-- Container (Contact Section) -->
      <div id="contact" class="container">
        <h3 class="text-center">CONTACT</h3>
        <div class="row">
          <div class="col-md-4">
            <p>Would you like to know more?</p>
            <p>Get in touch.</p>
            <p><span class="glyphicon glyphicon-map-marker"></span>Reading, United Kingdom</p>
          </div>
          <div class="col-md-8">
            <div class="row">
              <div class="col-sm-6 form-group">
                <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
              </div>
              <div class="col-sm-6 form-group">
                <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
              </div>
            </div>
            <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
            <br>
            <div class="row">
              <div class="col-md-12 form-group">
                <button class="btn pull-right" type="submit">Send</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Add Google Maps -->
      <div id="googleMap"></div>
      <script>
        function myMap() {
        var myCenter = new google.maps.LatLng(51.451457,-0.996048);
        var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
        var marker = new google.maps.Marker({position:myCenter});
        marker.setMap(map);
        }
      </script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7XkZ3567WIF2pFd6GDVFTKlQBv7zShzY&callback=myMap"></script>

      <!-- Footer -->
      <footer class="text-center">
        <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="Home">
          <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
      </footer>

      <script>
      $(document).ready(function(){
        // Initialize Tooltip
        $('[data-toggle="tooltip"]').tooltip();

        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

          // Make sure this.hash has a value before overriding default behavior
          if (this.hash !== "") {
            event.preventDefault();  // Prevent default anchor click behavior

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 900, function(){

              // Add hash (#) to URL when done scrolling (default click behavior)
              window.location.hash = hash;
            });
          } // End if
        });
      })
      </script>
HTML;
    return $content;
  }

  public function run() {

    if(!isset($_POST['view'])) {
      $page = $this->homepage();
      $cart = false;
    }
    else {
      $page = $this->view_gallery();
      $cart = true;
    }
    return $this->wrap_html($page, $cart);
  }
}
$website = new HomePage();
echo $website->run();
?>