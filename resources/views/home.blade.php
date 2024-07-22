<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="UTF-8">
    <title>Alfred's Portfolio</title>

    <!-- ====== Google Fonts ====== -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet">

    <!-- ====== ALL CSS ====== -->
   @include('css')

</head>

<body data-spy="scroll" data-target=".navbar-nav">
    @include('preloader') 
    @include('header')

    <!-- ====== Hero Area ====== -->
    <div class="hero-aria" id="home">
        <!-- Hero Area Content -->
        <div class="container">
            <div class="hero-content h-100">
                <div class="d-table">
                    <div class="d-table-cell">
                        <h2 class="text-uppercase">Let's Begin</h2>
                        <h3 class="text-uppercase"> Web-Dev | Web Design | I.T Services</span></h3>
                        <p>Developed And Designed by Alfred Sakala.</p>
                        <a href="#about" class="button smooth-scroll">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Hero Area Content -->
        <!-- Hero Area Slider -->
        <div class="hero-area-slids owl-carousel">
            <div class="single-slider">
                <!-- Single Background -->
                <div class="slider-bg" style="background-image: url(assets/images/alf1.jpg)"></div>
                <!-- // Single Background -->
            </div>
            <div class="single-slider">
                <!-- Single Background -->
                <div class="slider-bg" style="background-image: url(assets/images/alf2.jpg)"></div>
                <!-- // Single Background -->
            </div>
        </div>
        <!-- // Hero Area Slider -->
    </div>
    <!-- ====== //Hero Area ====== -->

   @include('about')
    @include('services')
    @include('whychooseme')
    @include('portfolio')
   @include('faq')
   

    <!-- ====== Call to Action Area ====== -->
    <section class="section-padding call-to-action-aria bg-secondary">
        <div class="container">
            <div class="row">
               
                <div class="col-lg-3">
                    <div class="cta-button">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <a href="#" class="button">Contact me</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== // Call to Action Area ====== -->


    @include('pricing')
    @include('contact')
    @include('footer')
    @include('javascript')


</body>

</html>
