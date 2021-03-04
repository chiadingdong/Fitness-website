<!DOCTYPE html>
<?php include ('server.php') ?>
<?php require_once( ROOT_PATH . '/includes/registration_login.php') ?>

<?php
$name = "";
$email = "";
$message = "";
$id = 0;
$update = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        $name = $_POST['cf-name'];
        $email = $_POST['cf-email'];
        $message = $_POST['cf-message'];
        $sql = "INSERT INTO questions (name, email, message) VALUES ('$name', '$email', '$message')";
        /* if(mysqli_query($conn, $sql)) {
          $_SESSION['message'] = "Address Saved";
          } else{
          $_SESSION['message'] = "Address Saved Failed";
          } */
        $conn->query($sql);
    }
}
?>

<html lang="en">
    <head>

        <title>Gymso Fitness HTML Template</title>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="stylesheet" href="home_assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="home_assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="home_assets/css/aos.css">

        <!-- MAIN CSS -->
        <link rel="stylesheet" href="home_assets/css/tooplate-gymso-style.css">
        <!--
        Tooplate 2119 Gymso Fitness
        https://www.tooplate.com/view/2119-gymso-fitness
        -->
    </head>
    <body data-spy="scroll" data-target="#navbarNav" data-offset="50">

        <!-- MENU BAR -->
        <?php include('navbar.php') ?>

        <div class="main-banner" id="top">
            <video autoplay muted loop id="bg-video">
                <source src="home_assets/images/gym-video.mp4" type="video/mp4" />
            </video>

            <div class="video-overlay header-text">


                <div class="container">
                    <div class="caption">

                        <div class="col-lg-8 col-md-10 mx-auto col-12">
                            <div class="hero-text mt-5 text-center">

                                <h6 class="text-white" data-aos="fade-up" data-aos-delay="300">New way to build a healthy lifestyle!</h6>

                                <h1 class="text-white" data-aos="fade-up" data-aos-delay="500">Upgrade your body at <div class="text-red"> Gymso Fitness</div></h1>

                                <a href="#feature" class="btn custom-btn bg-color mt-3" data-aos="fade-up" data-aos-delay="700">Get started</a>

                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>


        <section class="feature" id="feature">
            <div class="container">
                <div class="row">

                    <div class="d-flex flex-column justify-content-center ml-lg-auto mr-lg-5 col-lg-5 col-md-6 col-12">
                        <h2 class="mb-3 text-white" data-aos="fade-up">New to the gymso?</h2>

                        <p data-aos="fade-up" data-aos-delay="200">Gymso is free for people over the age of 40 as we want promote active ageing. All you have to do is become a member and all the gym facilities will be yours to use.</p>

                    </div>

                    <div class="mr-lg-auto mt-3 col-lg-4 col-md-6 col-12">
                        <div class="about-working-hours">
                            <div>

                                <h2 class="mb-4 text-white" data-aos="fade-up" data-aos-delay="500">Working hours</h2>

                                <strong class="d-block" data-aos="fade-up" data-aos-delay="600">Sunday : Closed</strong>

                                <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Monday - Friday</strong>

                                <p data-aos="fade-up" data-aos-delay="800">7:00 AM - 10:00 PM</p>

                                <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Saturday</strong>

                                <p data-aos="fade-up" data-aos-delay="800">6:00 AM - 4:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- banner -->


    <!-- ABOUT -->
    <section class="about section" id="about">
        <div class="container">
            <div class="row">

                <div class="mt-lg-5 mb-lg-0 mb-4 aboutUs col-md-10 mx-auto col-12">
                    <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">Hello, We Are Gymso</h2>

                    <p data-aos="fade-up" data-aos-delay="400">Gymso was founded in 2002 as a family owned and operated business. The Gymso founders didn’t want it to be just another fitness product retailer - they wanted to be the best in the industry and set their minds to doing so! Since its birth, Gymso has grown into one of Singpore’s largest online fitness product retailers having helped over 50,000 customers live longer, happier and healthier lives</p>

                    <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">What We Do</h2>
                    <p data-aos="fade-up" data-aos-delay="500">We want to help you live a fit and healthy lifestyle! We do this by helping you find the most suitable equipment for your home gym, studio or commercial gym, keeping your budget, lifestyle and fitness goals in mind. We stock a wide range of gym equipment, with strength equipment, cardio, cross training and so much more. We also have a variety of supplements to turbo charge your journey to fitness! Our awesome team is always keen to help, so please call us to discuss your needs.</p>

                </div>

                <div class="ml-lg-auto col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="700">
                    <div class="team-thumb">
                        <img src="home_assets/images/team/justin.jpg" class="img-fluid" alt="Trainer">

                        <div class="team-info d-flex flex-column">

                            <h3>Tan Yeong Teng Justin</h3>
                            <span>P1923731</span>
                            <p>DCPE Student from Singapore Polytechnic. Serving his second year in class 2B01</p>
                        </div>
                    </div>
                </div>

                <div class="ml-lg-auto col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="700">
                    <div class="team-thumb">
                        <img src="home_assets/images/team/chiadong.jpg" class="img-fluid" alt="Trainer">

                        <div class="team-info d-flex flex-column">

                            <h3>Chia Dong</h3>
                            <span>P1938113</span>
                            <p>DCPE Student from Singapore Polytechnic. Serving his second year in class 2B01</p>
                        </div>
                    </div>
                </div>

                <div class="ml-lg-auto col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="700">
                    <div class="team-thumb">
                        <img src="home_assets/images/team/ruisheng.jpg" class="img-fluid" alt="Trainer">

                        <div class="team-info d-flex flex-column">

                            <h3>Lea Rui Sheng</h3>
                            <span>P1923009</span>
                            <p>DCPE Student from Singapore Polytechnic. Serving his second year in class 2B01 </p>

                        </div>
                    </div>
                </div>

                <div class="mr-lg-auto mt-5 mt-lg-0 mt-md-0 col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="800">
                    <div class="team-thumb">
                        <img src="home_assets/images/team/jenseng.jpg" class="img-fluid" alt="Trainer">

                        <div class="team-info d-flex flex-column">

                            <h3>Jenseng</h3>
                            <span>P1923096</span>
                            <p>DCPE Student from Singapore Polytechnic. Serving his second year in class 2B01 </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- PRODUCTS -->
    <section class="schedule section" id="schedule" style="background-image: url('home_assets/images/supplementsbg') ">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 text-center">
                    <h2 class="text-white" data-aos="fade-up" data-aos-delay="200">Our Products</h2>
                </div>

                <div class="col-lg-12 col-12 text-center">
                    <h6 class="text-white" data-aos="fade-up" data-aos-delay="200">
                        HIGHEST QUALITY sports nutrition supplements and other products.
                    </h6>
                    <a href="product.php" class="btn custom-btn bg-color mt-3" data-aos="fade-up" data-aos-delay="200">Shop Now</a>
                </div>    

            </div>
        </div>
    </section>


    <!-- CONTACT -->
    <section class="contact section" id="contact">
        <div class="container">
            <div class="row">

                <div class="ml-auto col-lg-5 col-md-6 col-12">
                    <h2 class="mb-4 pb-2" data-aos="fade-up" data-aos-delay="200">Feel free to ask anything</h2>

                    <form method="post" id="cfform" class="contact-form webform" data-aos="fade-up" data-aos-delay="400" role="form">
                        <input type="text" class="form-control" name="cf-name" placeholder="Name" required>

                        <input type="email" class="form-control" name="cf-email" placeholder="Email" required>

                        <textarea class="form-control" rows="5" name="cf-message" placeholder="Message" required></textarea>

                        <button type="submit" class="form-control" id="submit-button" name="submit" onclick="alertmsg()">Send Message</button>
                    </form>
                </div>

                <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12">
                    <h2 class="mb-4" data-aos="fade-up" data-aos-delay="600">Where you can <span>find us</span></h2>

                    <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i> 500 Dover Road - 139651, Singapore</p>
                    <!-- How to change your own map point
                            1. Go to Google Maps
                            2. Click on your location point
                            3. Click "Share" and choose "Embed map" tab
                            4. Copy only URL and paste it within the src="" field below
                    -->
                    <div class="google-map" data-aos="fade-up" data-aos-delay="900">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.775876175282!2d103.77536081475395!3d1.3097756990447142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da1a602ff17c15%3A0xa9545dd23993859e!2sSingapore%20Polytechnic!5e0!3m2!1sen!2ssg!4v1613151804768!5m2!1sen!2ssg" width="1920" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- FOOTER -->
    <?php include('footer.php') ?>

    <!-- Modal -->
    <div class="modal fade" id="membershipForm" tabindex="-1" role="dialog" aria-labelledby="membershipFormLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">

            <div class="modal-content">
                <div class="modal-header">

                    <h2 class="modal-title" id="membershipFormLabel">Membership Form</h2>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form class="membership-form webform" role="form">
                        <input type="text" class="form-control" name="cf-name" placeholder="John Doe">

                        <input type="email" class="form-control" name="cf-email" placeholder="Johndoe@gmail.com">

                        <input type="tel" class="form-control" name="cf-phone" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>

                        <textarea class="form-control" rows="3" name="cf-message" placeholder="Additional Message"></textarea>

                        <button type="submit" class="form-control" id="submit-button" name="submit">Submit Button</button>

                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="signup-agree">
                            <label class="custom-control-label text-small text-muted" for="signup-agree">I agree to the <a href="#">Terms &amp;Conditions</a>
                            </label>
                        </div>
                    </form>
                </div>

                <div class="modal-footer"></div>

            </div>
        </div>
    </div>

    <!-- SCRIPTS -->
    <script> 
        function alertmsg() {
            var x = document.getElementById('cf-name').value;
            var y = document.getElementById('cf-email').value;
            var s = document.getElementById('cf-message').value;
            var haserror = false;

            if (empty(x.trim())) {
                haserror = true;
            }
            //else{document.getElementById('err1').innerHTML=" * ";}
            if (empty(y.trim())) {

                haserror = true;
            }
            //else{document.getElementById('err2').innerHTML=" * ";}
            if (empty(s.trim())) {

                haserror = true;
            }
            //else{document.getElementById('err3').innerHTML=" * ";}
        }

      
    </script>


    <script src = "home_assets/js/jquery.min.js"></script>
    <script src="home_assets/js/bootstrap.min.js"></script>
    <script src="home_assets/js/aos.js"></script>
    <script src="home_assets/js/smoothscroll.js"></script>
    <script src="home_assets/js/custom.js"></script>

</body>
</html>