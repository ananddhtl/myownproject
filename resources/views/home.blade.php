<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width , intial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My First Project</title>
    <link rel="stylesheet" href="{{ asset('site/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('site/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- Navbar starts from here -->
    <section id="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6 col-sm-12 col-12 text-center text-lg-left">
                    <div class="header-contact">
                        <i class="fas fa-location-arrow"></i> pokhara -8, srijana chowk &nbsp;&nbsp;&nbsp;
                        <i class="fas fa-phone"></i> 098-7654321
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-hidden-sm">
                    <div class="header-icon">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="navbar" class="sticky">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#">myOwnSite</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav text-center ml-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{asset('/about')}}">About</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="/service">Service</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="/classes" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                Our Classes
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#" style="border-bottom: 2px solid var(--s-color);">Web Development</a>
                                <a class="dropdown-item" href="#" style="border-bottom: 2px solid var(--s-color);">Mobile Develpment</a>
                                <a class="dropdown-item" href="#">Seo Marketing</a>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>
    </section>
    <!-- Navbar ends here -->
    <!-- slider section starts here -->
    <section class="slider">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('site/image/slider1.jpg')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('site/image/slider2.jpg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('site/image/slider3.jpg')}}" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </section>
    <!-- slider section ends here -->
    <!-- about us section start  here -->
    <section id="aboutus">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-us-title">
                        <h1>About us </h1>
                        <h2>Who we are? </h2>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="about-image">
                        <img src="{{asset('image/bg.jpg')}}" height="500px" width="400px">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-description">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Enim dignissimos unde voluptas distinctio officia nobis ut quae suscipit.
                            Ad officiis aperiam sunt dolorem facilis. Illo, amet ipsam? Voluptates,
                            inventore eius?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Enim dignissimos unde voluptas distinctio officia nobis ut quae suscipit.
                            Ad officiis aperiam sunt dolorem facilis. Illo, amet ipsam? Voluptates,
                            inventore eius?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Enim dignissimos unde voluptas distinctio officia nobis ut quae suscipit.
                            Ad officiis aperiam sunt dolorem facilis. Illo, amet ipsam? Voluptates,
                            inventore eius?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Enim dignissimos unde voluptas distinctio officia nobis ut quae suscipit.
                            Ad officiis aperiam sunt dolorem facilis. Illo, amet ipsam? Voluptates,
                            inventore eius?
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="service">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="service-title">
                        <h1>Service </h1>
                        <h2>Services we provide </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="service-box">
                        <i id="icon" class="fa-solid fa-house"></i>
                        <h3>Web Development </h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque est dolore quibusdam recusandae nihil quia ad corporis amet odio molestiae assumenda laudantium ut sit dolorum, id placeat ipsam asperiores modi?</p>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="service-box">
                        <i id="icon" class="fa-solid fa-user"></i>
                        <h3>Machine Learning</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque est dolore quibusdam recusandae nihil quia ad corporis amet odio molestiae assumenda laudantium ut sit dolorum, id placeat ipsam asperiores modi?</p>

                    </div>
                </div>
                <div class="col-md-4">

                    <div class="service-box">
                        <i id="icon" class="fa-solid fa-user"></i>
                        <h3>Mobile Development </h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque est dolore quibusdam recusandae nihil quia ad corporis amet odio molestiae assumenda laudantium ut sit dolorum, id placeat ipsam asperiores modi?</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="service-box">
                        <i id="icon" class="fa-solid fa-house"></i>
                        <h3>Web Development </h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque est dolore quibusdam recusandae nihil quia ad corporis amet odio molestiae assumenda laudantium ut sit dolorum, id placeat ipsam asperiores modi?</p>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="service-box">
                        <i id="icon" class="fa-solid fa-user"></i>
                        <h3>Machine Learning</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque est dolore quibusdam recusandae nihil quia ad corporis amet odio molestiae assumenda laudantium ut sit dolorum, id placeat ipsam asperiores modi?</p>

                    </div>
                </div>
                <div class="col-md-4">

                    <div class="service-box">
                        <i id="icon" class="fa-solid fa-user"></i>
                        <h3>Mobile Development </h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque est dolore quibusdam recusandae nihil quia ad corporis amet odio molestiae assumenda laudantium ut sit dolorum, id placeat ipsam asperiores modi?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us section ends  here -->
    <!---our classes section starts here--->
    <section id="ourclasses">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h1>Our Classes </h1>
                        <h2>Who we are? </h2>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="our-class-body">
                        <i id="icon" class="fa-solid fa-laptop"></i>
                        <h4>Web Development</h4>
                        <ul>
                            <li>Daily Classes Starts from 8:45 PM</li>
                            <li>Daily Classes Starts from 8:45 PM</li>
                            <li>Daily Classes Starts from 8:45 PM</li>
                            <li>Daily Classes Starts from 8:45 PM</li>

                        </ul>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="our-class-body">
                        <i id="icon" class="fa-solid fa-paperclip"></i>
                        <h4>SEO Optimization</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo, mollitia harum. Dolores est nisi nam hic rerum. Laboriosam, nemo. Nemo ratione necessitatibus laborum aut distinctio libero qui. Sapiente, eveniet odio!</p>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="our-class-body">
                        <i id="icon" class="fa-solid fa-gear"></i>
                        <h4>Flutter Development</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo, mollitia harum. Dolores est nisi nam hic rerum. Laboriosam, nemo. Nemo ratione necessitatibus laborum aut distinctio libero qui. Sapiente, eveniet odio!</p>

                    </div>
                </div>


            </div>
        </div>
    </section>
    <!---our classes section ends here--->
    <!---contact  section starts here--->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-title">
                        <h1>Contact Us </h1>
                        <h2>Feel Free to Contact!</h2>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-box">
                        <i id="icon" class="fa-solid fa-location-dot"></i>
                        <h4>Location</h4>
                        <p>Chauthe 14 Pokhara</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-box">
                        <i id="icon" class="fa-solid fa-phone"></i>
                        <h4>Contact Number</h4>
                        <p>+977-98765432123</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-box">
                        <i id="icon" class="fa-solid fa-message"></i>
                        <h4>Email</h4>
                        <p>test@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <form action="" method="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">

                                    <input type="" id="" name="" class="form-control" placeholder="Full Name">

                                </div>
                                <div class="form-group">

                                    <input type="" id="" name="" class="form-control" placeholder="Email">

                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">

                                    <input type="" id="" name="" class="form-control" placeholder="Subject">

                                </div>
                                <div class="form-group">

                                    <textarea style="height:200px;" class="form-control" placeholder="Message"></textarea>

                                </div>
                                <div class="col-md-12 text-center mt-6">
                                    <div class="form-group">
                                        <label for=""></label>
                                        <button class="btn">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </section>
    <!---contact section section ends here--->
    <!---footer section section starts here--->
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-a">
                        <a>My own Website</a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut modi voluptates minima consequatur fugiat. Nam nisi distinctio ipsa repellendus omnis repellat quasi soluta velit ipsum ullam, recusandae quam laudantium explicabo? </p>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="links">
                        <h4>Links</h4>
                        <ul>
                            <li><a  href="">Home</a></li>
                            <li><a  href="">About</a></li>
                            <li><a  href="">Service</a></li>
                            <li><a  href="">Our Classes</a></li>
                            <li><a  href="">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="links">
                        <h4>Classes</h4>
                        <ul>
                            <li><a>Web Development</a></li>
                            <li><a>Mobile Development</a></li>
                            <li><a>SEO Marketing</a></li>
                         
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-contact">
                        <h4>Contact</h4>
                        <p><i  id="icon" class=" fas fa-location"></i>Chauthe</p>
                        <p><i  id="icon"class=" fas fa-phone"></i>9870000000</p>
                        <p><i  id="icon"class=" fas fa-message"></i>info@test.com</p>
                       
                    </div>
                </div>
            </div>
            <div  class=" col-md-12 text-center">
                <a style="color:black; "href="https://www.anandadhital.com.np/" target="_blank">Copyright &copy; Developed by Ananda Dhital</a>
            </div>
        </div>
    </section>
    <!---footer section section ends here--->


</body>

</html>
<script>
    $('.carousel').carousel()
</script>
<script src="{{ asset('site/js/jquery.js') }}"></script>
<script src="{{ asset('site/bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ asset('site/fontawesome/js/all.js') }}"></script>
<script src="{{ asset('site/js/script.js') }}"></script>