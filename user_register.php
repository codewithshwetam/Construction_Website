<?php
  include('admin/include/dbcon.php');
?>
<!doctype html>
<html class="no-js" lang="zxx">
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Construction</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="assets/img/images.png">

<link rel="stylesheet" href="assets/css/A.bootstrap.min.css%2bowl.carousel.min.css%2bslicknav.css%2banimate.min.css%2bmagnific-popup.css%2bfontawesome-all.min.css%2bthemify-icons.css%2bslick.css%2bnice-select.css%2cMcc.MRfFe6xguY" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
<link rel="stylesheet" href="assets/css/A.style.css.pagespeed.cf.edZ-6045Sf.css">
</head>
<body>
<main class="login-bg">

<div class="register-form-area" style="margin-bottom: -60px;">
<div class="register-form text-center">

<div class="register-heading">
<span>Sign Up</span>
<p>Create your account to get full access</p>
</div>
<form method="post" enctype="multipart/form-data" onsubmit="return validate();">
<div class="input-box">
<div class="single-input-fields">
<label>Full name</label>
<input type="text" required="true" placeholder="Enter full name" name="fname" id="fname">
<span class="text-danger" style="color: red" id="sfname"></span>
</div>
<div class="single-input-fields">
<label>Email Address</label>
<input type="email" required="true" placeholder="Enter email address" name="email" id="email">
<span class="text-danger" style="color: red" id="semail"></span>
</div>
<div class="single-input-fields">
<label>Mobile Number</label>
<input type="Number" required="true" placeholder="Enter Mobile Number" name="phone" id="phone">
<span class="text-danger" style="color: red" id="sphone"></span>
</div>
<div class="single-input-fields" style="position: relative;">
<label>Password</label>
<input type="password" required="true" placeholder="Enter Password" name="password" id="password">
<!-- <i class="fa fa-fw fa-eye" style="color: red"></i> -->
<i class="bi bi-eye-slash" id="togglePassword" style="cursor: pointer; position: absolute;top: 42px;
right: 15px;"></i>
</div>
<div class="single-input-fields" style="position: relative;">
<label>Confirm Password</label>
<input type="password" placeholder="Confirm Password" name="cpassword" id="cpassword">

<i class="bi bi-eye-slash" id="togglePassword2" style="cursor: pointer; position: absolute;top: 42px;
right: 15px;"></i>
<span class="text-danger" style="color: red" id="scpassword"></span>
</div>

<div class="single-input-fields" >
<label>Profile Picture</label>
<input type="file" placeholder="Profile Picture" style="padding: 12px;" name="img" id="profile" required="true">
<span class="text-danger" style="color: red" id="errorBlock"></span>
</div>

</div>

<div class="register-footer">
<p> Already have an account? <a href="user_login.php"> Login</a> here</p>
<button class="submit-btn3" type="submit" name="submit" style="background-color: #FFC30B">Sign Up</button>
</div>
</form>
</div>
</div>

</main>
<script type="text/javascript">
    const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#password');
togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye / eye slash icon
    this.classList.toggle('bi-eye');
});
</script>

<script type="text/javascript">
    const togglePassword2 = document.querySelector('#togglePassword2');
const password2 = document.querySelector('#password2');
togglePassword2.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password2.getAttribute('type') === 'password' ? 'text' : 'password';
    password2.setAttribute('type', type);
    // toggle the eye / eye slash icon
    this.classList.toggle('bi-eye');
});
</script>

<script type="text/javascript">
        function validate(){
            var fname = document.getElementById('fname').value;
            var email = document.getElementById('email').value;
            var phone = document.getElementById('phone').value;
            var pass = document.getElementById('password').value;
            var cpass = document.getElementById('cpassword').value;

            var fnameCheck = /^[A-Za-z]{3,20}$/;
            var phoneCheck = /^((\+91)|(0091))-{0,1}\d{3}-{0,1}\d{7}$|^\d{11}$|^\d{4}-\d{7}$/;
            var emailCheck = /^([\w-\.]+@([\w-]*\.)+[\w-]{2,4})?$/;
            
            if (fnameCheck.test(fname)) {
                document.getElementById('fname').innerHTML = " ";
            }
            else{
                document.getElementById('sfname').innerHTML = "** Name is invalid !"; 
                return false;  
            }
            if (!isNaN($("phone").val())) {
            }
            else if (phoneCheck.test(phone)) {
                document.getElementById('sphone').innerHTML = " ";
            }
            else{
                document.getElementById('sphone').innerHTML = "** Phone number is invalid !"; 
                return false;  
            }
            if (emailCheck.test(email)) {
                document.getElementById('semail').innerHTML = " ";
            }
            else{
                document.getElementById('semail').innerHTML = "** Email is invalid !"; 
                return false;  
            }
            if (cpass!=pass) {

                document.getElementById('scpassword').innerHTML = "** Password is not matching !";
                return false;
            }
            else{
                
                document.getElementById('scpassword').innerHTML = " ";
            }
            
        }
    </script>

</html>

<?php
if (isset($_POST['submit'])) {
    	$folder = "clients/";
        
    $filename = $_FILES['img']["name"];
    $unique = uniqid().$filename;
    $temname = $_FILES['img']["tmp_name"];
    $size = $_FILES['img']["size"];
    
    $target = $folder.basename($unique);
    $filetype = strtolower(pathinfo($target,PATHINFO_EXTENSION));
    if ($filetype !="jpg" && $filetype !="png" && $filetype !="jpeg") {
        echo "<script>document.getElementById('errorBlock').innerHTML = '** Invalid file format'; </script>";
        exit();
    }
    else if($size > 10485760){
        echo "<script>document.getElementById('errorBlock').innerHTML = '** File is larger than 10MP';</script>";
        exit();
    }
    else {
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $Password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    if ($Password !==$cpassword) {
        echo "<script>alert('Passwords are not matching!!!')</script>";
        exit();
    }
    move_uploaded_file($temname,'clients/'.$target);
    mysqli_query($sql_con,"INSERT INTO clients(fname,email,phone,password,img) VALUES ('$fname','$email','$phone','$cpassword','$target')");
  echo "<script>alert('You are successfully Registered!!!')</script>";
  echo "<script>window.location = 'user_login.php'</script>";
    }

}
  ?>