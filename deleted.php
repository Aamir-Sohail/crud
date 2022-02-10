<?php

$con = mysqli_connect("localhost","root","","local_use");


if(isset($_POST['delete']))
{
    $id = $_POST['id'];

    $sql = "DELETE FROM login_local WHERE id='$id' ";
    $result = mysqli_query($con, $sql);

    if($result)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("location:fetch.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>