<?php

$con =mysqli_connect('localhost','root','','local_use');
if (isset($_POST['login'])) {
  $name =mysqli_real_escape_string($con,$_POST['name']);
  $username =mysqli_real_escape_string($con,$_POST['username']);
  $email =mysqli_real_escape_string($con,$_POST['email']);
$password = $_POST['password'];
  $phone =mysqli_real_escape_string($con,$_POST['phone']);


  // $gender =$_POST['gender'];


  $sql="INSERT INTO login_local(name,username,email,phone,password) VALUES('$name','$username','$email','$phone','$password')";
  
  $result =mysqli_query($con,$sql);
 


  if ($result) {
    echo "<script> alert('Register Successful')</script>";
  }
  else{
    echo "<script> alert('Register UnSuccessful')</script>";
  }
}



?>


<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="reg.css">
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="" method="POST" id="formsubmit">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="name"  placeholder="Enter your name"  required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="username"  placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email"  placeholder="Enter your email" required >
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="phone"  placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password"  placeholder="Enter your password" required>
          </div>
          
        </div>
        <!-- <div class="gender-details">
          <input type="radio" name="gender" id="dot-1" >
          <input type="radio" name="gender" id="dot-2" >
          <input type="radio" name="gender" id="dot-3" >
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender" name="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender" name="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender" name="gender">Prefer not to say</span>
            </label>
          </div>
        </div> -->
        <div class="button">
          <input type="submit" name="login" id="submit" value="Register">
        </div>
      </form>
    </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function(){
     var form = $('#myform');
     $('#submit').click(function(){
    
    $ajax({
        url:form-attr('action'),
        type:'post'
        data:$("#myform input").serialize(),
        success:function(data){
        console.log(data);
      }
          
    });

     });

    });



  </script>


</body>
</html>
