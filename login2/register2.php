<?php
session_start();
include("../api/connect.php");   // to connect to the database

$name=$_POST['name'];      // to store name into the name column
$mobile=$_POST['mobile'];    // to store mobile number into the mobile column
$password=$_POST['password'];   // to store the password into the password column
$cpassword=$_POST['cpassword'];  // its just for confirmation of password
$address=$_POST['address'];     //  to store the address into the address column
$voterid=$_POST['voterid'];
$email=$_POST['email'];
$image=$_FILES['photo']['name'];   // to store the image name into the name column
$imgsize=$_FILES['photo']['size'];   
$tmpname=$_FILES['photo']['tmp_name'];   // to store the actual image as a temporary name 
$imgtype=$_FILES['photo']['type'];

$role=$_POST['role'];   // to store the role into the role column


/*
$target_dir = "uploads/";
$image = $target_dir . basename($_FILES["photo"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($image,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["photo"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
} */
/*
$name=$_FILES['photo']['name'];
$tmpname=$_FILES['photo']['tmpname'];
*/




if($password==$cpassword){             // to check password and cpassword is same or not
  $check=mysqli_query($connect,"SELECT * FROM user WHERE voterid='$voterid' OR email='$email' ");
  if(mysqli_num_rows($check)==0){
    $userdata=mysqli_fetch_array($check);
    $groups=mysqli_query($connect,"SELECT * FROM user WHERE role='2' ");
    $groupsdata=mysqli_fetch_all($groups, MYSQLI_ASSOC);

    $_SESSION['userdata']=$userdata;
    $_SESSION['groupsdata']=$groupsdata;


   move_uploaded_file($tmpname,"../uploads/".$image);      // to upload the actual image file into a spacific folder
    $insert = mysqli_query($connect , " INSERT INTO user (name, mobile, password, voterid, email, address, image, role, status, votes) VALUES ('$name', '$mobile', '$password', '$voterid', '$email', '$address', '$image', '$role', 0,0)");  // mysql query to insert all data into the column
 

if($insert)
{
    echo '
    <script>
    alert("registration successful !");
    window.location="register2.html";
</script>';
}    
else{
    echo '
    <script>
    alert("some error occured !");
    window.location="register2.html";
</script> 
    ';
    
}
  }
  else{
    echo '
    <script>
    alert("user already exist, voterid and email should be different... !");
    window.location="register2.html";
</script> 
    ';

  }
}
else{
    echo '
          <script>
                  alert("password and confirm password does not match !");
                  window.location="register2.html";
          </script>
    ';
} 
?>