<?php
session_start();
include("../api/connect.php");
$voterid=$_POST['voterid'];
$password=$_POST['password'];
$role=$_POST['role'];

$check=mysqli_query($connect,"SELECT * FROM user WHERE voterid='$voterid' AND password='$password' AND role='$role' ");
if(mysqli_num_rows($check)>0){
     
    $userdata=mysqli_fetch_array($check);
    $groups=mysqli_query($connect,"SELECT * FROM user WHERE role='2' ");
    $groupsdata=mysqli_fetch_all($groups, MYSQLI_ASSOC);

    $_SESSION['userdata']=$userdata;
    $_SESSION['groupsdata']=$groupsdata;

    echo '
    <script>
            window.location="dashboard2.php";
    </script> ';
}


else{
    echo '
          <script>
                  alert("invalid credential or user not found !");
                  window.location="login2.html";
          </script> 
          ';}

?>