<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $con = mysqli_connect('localhost','root', '', 'sneaktion');
    
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    $sql = mysqli_query($con,"select * from admin where username='$username' AND password='$pass'");

    $cek = mysqli_fetch_array($sql);
    if(isset($cek)){
        echo "ada";
    }else{
        echo "invalid username";
    }
    mysqli_close($con);
}

?>