 <?php
    $con = mysqli_connect("localhost","root","","local_use");

if (isset($_GET['id'])) {
  $id =$_GET['id'];
}
   $id = $_GET['id'];

    $sql = "SELECT * FROM login_local WHERE id = '$id' ";
    $result = mysqli_query($con, $sql);

    if($result)
    {
        while($row = mysqli_fetch_array($result))
        {
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
      <form action="update.php" method="POST" id="formsubmit">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="name" value="<?php echo $row['name'] ?>" placeholder="Enter your name"  required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="username" value="<?php echo $row['username'] ?>"  placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" value="<?php echo $row['email'] ?>"  placeholder="Enter your email" required >
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="phone" value="<?php echo $row['phone'] ?>"  placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password"  value="<?php echo $row['password'] ?>" placeholder="Enter your password" required>
          </div>

          <div class="button">
          <input type="submit" name=submit value="Register">
        </div>
          
        </div>
           <?php
                    if(isset($_POST['submit']))
                    {
                        $name = $_POST['name'];
                        $username = $_POST['username'];
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        $phone = $_POST['phone'];

                        $sql = "UPDATE login_local SET name='$name', username='$username', email=' $email',phone ='$phone', password ='$password' WHERE id='$id'  ";
                        $result = mysqli_query($con, $sql);

                        if($result)
                        {
                            echo '<script> alert("Data Updated"); </script>';
                            header("location:fetch.php");
                        }
                        else
                        {
                            echo '<script> alert("Data Not Updated"); </script>';
                        }
                    }
                    ?>

                </div>
            </div>
            <?php
        }
    }
    else
    {
       
        ?>
        
        <?php
    }
    ?>
       
  <script type="text/javascript">
    $(document).ready(function(){
     var form = $('#formsubmit');
     $('#submit').click(function(){
    
    $ajax({
        url:form-attr('action'),
        type:'post'
        data:$("#formsubmit input").serialize(),
        success:function(data){
        console.log(data);
      }
          
    });

     });

    });



  </script>


</body>
</html>
