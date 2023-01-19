<?php
    session_start();
     include("connect.php"); 
     

     $email=mysqli_real_escape_string($connect,$_POST['email']);
     $emailquery= " select * from user where email='$email' ";
     $query= mysqli_query($connect,$emailquery);
     $emailcount=mysqli_num_rows($query);
   

     if($emailcount){


        
        $userdata=mysqli_fetch_assoc($query);
        $name=$userdata['name'];
          $Ma="rajdewangan448@gmail.com";
         $subject="password reset";
         $voterid=$userdata['voterid'];
         $body="Hi, $name. click here to reset your password http://localhost/my project/route/reset_password.php?voterid=$voterid";
         $sender_email="From: dewangantrilok245@gmail.com";
        
        if(mail($email, $subject, $body, $sender_email)){
            $_SESSION['msg']= "check your mail to reset your password $email ";
            header('location:login.html');
        }
        else{  
            echo '
          <script>
                  alert("email sending fail... !");
                  window.location="../route/forgot.html";
          </script>
    ';
        }
     }
     else{ 
        echo '
              <script>
                      alert("email not found !");
                      window.location="../route/forgot.html";
              </script>
        ';
    } 
?>