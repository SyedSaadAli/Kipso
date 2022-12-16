<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme24.css">
  
</head>
<body>
    <div class="form-body on-top">
        <div class="website-logo">
            <a href="index.php">
                <div class="logo">
                    <img class="logo-size" src="images/logop.png" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder simple-info">
                    <div><img src="images/signup.png" alt=""></div>
                    <div><h3>Register</h3></div>
                    <h3><?php if($_SESSION['message'] != ''){
                        echo $_SESSION['message'];
                    } ?></h3>
                </div>
                <div>
                    <br>
                    <h6 style="color: aliceblue;">If you already signed up<a style="color: bisque;" href="login.php"> login here</a>
                    </h6>
                </div>    
            </div>
            
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <form action="code.php" method="post">
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control" name="fname" placeholder="First name" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control" name="lname" placeholder="Last name" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control" name="email" placeholder="E-mail Address" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="number" class="form-control" name="number" placeholder="Phone Number" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <input type="password" id="password" class="form-control" name="pass" placeholder="Password" required>
                                
                                </div>

                                <div class="col-12 col-sm-6">
                                    <input type="password" id="confirm_password" class="form-control" name="Cpass" placeholder="Confirm Password" required>
                                </div>
                               
                            </div>
                            
                         
                            <div class="row">
                                <div class="col-12 col-sm-12">
                                    <div class="custom-file">
                                        <input type="file" name="profilepic" class="custom-file-input">
                                        <label class="custom-file-label">Profile photo</label>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="row top-padding">
                                <div class="col-12 col-sm-6">
                                    <input type="checkbox" id="chk1" required><label for="chk1">I agree on <a href="#">terms & conditions</a> of Avairosoft</label>
                                </div>
                               
                                <div class="col-12 col-sm-6">
                                    <div class="form-button text-right">
                                        <button id="submit" type="submit" name="reg_btn" class="ibtn less-padding">Sign Up</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var password = document.getElementById("password")
 , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
    </script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>