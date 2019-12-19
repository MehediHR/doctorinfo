<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/first-aid-kit.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="style.css">


    <title>DoctorInfo</title>
</head>

<body>
    <!--Nav Bar-->

    <nav class="navbar navbar-expand-lg navbar-dark navbar-fixed-top fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#home">DoctorInfo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active mr-3 ">
                        <a class="nav-link cool-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link cool-link" href="information.php">Information</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link cool-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link cool-link" href="#contact">Contact</a>
                    </li>


                    <li class="nav-item mr-3">
                        <a class="nav-link cool-link" href="regi.php">Registration</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link cool-link" href="login.php">Login</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>



    <section id="home">


        <canvas class="canvas"></canvas>
        <!--Button-->
        <div class="conta">
            <div class="cen">
                <button class="bt">
                    <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
                        <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                        <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                    </svg>
                    <a class="col" href="information.php">Information</a>
                </button>
            </div>
        </div>
        <!--Button-->
    </section>

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-12 mt-5">
                    <h1>About Doctorinfo</h1><br>
                    <p class="mt-2" data-aos="fade-left" style="font-size: 18px; text-align: justify;">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

                </div>
            </div>
        </div>
    </section>


    <section class="container my-5">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </section>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 mb-5">
                    <p class="mt-2" data-aos="fade-left" style="font-size: 18px; text-align: justify;">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

                </div>
            </div>
        </div>
    </section>
    
    
    <section class="team-section my-5 container">


        <h1 class=" text-center my-5">Our amazing team</h1>

        <p class="grey-text text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas
            nostrum quisquam eum porro a pariatur veniam.</p>


        <div class="row text-center text-md-left">


            <div class="col-xl-6 col-lg-12 mb-5 d-md-flex justify-content-between">
                <div class="avatar mb-md-0 mb-4 mx-4">
                    <img src="img/mehedi.jpg" class="rounded z-depth-1" alt="Sample avatar">
                </div>
                <div class="mx-4">
                    <h5 class=" font-weight-bold mb-3">Md Mehedi Hasan</h5>
                    <p class="grey-text">I am a full stack web developer.I have a great Experience on HTML:5, CSS:3, javascript, jQuery, PHP, mysql and wordpress.</p>
                    <a class="p-2 fa-lg fb-ic" style="color: #1DA1F2;">
                        <i class="fab fa-twitter"> </i>
                    </a>
                    <a class="p-2 fa-lg fb-ic" style="color: #3B5998;">
                        <i class="fab fa-facebook"> </i>
                    </a>
                    <a class="p-2 fa-lg tw-ic bg-yu" style="color: #FF0000;">
                        <i class="fab fa-instagram"> </i>
                    </a>

                    <a class="p-2 fa-lg dribbble-ic bg-in" style="color: #0073B0;">
                        <i class="fab fa-linkedin"> </i>
                    </a>
                </div>
            </div>



            <div class="col-xl-6 col-lg-12 mb-5 d-md-flex justify-content-between">
                <div class="avatar mb-md-0 mb-4 mx-4">
                    <img src="img/mehedi.jpg" class="rounded z-depth-1" alt="Sample avatar">
                </div>
                <div class="mx-4">
                    <h5 class=" font-weight-bold mb-3">Md Mehedi Hasan</h5>
                    <p class="grey-text">I am a full stack web developer.I have a great Experience on HTML:5, CSS:3, javascript, jQuery, PHP, mysql and wordpress.</p>
                    <a class="p-2 fa-lg fb-ic" style="color: #1DA1F2;">
                        <i class="fab fa-twitter"> </i>
                    </a>
                    <a class="p-2 fa-lg fb-ic" style="color: #3B5998;">
                        <i class="fab fa-facebook"> </i>
                    </a>
                    <a class="p-2 fa-lg tw-ic bg-yu" style="color: #FF0000;">
                        <i class="fab fa-instagram"> </i>
                    </a>

                    <a class="p-2 fa-lg dribbble-ic bg-in" style="color: #0073B0;">
                        <i class="fab fa-linkedin"> </i>
                    </a>
                </div>
            </div>




    </section>



    <section id="contact">
        <div class="site-section mt-5" id="contact-section" style=" min-height: 700px; background-color:#486C87">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <h1 class="section-title my-5" style="text-align: center; color: white;">Contact</h1>

                        <form method="post" data-aos="fade">
                            <div class="form-group row">
                                <div class="col-md-6 mb-3 mb-lg-0">
                                    <input type="text" class="form-control" placeholder="First name">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Last name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Subject">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea class="form-control" id="" cols="30" rows="10" placeholder="Write your message here."></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">

                                    <input type="submit" class="btn cole btn-block btn-light" value="Send">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!-- Site footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-7 mr-5">
                    <h6 class="h6">About</h6>
                    <p class="text-justify">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, </p>
                </div>

                <div class="col-md-4 ml-2">
                    <h6 class="h6">Quick Links</h6>
                    <ul class="footer-links">
                        <li> <a href="#home">Home</a> </li>
                        <li> <a href="information.php">Information</a> </li>
                        <li> <a href="#about">About</a> </li>
                        <li> <a href="#contact">Contact</a> </li>
                        <li> <a href="regi.php">Registration</a> </li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2019 All Rights Reserved by
                        <a href="index.php">DoctorInfo</a>.
                    </p>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a class="dribbble" href="#"><i class="fab fa-dribbble"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>



    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/paticals.js"></script>
    <script src="js/jquery.particles.min.js"></script>
    <script src="js/smooth-scroll.polyfills.min.js"></script>
    <script src="js/jquery.easeScroll.js"></script>
    <script src="js/main.js"></script>

    <script>
        var scroll = new SmoothScroll('a[href*="#"]');
        $("html").easeScroll();

    </script>




</body>

</html>
