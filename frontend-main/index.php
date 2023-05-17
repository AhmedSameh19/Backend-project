<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Raw Egypt</title>

    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/Raw.css">
    <link rel="icon" type="image/png" href="images/team/RAW.PNG" sizes="100000000x100000000">

    <link rel="stylesheet" href="website icon" type="png" href="images/team/RAW.PNG">
</head>

<body data-spy="scroll" data-target="#navbarNav" data-offset="50">
    <!-- allllll -->
    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <?php
            echo '<a class="navbar-brand" href="index.php">Raw Egypt</a>';

            echo '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
       </button>';

            echo '<div class="collapse navbar-collapse" id="navbarNav">
           <ul class="navbar-nav ml-lg-auto">
               <li class="nav-item">
                   <a href="#home" class="nav-link smoothScroll">Home</a>
               </li>

               <li class="nav-item">
                   <a href="#about" class="nav-link smoothScroll">About Us</a>
               </li>

               <li class="nav-item">
                   <a href="#class" class="nav-link smoothScroll">Classes</a>
               </li>

               <li class="nav-item">
                   <a href="#schedule" class="nav-link smoothScroll">Schedules</a>
               </li>
               
               <li class="nav-item">
                   <a href="#Price-List" class="nav-link smoothScroll">Price List</a>
               </li>

               <li class="nav-item">
                   <a href="#contact" class="nav-link smoothScroll">Contact</a>
               </li>

               <li class="nav-item">
                   <a href="#Login" class="nav-link smoothScroll">Login</a>
               </li>
           </ul>';

            echo '<ul class="social-icon ml-lg-3">
           <li><a href="https://web.facebook.com/Raw.Cali/?_rdc=1&_rdr" target="_blank" class ="fa fa-facebook"></a></li>
           <li><a href="https://www.instagram.com/raw__egypt/" target="_blank" class="fa fa-instagram"></a></li>
       </ul>';
            ?>
        </div>
    </nav>









    <!-- HERO -->


    <section class="hero d-flex flex-column justify-content-center align-items-center" id="home">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto col-12">
                    <div class="hero-text mt-5 text-center">
                        <?php
                        echo '<h6 data-aos="fade-up" data-aos-delay="300">new way to build a healthy lifestyle!</h6>';
                        echo '<h1 class="text-white" data-aos="fade-up" data-aos-delay="500">Upgrade your body at Raw</h1>';
                        echo '<a href="#feature" class="btn custom-btn mt-3" data-aos="fade-up" data-aos-delay="600">Get started</a>';
                        echo '<a href="#about" class="btn custom-btn bordered mt-3" data-aos="fade-up" data-aos-delay="700">learn more</a>';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="feature" id="feature">
        <div class="container">
            <div class="row">
                <div class="d-flex flex-column justify-content-center ml-lg-auto mr-lg-5 col-lg-5 col-md-6 col-12">
                    <?php
                    echo '<h2 class="mb-3 text-white" data-aos="fade-up">New  To  Calisthenics?</h2>';
                    echo '<h6 class="mb-4 text-white" data-aos="fade-up">What are you waiting for? <br>Seize The Oppurtunity & Subscribe To Ramadan\'s Challenge</h6>';
                    echo '<p data-aos="fade-up" data-aos-delay="200">Unlimited Sessions All Over the Holy Month + Nutrition Plan For 2000 EGP</p>';
                    echo '<a href="#" class="btn custom-btn bg-color mt-3" data-aos="fade-up" data-aos-delay="300" data-toggle="modal" data-target="#membershipForm">Become a member today</a>';
                    ?>
                </div>
                <div class="mr-lg-auto mt-3 col-lg-4 col-md-6 col-12">
                    <div class="about-working-hours">
                        <div>
                            <?php
                            echo '<h2 class="mb-4 text-white" data-aos="fade-up" data-aos-delay="500">Working hours</h2>';
                            echo '<strong class="d-block" data-aos="fade-up" data-aos-delay="600">Friday : Closed</strong>';
                            echo '<strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Saturday - Thursday</strong>';
                            echo '<p data-aos="fade-up" data-aos-delay="800">7:00 PM - 10:00 PM</p>';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- ABOUT -->

    <section class="about section" id="about">
        <div class="container">
            <div class="row">
                <div class="mt-lg-5 mb-lg-0 mb-4 col-lg-5 col-md-10 mx-auto col-12">
                    <?php
                    echo '<h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">Welcome to Raw!</h2>';
                    echo '<p data-aos="fade-up" data-aos-delay="400">We believe in the power of bodyweight training and are dedicated to helping our clients achieve their fitness goals through calisthenics.</p>';
                    echo '<p data-aos="fade-up" data-aos-delay="500">Our certified trainers are experienced in teaching a variety of calisthenics techniques and can help you develop strength, flexibility, and overall fitness.</p>';
                    ?>
                </div>
                <div class="ml-lg-auto col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="700">
                    <div class="team-thumb">
                        <img src="images/team/tifas2.jpg" class="img-fluid" alt="Trainer">
                        <div class="team-info d-flex flex-column">
                            <?php
                            echo '<h3>Mostafa Nasr</h3>';
                            echo '<span>Calisthenics Coach</span>';
                            echo '<ul class="social-icon mt-3">';
                            echo '<li><a href="https://web.facebook.com/mostafa.nasr.7355" target="_blank" class="fa fa-facebook"></a></li>';
                            echo '<li><a href="https://www.instagram.com/mostafanasr67/" target="_blank" class="fa fa-instagram"></a></li>';
                            echo '</ul>';
                            ?>
                        </div>
                    </div>
                </div>
                <div class="mr-lg-auto mt-5 mt-lg-0 mt-md-0 col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="800">
                    <div class="team-thumb">
                        <img src="images/team/jexo.jpg" class="img-fluid" alt="Trainer">
                        <div class="team-info d-flex flex-column">
                            <?php
                            echo '<h3>Jexo</h3>';
                            echo '<span>Calisthenics Coach</span>';
                            echo '<ul class="social-icon mt-3">';
                            echo '<li><a href="#" class="fa fa-facebook"></a></li>';
                            echo '<li><a href="https://www.instagram.com/jexooo/" class="fa fa-instagram"></a></li>';
                            echo '</ul>';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <!-- CLASS -->
    <section class="class section" id="class">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 text-center mb-5">
                    <?php
                    echo '<h6 data-aos="fade-up">Get A Perfect Body</h6>';
                    echo '<h2 data-aos="fade-up" data-aos-delay="200">Our Training Classes</h2>';
                    ?>
                </div>
                <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                    <div class="class-thumb">
                        <img src="images/class/tifas1.JPG" class="img-fluid" alt="Class">
                        <div class="class-info">
                            <?php
                            echo '<h3 class="mb-1">Foundation</h3>';
                            echo '<span><strong>Trained by</strong> - Coach Nasr <br> Coach Hazem</span>';
                            echo '<span class="class-Time">7 PM</span>';
                            echo '<p class="mt-3">Gaining strength by mastering the basics</p>';
                            ?>
                        </div>
                    </div>
                </div>
                <div class="mt-5 mt-lg-0 mt-md-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">
                    <div class="class-thumb">
                        <img src="images/class/tifas2.jpg" class="img-fluid" alt="Class">
                        <div class="class-info">
                            <?php
                            echo '<h3 class="mb-1">Evolve</h3>';
                            echo '<span><strong>Trained by</strong> - Coach Nasr<br> Coach Hazem</span>';
                            echo '<span class="class-Time">8 PM</span>';
                            echo '<p class="mt-3">Take your strength to the next level</p>';
                            ?>
                        </div>
                    </div>
                </div>
                <div class="mt-5 mt-lg-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
                    <div class="class-thumb">
                        <img src="images/class/tifas.JPG" class="img-fluid" alt="Class">
                        <div class="class-info">
                            <?php
                            echo '<h3 class="mb-1">Beasts</h3>';
                            echo '<span><strong>Trained by</strong>- Coach Jexo</span>';
                            echo '<span class="class-Time">9 PM</span>';
                            echo '<p class="mt-3">Mastering the skills to start competing </p>';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






    <!--Schedule-->
    <section class="schedule section" id="schedule">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 text-center">
                    <?php
                    echo '<h6 data-aos="fade-up">Our Weekly Schedules</h6>';
                    echo '<h2 class="text-white" data-aos="fade-up" data-aos-delay="200">Workout Timetable</h2>';
                    ?>
                </div>
                <div class="col-lg-12 py-5 col-md-12 col-12">
                    <table class="table table-bordered table-responsive schedule-table" data-aos="fade-up" data-aos-delay="300">
                        <thead class="thead-light">
                            <th class="light-green"><i class="fa fa-calendar"></i></th>
                            <th>Sat</th>
                            <th>Sun</th>
                            <th>Mon</th>
                            <th>Tue</th>
                            <th>Wed</th>
                            <th>Thu</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td><small>7:00 PM</small></td>
                                <td>
                                    <div class="circle"></div>
                                    <strong>Foundation Of Calisthenics</strong>

                                </td>
                                <td>
                                    <div class="circle"></div>
                                    <strong>Foundation Of Calisthenics</strong>

                                </td>
                                <td>
                                    <div class="circle"></div>
                                    <strong>Foundation Of Calisthenics</strong>

                                </td>
                                <td>
                                    <div class="circle"></div>
                                    <strong>Foundation Of Calisthenics</strong>

                                </td>
                                <td>
                                    <div class="circle"></div>
                                    <strong>Foundation Of Calisthenics</strong>

                                </td>
                                <td>
                                    <div class="circle"></div>
                                    <strong>Foundation Of Calisthenics</strong>

                                </td>
                            </tr>

                            <tr>
                                <td><small>8:00 PM</small></td>
                                <td>
                                    <div class="circle4"></div>
                                    <strong>Evolve</strong>

                                </td>
                                <td>
                                    <div class="circle4"></div>
                                    <strong>Evolve</strong>

                                </td>
                                <td>
                                    <div class="circle4"></div>
                                    <strong>Evolve</strong>

                                </td>
                                <td>
                                    <div class="circle4"></div>
                                    <strong>Evolve</strong>

                                </td>
                                <td>
                                    <div class="circle4"></div>
                                    <strong>Evolve</strong>

                                </td>
                                <td>
                                    <div class="circle4"></div>
                                    <strong>Evolve</strong>

                                </td>
                            </tr>

                            <tr>
                                <td><small>9:00 PM</small></td>
                                <td>
                                    <div class="circle"></div>
                                    <div class="circle2"></div>
                                    <div class="circle3"></div>
                                    <strong>Beasts</strong>

                                </td>
                                <td>
                                    <div class="circle"></div>
                                    <div class="circle2"></div>
                                    <div class="circle3"></div>
                                    <strong>Beasts</strong>

                                </td>
                                <td>
                                    <div class="circle"></div>
                                    <div class="circle2"></div>
                                    <div class="circle3"></div>
                                    <strong>Beasts</strong>

                                </td>
                                <td>
                                    <div class="circle"></div>
                                    <div class="circle2"></div>
                                    <div class="circle3"></div>
                                    <strong>Beasts</strong>

                                </td>
                                <td>
                                    <div class="circle"></div>
                                    <div class="circle2"></div>
                                    <div class="circle3"></div>
                                    <strong>Beasts</strong>

                                </td>
                                <td>
                                    <div class="circle"></div>
                                    <div class="circle2"></div>
                                    <div class="circle3"></div>
                                    <strong>Beasts</strong>

                                </td>
                            </tr>


                        </tbody>
                    </table>

                    <div class="row">
                        <div class="item">
                            <div class="circle11"></div>
                            <span class="text1"> Beginner </span>
                        </div>

                        <div class="item">
                            <div class="circle22"></div>
                            <span class="text2"> Intermediate </span>
                        </div>

                        <div class="item">
                            <div class="circle33"></div>
                            <span class="text3"> Advanced </span>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>





    <!--    PRICE LIST -->

    <section class="Price-List" id="Price-List">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 text-center">
                    <?php
                    echo '<h6 data-aos="fade-up">Group Training</h6>';
                    echo '<h2 class="text-white" data-aos="fade-up" data-aos-delay="200">Price List</h2>';
                    ?>
                </div>

                <div class="col-lg-12 py-5 col-md-12 col-12">
                    <table class="table table-bordered table-responsive schedule-table" data-aos="fade-up" data-aos-delay="300">

                        <thead class="thead-light">
                            <th>Sessions</th>
                            <th>Price</th>
                        </thead>

                        <tbody>
                            <tr>
                                <td class="priceslist"><small class="pricesslist">1 Session</small></td>
                                <td>
                                    <strong class="pricesslist">250 EGP</strong>
                                    <br>
                                </td>
                            </tr>

                            <tr>
                                <td class="priceslist"><small class="pricesslist">8 Sessions</small></td>
                                <td>
                                    <strong class="pricesslist">1400 EGP</strong>
                                    <BR><small class="pricesslist">4 WEEKS EXPIRY</small>
                                </td>
                            </tr>

                            <tr>
                                <td class="priceslist"><small class="pricesslist">12 Sessions</small></td>
                                <td>
                                    <strong class="pricesslist">1600 EGP</strong>
                                    <BR><small class="pricesslist">4 WEEKS EXPIRY</small>
                                </td>
                            </tr>
                            <tr>
                                <td class="priceslist"><small class="pricesslist">1 Month</small></td>
                                <td>
                                    <strong class="pricesslist">2500 EGP</strong>
                                    <br><small class="pricesslist">UNLIMITED</small>
                                </td>
                            </tr>
                            <tr>
                                <td class="priceslist"><small class="pricesslist">30 Sessions</small></td>
                                <td>
                                    <strong class="pricesslist">3000 EGP</strong>
                                    <BR><small class="pricesslist">8 WEEKS EXPIRY</small>
                                </td>
                            </tr>
                            <tr>
                                <td class="priceslist"><small class="pricesslist">50 Sessions</small></td>
                                <td>
                                    <strong class="pricesslist">4800 EGP</strong>
                                    <BR><small class="pricesslist">12 WEEKS EXPIRY</small>
                                </td>
                            </tr>
                            <tr>
                                <td class="priceslist"><small class="pricesslist">6 Months</small></td>
                                <td>
                                    <strong class="pricesslist">9000 EGP</strong>
                                    <br><small class="pricesslist">UNLIMITED</small>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-12 text-center mt-4">
                    <button class="btn btn-primary" onclick="bookSession('1')">Book</button>
                </div>
            </div>
        </div>





    <!-- Payment Window Modal -->

    <div class="modal fade" id="paymentWindow" tabindex="-1" role="dialog" aria-labelledby="paymentWindowLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="paymentWindowLabel">Payment Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label for="sessions">Select Sessions:</label>
                    <select class="form-control" id="sessions">
                        <option value="1">1 Session</option>
                        <option value="8">8 Sessions</option>
                        <option value="12">12 Sessions</option>
                        <option value="1month">1 Month</option>
                        <option value="30">30 Sessions</option>
                        <option value="50">50 Sessions</option>
                        <option value="6months">6 Months</option>
                    </select>
                    <br>
                    <label for="cardNumber">Card Number:</label>
                    <input type="text" class="form-control" id="cardNumber" placeholder="Enter 16-digit card number" pattern="\d{16}" maxlength="16" required>
                    <br>
                    <label for="expiryDate">Expiry Date:</label>
                    <input type="text" class="form-control" id="expiryDate" placeholder="Enter expiry date" required>
                    <br>
                    <label for="cvv">CVV:</label>
                    <input type="text" class="form-control" id="cvv" placeholder="Enter 3-digit CVV" pattern="\d{3}" maxlength="3" required>
                    <br>
                    <button class="btn btn-primary" onclick="processPayment()">Payment</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function bookSession(sessionId) {
            // Check login status here (example: assume the user is not logged in)
            const isLoggedIn = false;

            if (isLoggedIn) {
                // Perform the booking process
                openPaymentWindow(sessionId);
            } else {
                // Display alert message
                alert("Please log in to book.");
            }
        }

        function openPaymentWindow() {
            $('#paymentWindow').modal('show');
        }

        function processPayment() {
            // Retrieve selected session
            var selectedSession = document.getElementById('sessions').value;

            // Retrieve card details
            var cardNumber = document.getElementById('cardNumber').value;
            var expiryDate = document.getElementById('expiryDate').value;
            var cvv = document.getElementById('cvv').value;

            // Validate card details
            var cardNumberPattern = /^\d{16}$/;
            var cvvPattern = /^\d{3}$/;
            if (!cardNumberPattern.test(cardNumber) || !cvvPattern.test(cvv)) {
                alert('Invalid details, please try again.');
                return;
            }

            // Perform your payment processing logic here
            alert('Payment processed successfully!');
        }
    </script>


    <!-- private training price list -->


    <div class="container black-bg">
        <div class="row">

            <div class="col-lg-12 col-12 text-center">
                <h6 data-aos="fade-up">Private Training</h6>

                <h2 class="text-white" data-aos="fade-up" data-aos-delay="200">Price List</h2>
            </div>

            <div class="col-lg-12 py-5 col-md-12 col-12">
                <table class="table table-bordered table-responsive schedule-table" data-aos="fade-up" data-aos-delay="300">

                    <thead class="thead-light">

                        <Th>Sessions</Th>
                        <th>Price</th>


                    </thead>

                    <tbody>
                        <tr>
                            <td class="priceslist"><small class="pricesslist">1 Session</small></td>
                            <td>
                                allooo
                                <strong class="pricesslist">400 EGP</strong>
                                <br>
                            </td>

                        </tr>

                        <tr>
                            <td class="priceslist"><small class="pricesslist">6 Sessions</small></td>
                            <td>
                                <strong class="pricesslist">2000 EGP</strong>
                                <BR>

                            </td>

                        </tr>

                        <tr>
                            <td class="priceslist"><small class="pricesslist">8 Sessions </small></td>
                            <td>
                                <strong class="pricesslist">2500 EGP</strong>
                                <BR>

                            </td>


                        </tr>
                        <tr>
                            <td class="priceslist"><small class="pricesslist"> 12 Sessions </small></td>

                            <td>
                                <strong class="pricesslist">3200 EGP</strong>
                                <br><small class="pricesslist">4 WEEKS EXPIRY </small>

                            </td>


                        </tr>
                        <tr>
                            <td class="priceslist"><small class="pricesslist">24 Sessions </small></td>
                            <td>
                                <strong class="pricesslist">4500 EGP</strong>
                                <BR><small class="pricesslist">6 WEEKS EXPIRY</small>

                            </td>


                        </tr>
                        <tr>
                            <td class="priceslist"><small class="pricesslist"> 40 Sessions </small></td>
                            <td>
                                <strong class="pricesslist">5500 EGP</strong>
                                <BR><small class="pricesslist">10 WEEKS EXPIRY</small>

                            </td>


                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </div>


    <div class="col-lg-12 text-center mt-4">
        <button class="btn btn-primary" onclick="bookSession('1')">Book</button>
    </div>

    </div>
</div>
    <!-- Payment Window Modal -->
    <div class="modal fade" id="paymentWindow" tabindex="-1" role="dialog" aria-labelledby="paymentWindowLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="paymentWindowLabel">Payment Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label for="sessions">Select Sessions:</label>
                    <select class="form-control" id="sessions">
                        <option value="1">1 Session</option>
                        <option value="8">8 Sessions</option>
                        <option value="12">12 Sessions</option>
                        <option value="1month">1 Month</option>
                        <option value="30">30 Sessions</option>
                        <option value="50">50 Sessions</option>
                        <option value="6months">6 Months</option>
                    </select>
                    <br>
                    <label for="cardNumber">Card Number:</label>
                    <input type="text" class="form-control" id="cardNumber" placeholder="Enter 16-digit card number" pattern="\d{16}" maxlength="16" required>
                    <br>
                    <label for="expiryDate">Expiry Date:</label>
                    <input type="text" class="form-control" id="expiryDate" placeholder="Enter expiry date" required>
                    <br>
                    <label for="cvv">CVV:</label>
                    <input type="text" class="form-control" id="cvv" placeholder="Enter 3-digit CVV" pattern="\d{3}" maxlength="3" required>
                    <br>
                    <button class="btn btn-primary" onclick="processPayment()">Payment</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function bookSession(sessionId) {
            // Check login status here (example: assume the user is not logged in)
            const isLoggedIn = false;

            if (isLoggedIn) {
                // Perform the booking process
                openPaymentWindow(sessionId);
            } else {
                // Display alert message
                alert("Please log in to book.");
            }
        }

        function openPaymentWindow(sessionId) {
            // Pass the session ID to the PHP script using AJAX or by updating the form action URL
            $('#paymentWindow').modal('show');
        }

        function processPayment() {
            // Retrieve selected session
            var selectedSession = document.getElementById('sessions').value;

            // Retrieve card details
            var cardNumber = document.getElementById('cardNumber').value;
            var expiryDate = document.getElementById('expiryDate').value;
            var cvv = document.getElementById('cvv').value;

            // Validate card details
            var cardNumberPattern = /^\d{16}$/;
            var cvvPattern = /^\d{3}$/;
            if (!cardNumberPattern.test(cardNumber) || !cvvPattern.test(cvv)) {
                alert('Invalid details, please try again.');
                return;
            }

            // Perform your payment processing logic here using PHP
            // You can submit the form data to a PHP script for further processing

            // Example: AJAX request to submit the form data to a PHP script
            $.ajax({
                url: 'process_payment.php',
                method: 'POST',
                data: {
                    session: selectedSession,
                    cardNumber: cardNumber,
                    expiryDate: expiryDate,
                    cvv: cvv
                },
                success: function(response) {
                    // Handle the response from the PHP script
                    alert(response);
                },
                error: function() {
                    alert('Error occurred while processing the payment.');
                }
            });
        }
    </script>
</section>
    <!-- CONTACT -->
    <section class="contact section" id="contact">
        <div class="container">
            <div class="row">
                <div class="ml-auto col-lg-5 col-md-6 col-12">
                    <h2 class="mb-4 pb-2" data-aos="fade-up" data-aos-delay="200">Feel free to ask anything</h2>

                    <form action="process_contact_form.php" method="post" class="contact-form webform" data-aos="fade-up" data-aos-delay="400" role="form">
                        <input type="text" class="form-control" name="cf-name" placeholder="Name">

                        <input type="email" class="form-control" name="cf-email" placeholder="Email">

                        <textarea class="form-control" rows="5" name="cf-message" placeholder="Message"></textarea>

                        <button type="submit" class="form-control" id="submit-button" name="submit">Send Message</button>
                    </form>
                </div>

                <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12">
                    <h2 class="mb-4" data-aos="fade-up" data-aos-delay="600">Where you can <span>find us</span></h2>

                    <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i> Europa Schule Kairo, Mivida Gate 7, New Cairo - Cairo, Egypt</p>

                    <div class="google-map" data-aos="fade-up" data-aos-delay="900">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3454.9566573657685!2d31.528648400000005!3d30.009400899999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14582389e3e32cdd%3A0x8925ad559e66498a!2sRAW%20Egypt!5e0!3m2!1sen!2seg!4v1679915264903!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Login-->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a href="#login" class="nav-link smoothScroll">Login</a>
        </li>
    </ul>

    <section class="contact section" id="login">
        <div class="container">
            <div class="row">
                <div class="ml-auto col-lg-5 col-md-6 col-12">
                    <h2 class="mb-4 pb-2" data-aos="fade-up" data-aos-delay="200">Login</h2>

                    <form action="login.php" method="post" class="contact-form webform" data-aos="fade-up" data-aos-delay="400" role="form">
                        <div class="form-group">
                            <label for="phone">Phone Number:</label>
                            <input type="tel" id="phone" name="phone" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control" id="submit-button" name="submit">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="ml-auto col-lg-4 col-md-5">
                    <p class="copyright-text">
                        <?php echo '© ' . date('Y') . ' Raw Egypt'; ?>
                    </p>
                </div>
                <div class="d-flex justify-content-center mx-auto col-lg-5 col-md-7 col-12">
                    <p class="mr-4">
                        <i class="fa fa-envelope-o mr-1"></i>
                        <a href="mailto:Rawegypt2021@gmail.com">Rawegypt2021@gmail.com</a>
                    </p>
                    <p>
                        <i class="fa fa-phone mr-1"></i> +201111651379<br>
                        +201275706666
                    </p>
                </div>
            </div>
        </div>
    </footer>

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
                    <form class="membership-form webform" role="form" action="process-membership.php" method="post">
                        <input type="text" class="form-control" name="cf-name" placeholder="Name" required>
                        <input type="email" class="form-control" name="cf-email" placeholder="Email" required>
                        <input type="tel" class="form-control" name="cf-phone" placeholder="Phone Number" pattern="[0-9]{4}[0-9]{3}[0-9]{4}" required>
                        <textarea class="form-control" rows="3" name="cf-message" placeholder="Medical History (Past Injuries)"></textarea>
                        <button type="submit" class="form-control" id="submit-button" name="submit">Submit Button</button>
                    </form>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>
    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>