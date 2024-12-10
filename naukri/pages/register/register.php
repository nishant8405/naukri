<?php
session_start(); 

include "../../config/db.php";

if (isset($_POST['submit'])) {
 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];

    $sql = "INSERT INTO `users`(`name`, `email`, `password`, `mobile`) VALUES ('$name','$email','$password','$mobile')";
    $result = mysqli_query($con,$sql);
    if($result){
        // echo "Submit";
        header("Location: ../login/login.html");
        exit();
    }
    else{
        // echo "not submit";
        header("Location: register.php");
        exit();
    }

}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register on Naukri.com: Apply to Millions of Jobs Online</title>
    <link rel="icon" type="image/x-icon" href="image/download.png">
    <link rel="stylesheet" href="register.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div id="navbar">
        <div>
            <div><a href="../../home.html"><img id="logo"
                        src="https://static.naukimg.com/s/0/0/i/naukri-identity/naukri_gnb_logo.svg" alt=""></a></div>
            <span class="span1">Already Registered? <a href="../login/Login.html"> Login </a> here </span>
        </div>
    </div>

    <div id="container">
        <div id="content">
            <div class="left">
                <div class="leftDiv">
                    <img src="https://static.naukimg.com/s/7/104/assets/images/white-boy.a0d2814a.png" width="120px"
                        height="120px" alt="">
                    <h2>On registering, you can</h2>
                    <ul>
                        <li class="fa-solid fa-circle-check"><p class="p1">Build your profile and let recruiters find you</p></li>
                         <li class="fa-solid fa-circle-check"><p class="p1">Get job postings delivered right to your email</p></li>
                        <li class="fa-solid fa-circle-check"><p class="p1">Find a job and grow your career</p></li>
                    </ul>
                </div>
            </div>

            <div class="right">
                <form id="form" action="" method="post" onsubmit="return validateForm()">
                    <h1>Create your Naukri profile</h1>
                    <p class="heading-help">Search & apply to jobs from India's No.1 Job Site</p>

                    <div class="inputDivs">
                        <label for="name">Full name <span>*</span></label><br />
                        <input autocomplete="off" id="name" type="text" name="name" placeholder="What is Your Name?" />
                        <span class="error" id="nameError"></span>
                    </div>

                    <div class="inputDivs">
                        <label for="email">Email Id<span>*</span></label><br />
                        <input autocomplete="off" id="email" type="email" name="email"
                            placeholder="Tell us Your Email Id" />
                        <span class="error" id="emailError"></span>
                    </div>

                    <div class="inputDivs">
                        <label for="password">Password <span>*</span></label><br />
                        <input autocomplete="off" id="password" name="password" type="password"
                            placeholder="(Minimum 6 Characters)" />
                        <span class="error" style="color:red" id="passwordError"></span>
                    </div>

                    <div class="inputDivs">
                        <label for="mobile">Mobile Number<span>*</span></label><br />
                        <input autocomplete="off" type="number" id="mobile" name="mobile"
                            placeholder="Enter mobile number" />
                        <span class="error" id="mobileError"></span>
                    </div>

                    <div class="inputDivs">
                        <label for="">Work Status <span>*</span></label><br />
                        <div id="work">
                            <div>

                                <div>

                                    <h2>I am Experienced</h2>
                                    <p>I have work experience (excluding internships)</p>
                                </div>
                                <div class="icons" style="margin-right:-55px">
                                    <img src="//static.naukimg.com/s/7/104/assets/images/briefcase.bdc5fadf.svg">
                                </div>
                            </div>
                            <div>
                                <div>
                                    <h2>I am Fresher</h2>
                                    <p>I am a student/ Haven't worked after graduation</p>
                                </div>
                                <div class="icons" style="margin-right:-55px">
                                    <img src="//static.naukimg.com/s/7/104/assets/images/schoolbag.a54cbf7a.svg">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <input type="checkbox" id="check1" name="check1">
                        <p>Send me important updates & promotions via SMS, email, and <img src="image/download.jpg" alt=""
                                width="20" height="20">WhatsApp</p>
                        <span class="error" style="color:red" id="check1Error"></span>
                    </div>

                    <p style="margin-top: 25px; font-size :11px;">By clicking Register, you agree to the <a
                            href="#">Terms and Conditions</a> & <a href="#">Privacy Policy</a> of Naukri.com</p>

                    <button id="signup" type="submit" name="submit">Register Now</button>
                </form>

                <div id="googleDiv">
                    <p id="OR">OR</p>
                    <div id="options">
                        <h4>Continue with</h4>
                        <div id="googleButton">
                            <img src="image/google.png" alt="">
                            <h3>Google</h3>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <footer>
        <div>
            <ul>
                <li><a href="#" target="_blank">About Us</a></li>
                <li><a href="#" target="_blank">Contact Us</a></li>
                <li><a href="#" target="_blank">FAQs</a></li>
                <li><a href="#" target="_blank">Terms and Conditions</a></li>
                <li><a href="#" target="_blank">Report a Problem</a></li>
                <a href="#" target="_blank">Privacy Policy</a>
            </ul>
        </div>
        <p>All rights reserved © 2024 Info Edge India Ltd.</p>
    </footer>

    <script src="register.js">


    </script>
</body>

</html>