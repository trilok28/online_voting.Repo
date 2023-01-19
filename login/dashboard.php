<?php                                              

   session_start();
    if(!isset($_SESSION['userdata'])){
        header("location: login.html");
    }
    $userdata=$_SESSION['userdata'];
    $groupsdata=$_SESSION['groupsdata'];

    if($_SESSION['userdata']['status']==0)
    {
        $status= '<b style="color:red">Not Voted</b>';
    }
    else{
        $status= '<b style="color:green">Voted</b>';
    }
?>
<html>
    <head>
        <title>Online Voting System - dashboard</title>
        <link rel="stylesheet" href="../CSS/stylesheet2.css">
        
        <style>
            #group{
                float: right;
                background-color: white;
                width: 60%;
                padding: 20px;
}

            }
        </style>
    </head>
     
    <body>
    

      <div id="headersection">
                           <form action="login.html" method="POST"><button  id="back">back</button></form>
                           <a href="../api/logout.php"><button  id="logout">logout</button></a>
                           <h1>Online Voting System</h1>
      </div><hr>    


      <div id="mainpanel">
          
          
      <div id="profile">
      <center><h3>PROFILE</h3></center><hr>
      <div id="edit-delete">
                     <div id="edit">
                     <form action="update.html" method="POST">
                     <button id="editbtn">edit profile</button>
                    </form></div>
                    <div id="delete" >
                    <form  action="../intro_voting.html" method="POST">
                    <button id="dltbtn">delete profile</button>
                     </form></div>
                 </div>
                     <img style="padding-up:20px"  src= "../uploads/<?php echo $userdata['image'] ?>" height="100" width="100"><br><br>
               
                      <b>Name:  </b><?php echo $userdata['name'] ?><br><br>
                      <b>Voterid_id:  </b><?php echo $userdata['voterid'] ?><br><br>
                      <b>Mobile:  </b><?php echo $userdata['mobile'] ?><br><br>
                      <b>email_address:  </b><?php echo $userdata['email'] ?><br><br>
                      <b>Address:  </b><?php echo $userdata['address'] ?><br><br>
                      <b>Status:  </b><?php echo $status ?><br><br>
      </div>
 

      <div id="group">
      <center><h3>PARTY</h3></center><hr>
                       <?php
                             if($_SESSION['groupsdata']){
                                   for($i=0; $i<count($groupsdata); $i++){
                                   ?>
                                       <div>
                                           <img src= "../uploads/<?php echo $groupsdata[$i]['image'] ?>" height="100" width="100" style="float: right"><br>  
                                           <b>Group Name:  </b><?php echo $groupsdata[$i]['name'] ?><br><br>
                                           <b>Votes      :  </b><?php echo $groupsdata[$i]['votes'] ?><br><br>
                                           <form action="../api/vote.php" method="POST">
                                                <input type="hidden" name="gvotes" value=" <?php echo $groupsdata[$i]['votes'] ?>">
                                                <input type="hidden" name="gid" value=" <?php echo $groupsdata[$i]['id'] ?>">

                                                <?php
                                                    if($_SESSION['userdata']['status']==0){
                                                    ?>
                                                        <input type="submit" name="votebtn" value="vote" id="votebtn">
                                                    <?php
                                                    }
                                                    else{
                                                    ?>
                                                        <button type="button" disabled="disabled" name="votebtn" value="vote" id="voted">vote</button>
                                                    <?php
                                                    }
                                                ?>
                                                

                                           </form> <hr>
                                       </div>

                                   <?php
                                   }
                             }
                             else{

                             }
                       ?>

      </div>
      </div>


        

    </body>


    <!------  
    """
        self.result = QtWidgets.QTextBrowser(self.centralwidget)
        self.result.setGeometry(QtCore.QRect(1040, 400, 211, 61))
        self.result.setStyleSheet("background:transparent;\n"
"border-radius:none;\n"
"font-size:25px;\n"
"color:white;\n")
        self.result.setObjectName("result")
"""

    
    ---->


</html>
