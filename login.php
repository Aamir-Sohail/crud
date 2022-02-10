
<?php 
$con =mysqli_connect('localhost','root','','local_use');
if (isset($_POST['password'])) {
  $username =$_POST['username'];
  $password =$_POST['password'];


  $sql ="SELECT username from login_local where username ='$username' AND password ='$password'";
  $result =mysqli_query($con,$sql);
  $row =mysqli_fetch_assoc($result);
  $count =mysqli_num_rows($result);
  if($count>0){
    $_SESSION['name'] = $row['username'];
    header("Location:index.php");
  }
  else {
    header("Location:login.php");
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
            <span class="details">Username</span>
            <input type="text" name="username"  placeholder="Enter your username" required>
          </div>
          
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password"  placeholder="Enter your password" required>
          </div>
          
        </div>
        
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