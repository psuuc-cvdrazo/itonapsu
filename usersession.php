<?php
   include('connect.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select Studentid from user where Studentid = '$user_check'");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['Studentid'];
   
   if(!isset($_SESSION['login_user'])){
      header("location: index.php");
      die();
   }   
?>