<?php
$conn = mysqli_connect('localhost','root','','user_db');
?>
<?php
@include 'config.php';
session_start();
if(isset($_POST['submit'])){
 $email = mysqli_real_escape_string($conn, $_POST['email']);
 $pass = md5($_POST['password']);
 $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";
 $result = mysqli_query($conn, $select);
 if(mysqli_num_rows($result) > 0){
 $row = mysqli_fetch_array($result);
 if($row['user_type'] == 'student'){
 header('location:home.html');
 }elseif($row['user_type'] == 'faculty'){
 header('location:home.html');
 }
 
 }else{
 $error[] = 'incorrect email or password!';
 }
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>FoodMunch</title>
 <!-- custom css file link -->
 <link rel="stylesheet" href="style.css">
</head>
<body>
 
<div class="form-container">
 <form action="" method="post">
 <h3>Login</h3>
 <?php
 if(isset($error)){
 foreach($error as $error){
 echo '<span class="error-msg">'.$error.'</span>';
 };
 };
 ?>
 <input type="email" name="email" required placeholder="Enter your email">
 <input type="password" name="password" required placeholder="Enter your password">
 <input type="submit" name="submit" value="Login" class="form-btn">
 <p>Don't have an account? <a href="signin.php">Sign In</a></p>
 </form>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>FoodMunch</title>
 <!-- custom css file link -->
 <link rel="stylesheet" href="style.css">
</head>
<body>
 
<div class="form-container">
 <form action="" method="post">
 <h3>Login</h3>
 <?php
 if(isset($error)){
 foreach($error as $error){
 echo '<span class="error-msg">'.$error.'</span>';
 };
 };
 ?>
 <input type="email" name="email" required placeholder="Enter your email">
 <input type="password" name="password" required placeholder="Enter your password">
 <input type="submit" name="submit" value="Login" class="form-btn">
 <p>Don't have an account? <a href="signin.php">Sign In</a></p>
 </form>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>FoodMunch</title>
 <!-- custom css file link -->
 <link rel="stylesheet" href="style.css">
</head>
<body>
 
<div class="form-container">
 <form action="" method="post">
 <h3>Login</h3>
 <?php
 if(isset($error)){
 foreach($error as $error){
 echo '<span class="error-msg">'.$error.'</span>';
 };
 };
 ?>
 <input type="email" name="email" required placeholder="Enter your email">
 <input type="password" name="password" required placeholder="Enter your password">
 <input type="submit" name="submit" value="Login" class="form-btn">
 <p>Don't have an account? <a href="signin.php">Sign In</a></p>
 </form>
</div>
</body>
</html>
