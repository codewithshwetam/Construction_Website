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
<link rel="stylesheet" href="assets/css/A.style.css.pagespeed.cf.edZ-6045Sf.css">
</head>
<body>
<main class="login-bg">

<div class="login-form-area" style="margin-bottom: -60px">
<div class="login-form">

<div class="login-heading">
<span>Login</span>
<p>Enter Login details to get access</p>
</div>
<form method="post">
<div class="input-box">
<div class="single-input-fields">
<label>Email Address</label>
<input type="text" placeholder="Email address" name="email">
</div>
<div class="single-input-fields">
<label>Password</label>
<input type="password" placeholder="Enter Password" name="password">
</div>
</div>
<div class="login-footer">
<p>Don’t have an account? <a href="register.php">Sign Up</a> here</p>
<button class="submit-btn3" type="submit" name="submit" style="background-color: #FFC30B">Login</button>
</form>
</div>
</div>
</div>

</main>

</html>
 <?php
  if(isset($_POST['submit'])){
      $email = $_POST['email'];
      $password = $_POST['password'];
      $status = 1;
      $data = mysqli_query($sql_con,"SELECT *from leaders where email='$email' AND password='$password'");
      $datarow = mysqli_num_rows($data);
      if ($datarow > 0) {
        $row = mysqli_fetch_array($data);
        $value1 = $row["email"];
        $value2 = $row["password"];
        $value3 = $row['id'];
        $value4 = $row['status'];
        if ($status !=$value4) {
          echo "<script>alert('Wait for account approval!')</script>";
          exit();
        }
        session_start();
        $_SESSION['user_id'] = $value3;
        header("location: index.php");
      }
      else{
        echo "<script>alert('Wrong information please try again!')</script>";
      }
    } 
  ?>