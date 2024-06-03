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
<form method="post" enctype="multipart/form-data">
<div class="input-box">
<div class="single-input-fields">
<label>Full name</label>
<input type="text" required="true" placeholder="Enter full name" name="fname">
</div>
<div class="single-input-fields">
<label>Email Address</label>
<input type="email" required="true" placeholder="Enter email address" name="email">
</div>
<div class="single-input-fields">
<label>Mobile Number</label>
<input type="Number" required="true" placeholder="Enter Mobile Number" name="phone">
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
<input type="password" placeholder="Confirm Password" name="cpassword" id="password2">
<i class="bi bi-eye-slash" id="togglePassword2" style="cursor: pointer; position: absolute;top: 42px;
right: 15px;"></i>
</div>

<div class="single-input-fields" >
<label>Select Designation</label>
<SELECT required name="designation" style="padding: 12px;margin-bottom: 10px; width: 100%;border: 1px solid lightgray">
    <option value="">Choose...</option>
    <?php
        $data = mysqli_query($sql_con,"SELECT *from designations");
        while ($row = mysqli_fetch_array($data)) {
            $des_id = $row['id'];
            $des_name =$row['des_name'];
    ?>
    <option value="<?php echo $des_id?>"><?php echo $des_name?></option>
<?php }?>
</SELECT>
</div>

<div class="single-input-fields" >
<label>Profile Picture</label>
<input type="file" placeholder="Profile Picture" style="padding: 12px;" name="img">
</div>

</div>

<div class="register-footer">
<p> Already have an account? <a href="login.php"> Login</a> here</p>
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

</html>

<?php
if (isset($_POST['submit'])) {
	$user_type = $_POST['signupas'];
	if ($user_type=="buyer") {
		$folder = "buyers/";	
	}
    else{
    	$folder = "sellers/";
    }
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
    $designation = $_POST['designation'];
    $status = 0;
    if ($Password !==$cpassword) {
        echo "<script>alert('Passwords are not matching!!!')</script>";
    }
    move_uploaded_file($temname,'sellers/'.$target);
    mysqli_query($sql_con,"INSERT INTO leaders(fname,email,phone,password,img,leader_role,status) VALUES ('$fname','$email','$phone','$cpassword','$target','$designation','$status')");
  echo "<script>alert('You are successfully Registered wait for account approval!!!')</script>";
  echo "<script>window.location = 'login.php'</script>";
    }

}
  ?>