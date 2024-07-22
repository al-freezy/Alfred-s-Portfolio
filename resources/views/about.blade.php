 
   <!-- ====== Google Fonts ====== -->
   <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet">

   <!-- ====== ALL CSS ====== -->
  @include('css')
  @include('header')

 <!-- ====== About Area ====== -->
 <section id="about" class="section-padding about-area bg-light">
    <div class="container">
        <!-- Section Title -->
        <div class="row justify-content-center">
            <div class="col-lg-6 ">
                <div class="section-title text-center">
                    <h2>About Me</h2>
                   
                </div>
            </div>
        </div>
        <!-- //Section Title -->
        <div class="row">
            <div class="col-lg-6">
                <div class="about-bg" style="background-image:url(assets/images/alf3.jpg)">
                    <!-- Social Link -->
                    <div class="social-aria">
                        <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                        <a target="_blank" href="#"><i class="fab fa-instagram"></i></a>
                        <a target="_blank" href="#"><i class="fab fa-pinterest"></i></a>
                        <a target="_blank" href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                    <!-- // Social Link -->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <h2>Hello, I am <span>Alfred Sakala</span></h2>
                    <h4>Web Developer, Web Designer And IT Technician</h4>
                    <p>I'm Alfred Sakala, friendly neighborhood web developer and designer. My journey in the world of technology began like many others—with a simple curiosity about how things are made and a for creativity. Over the years, I've honed my skills not only in web development but also in IT as a technician. Today, I’d like to share a bit about my adventures in web development and design, and what that journey means to me.</p>
                    <br>
                    <h4>My Path into Web Development</h4>
                    <p>I remember when I first stumbled upon web development back in high school. I was fascinated by how websites worked and the magic that seemed to happen behind the scenes. It was a eureka moment when I realized that anyone could create something from scratch, from a personal blog to a full-fledged e-commerce site. This sparked a fire in me that has only grown since then.

                        There are so many resources available now, from free courses online to communities full of helpful people. I took advantage of these and dove headfirst into learning HTML, CSS, Java and eventually Php With it's beautiful and easy to learn framework called LARAVEL. It felt great to see a website come to life, with every line of code contributing to the overall picture.</p>
                        <br>
                        <h4> IT Technician </h4>
                        <p>In addition to being a web developer and designer, I also wear the hat of an IT technician. This aspect of my career has taught me the importance of keeping websites and computer networks secure and running smoothly. Understanding how servers work, managing databases, and dealing with technical issues are all crucial parts of the job.

                            I remember a time when I had to troubleshoot a Local crash just before a product launch. It was stressful, but my background in IT / Networking helped me quickly identify and fix the issue. This experience reinforced the idea that a strong foundation in IT is invaluable in web development.</p>

                    <h5>My Skills</h5>

                    <!-- Skill Area -->
                    <div id="skills" class="skill-area">

                        <!-- Single skill -->
                        <div class="single-skill">
                            <div class="skillbar" data-percent="90%">
                                <div class="skillbar-title"><span>HTML5</span></div>
                                <div class="skillbar-bar"></div>
                                <div class="skill-bar-percent">90%</div>
                            </div>
                        </div>
                        <!-- //Single skill -->

                        <!-- Single skill -->
                        <div class="single-skill">
                            <div class="skillbar" data-percent="85%">
                                <div class="skillbar-title"><span>CSS</span></div>
                                <div class="skillbar-bar"></div>
                                <div class="skill-bar-percent">85%</div>
                            </div>
                        </div>
                        <!-- //Single skill -->

                        <!-- Single skill -->
                        <div class="single-skill">
                            <div class="skillbar" data-percent="40%">
                                <div class="skillbar-title"><span>PHP</span></div>
                                <div class="skillbar-bar"></div>
                                <div class="skill-bar-percent">40%</div>
                            </div>
                        </div>
                        <!-- //Single skill -->

                        <!-- Single skill -->
                        <div class="single-skill">
                            <div class="skillbar" data-percent="60%">
                                <div class="skillbar-title"><span>LARAVEL FRAMWORK</span></div>
                                <div class="skillbar-bar"></div>
                                <div class="skill-bar-percent">60%</div>
                            </div>
                        </div>
                        <!-- //Single skill -->

                        <!-- Single skill -->
                        <div class="single-skill">
                            <div class="skillbar" data-percent="50%">
                                <div class="skillbar-title"><span>JAVA</span></div>
                                <div class="skillbar-bar"></div>
                                <div class="skill-bar-percent">50%</div>
                            </div>
                        </div>
                        <!-- //Single skill -->

                        <!-- Single skill -->
                        <div class="single-skill">
                            <div class="skillbar" data-percent="25%">
                                <div class="skillbar-title"><span>ANGULAR FRAMEWORK</span></div>
                                <div class="skillbar-bar"></div>
                                <div class="skill-bar-percent">25%</div>
                            </div>
                        </div>
                        <!-- //Single skill -->

                        <!-- Single skill -->
                        <div class="single-skill">
                            <div class="skillbar" data-percent="70%">
                                <div class="skillbar-title"><span>WORDPRESS</span></div>
                                <div class="skillbar-bar"></div>
                                <div class="skill-bar-percent">70%</div>
                            </div>
                        </div>
                        <!-- //Single skill -->

                          <!-- Single skill -->
                          <div class="single-skill">
                            <div class="skillbar" data-percent="75%">
                                <div class="skillbar-title"><span>IT/NETWORKS</span></div>
                                <div class="skillbar-bar"></div>
                                <div class="skill-bar-percent">75%</div>
                            </div>
                        </div>
                        <!-- //Single skill -->

                    </div>
                    <!-- //Skill Area -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====== // About Area ====== -->

    @include('services')
    @include('whychooseme')
    @include('portfolio')
   @include('faq')


