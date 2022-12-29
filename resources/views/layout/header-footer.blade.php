<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Webpixels">
    <title>supportportal - Stoxwealth</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/libs/feather-icons/dist/feather.min.js"></script>
    <!-- <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/additional-methods.min.js"></script> -->
    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
    <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
    <!-- <script src='https://meet.jit.si/external_api.js'></script> -->
    
   <!--  <script>
        window.addEventListener("load", function() {
            setTimeout(function() {
                document.querySelector('body').classList.add('loaded');
            }, 300);
        });
    </script> -->
    <!-- Favicon -->
    <!-- <link rel="icon" href="assets/img/brand/favicon.png" type="image/png"> --><!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="/libs/@fortawesome/fontawesome-free/css/all.min.css"> -->
    <!-- Quick CSS -->
    <!-- <link rel="stylesheet" href="/css/quick-website.css" id="stylesheet">
    <link rel="stylesheet" href="/css/header.css" id="stylesheet"> -->
    <!-- <link rel="stylesheet" type="text/css" href="/css/jquery-ui.css"  /> -->

    <!-- <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/signup-form.js"></script>
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/jquery-ui.js"></script>
    <script src="/js/jquery.validate.min.js"></script> -->
    <style>
        .rege
        {
            display:none;
        }
        @media (min-width: 992px)
        {
            .navbar-expand-lg .navbar-brand img 
            {
                height: 50px !important;
            }
        }
        @media (max-width: 991.98px)
        {
            .navbar-expand-lg .navbar-brand img 
            {
                height: 50px !important;
            }
        }
        /*@media (min-width: 992px){
            .navbar-expand-lg .navbar-brand img {
                height: 50px !important;
            }
        }
        @media (max-width: 991.98px){
            .navbar-expand-lg .navbar-brand img {
                height: 50px !important;
            }
        }*/
        @media (max-width: 600px){
            .dsk{
                display:none;
            }
            .mvk{
                display:block;
            }
        }
        @media (min-width: 600px){
            .dsk{
                display:block;
            }
            .mvk{
                display:none;
            }
        }
    </style>
<script>
$(document).ready(function(){
    $("#Registration").click(function(){
        $("#Registration").addClass("btn-primary");
        $("#Sign").addClass("btn-outline-primary");

        $("#Registration").removeClass("btn-outline-primary");
        $("#Sign").removeClass("btn-primary");

        $(".login").hide();
        $(".rege").show();
    });
    $("#Sign").click(function(){
        $("#Registration").addClass("btn-outline-primary");
        $("#Sign").addClass("btn-primary");

        $("#Sign").removeClass("btn-outline-primary");
        $("#Registration").removeClass("btn-primary");

        $(".login").show();
        $(".rege").hide();
    });
});
</script>
<!-- <style type="text/css">
    @media (min-width: 992px){
.navbar-expand-lg .navbar-brand img {
    height: 50px !important;
}}
@media (max-width: 991.98px){
.navbar-expand-lg .navbar-brand img {
    height: 50px !important;
}}

</style> -->
</head>
<head>
    <script>
        window.addEventListener("load", function() {
            setTimeout(function() {
                document.querySelector('body').classList.add('loaded');
            }, 300);
        });
    </script>
    <!-- Favicon -->
    <link rel="icon" href="/img/brand/favicon.png" type="image/png"><!-- Font Awesome -->
    <link rel="stylesheet" href="/libs/@fortawesome/fontawesome-free/css/all.min.css">
    <!-- Quick CSS -->
    <link rel="stylesheet" href="/css/quick-website.css" id="stylesheet">
    <link rel="stylesheet" href="/css/header.css" id="stylesheet">
    <link rel="stylesheet" href="/css/main.css" id="stylesheet">
    <!-- <link rel="stylesheet" href="assets/js/bootstrap.min.js" id="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="/css/jquery-ui.css"/>
    <!-- <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css"> -->
    

    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <!-- <script src="js/signup-form.js"></script> -->
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/jquery-ui.js"></script>
    <script src="/js/jquery.validate.min.js"></script>


<style>
    @media (max-width: 600px)
    {
        .dsk
        {
            display:none;
        }
        .mvk
        {
            display:block;
        }
    }
    @media (min-width: 600px)
    {
        .dsk{
            display:block;
        }
        .mvk
        {
            display:none;
        }
    }
</style>
</head>
<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="/">
                <img alt="Image placeholder" src="http://stoxwealth.com/assets/img/brand/stoxwealth.svg" style="width:100%" id="navbar-logo">
            </a>
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Collapse -->
<!--             <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mt-4 mt-lg-0 ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="about" class="dropdown-item">About us</a>
                    </li>
                    <li>
                        <a class="nav-link" href="pdf" class="dropdown-item">Download</a>
                    </li>
                    <li>
                        <a class="nav-link" href="ipos" class="dropdown-item">IPOs</a>
                    </li>
                    <li>
                        <a class="nav-link" href="pricing" class="dropdown-item">Pricing</a>
                    </li>
                    <li>
                        <a class="nav-link" href="blog" class="dropdown-item">Blog</a>
                    </li>
                    <li>
                        <a class="nav-link" href="contact" class="dropdown-item">Contact</a>
                    </li>

                </ul>
            </div> -->
        </div>
    </nav>
	
 <!-- Main content -->
 
  @yield('content')
  
  
     <footer class="position-relative" id="footer-main">
        <div class="footer pt-lg-7 footer-light gglight">
            <!-- SVG shape -->
            <div class="shape-container shape-line shape-position-top shape-orientation-inverse">
               <svg width="2560px" height="100px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100;" xml:space="preserve" class=" fill-section-secondary">
                   <polygon points="2560 0 2560 100 0 100"></polygon>
               </svg>
            </div>
            <!-- Footer -->
             <style>
                .gglight{
                    background-color:#f1f2f7ad; 
                }
            </style>
            <div class="container pt-4">
                <div class="row">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <!-- Theme's logo -->
                          <a class="navbar-brand" href="/">
                <img alt="Image placeholder" src="https://stoxwealth.com/assets/img/brand/stoxwealth.svg" style="width:100%" id="navbar-logo">
            </a> 
                        <!-- Webpixels' mission -->
                        <p class="mt-4 text-sm opacity-8 pr-lg-4">Webpixels attempts to bring the best development experience to designers and developers by offering the tools needed for having a quick and solid start in most web projects.</p> 
                        <!-- Social -->
                        <ul class="nav mt-4">
                            <li class="nav-item">
                                <a class="nav-link pl-0" href="https://dribbble.com/webpixels" target="_blank">
                                    <i class="fab fa-dribbble"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://github.com/webpixels" target="_blank">
                                    <i class="fab fa-github"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.instagram.com/webpxs" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.facebook.com/webpixels" target="_blank">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-6 col-sm-4 ml-lg-auto mb-5 mb-lg-0">
                        <h6 class="heading mb-3">Account</h6>
                        <ul class="list-unstyled">
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Settings</a></li>
                            <li><a href="#">Billing</a></li>
                            <li><a href="#">Notifications</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
                        <h6 class="heading mb-3">About</h6>
                        <ul class="list-unstyled">
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
                        <h6 class="heading mb-3">Company</h6>
                        <ul class="list-unstyled">
                            <li><a href="#">Community</a></li>
                            <li><a href="#">Help center</a></li>
                            <li><a href="#">Support</a></li>
                        </ul>
                    </div>
                </div>
                <hr class="divider divider-fade divider-dark my-4">
                <div class="row align-items-center justify-content-md-between pb-4">
                    <div class="col-md-3">
                        <div class="copyright text-sm font-weight-bold text-center text-md-left">
                            &copy; 2021 stoxwealth. All rights reserved
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="copyright text-sm font-weight-bold text-center text-md-left">
                            Powered by <a href="https://squarerootcommunications.com/" class="font-weight-bold" target="_blank"  style="color:#a0aec0;">SquareRoot Communications</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
                            <li class="nav-item">
                                <a class="nav-link" href="/disclosure.php">
                                    Disclosure
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/policies-and-procedures.php">
                                    policies & procedures
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer> 
   <!-- Core JS  -->
    <script src="/libs/jquery/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.js" integrity="sha512-RCgrAvvoLpP7KVgTkTctrUdv7C6t7Un3p1iaoPr1++3pybCyCsCZZN7QEHMZTcJTmcJ7jzexTO+eFpHk4OCFAg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/libs/svg-injector/dist/svg-injector.min.js"></script>
    <script src="/libs/feather-icons/dist/feather.min.js"></script>
    <!-- Quick JS -->
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script src="/js/quick-website.js"></script>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <!-- Feather Icons -->
    <script>
        feather.replace({
            'width': '1em',
            'height': '1em'
        })
    </script>
</body>

</html>
