<html>
<head>
    <title>admin dashboard</title>
    <style>
        table{
            border:1px solid black;
            border-radius:4px;
        }
        table tr{
            border:1px solid black;
            border-radius:4px;
        }
        table tr th{
            border:1px solid black;
            background-color:yellow;
            border-radius:4px;
        }
       table tr th td{
            border:1px solid black;
            background-color:blue;
        }
        tr:nth-child{
            background-color:#f2f2f2;
            border:1px solid black;
        }
        tr:nth-child(even){
            background-color:#f2f2f2;
            border:1px solid black;
        }
        </style>

</head>
<body>
 <h3>VOTERS TABLE</h3>
 <div id="voter-div">
    <table id="voter">
    <tr>
        <th>Voterid_id</th>
        <th>name</th>
        <th>mobile</th>
        <th>email</th>
        <th>address</th>
        <th>role</th>
    </tr>
    <?php
       session_start();
       include("../api/connect.php");
       $sql="SELECT voterid, name, mobile, email, address, role FROM user WHERE role=1";
       $result= mysqli_query($connect,$sql);
       if(mysqli_num_rows($result)>0){
         while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
             echo"<tr><td>".$row['voterid']."</td><td>".$row['name']."</td><td>".$row['mobile']."</td><td>".$row['email']."</td><td>".$row['address']."</td><td>".$row['role']."</td></tr>";

         }
       }
       else{
           echo" 0 record found...";
       }

?>
    </table>
</div>
<br><br>

<h3>PARTY TABLE</h3>
<div id="party-div">
    <table id="party">
      <tr>  
        <th>party_id</th>
        <th>party_name</th>
        <th>mobile</th>
        <th>email</th>
        <th>address</th>
        <th>role</th>
      </tr>  
      <?php
       
       include("../api/connect.php");
       $sql="SELECT voterid, name, mobile, email, address, role FROM user WHERE role=2";
       $result= mysqli_query($connect,$sql);
       if(mysqli_num_rows($result)>0){
         while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
             echo"<tr><td>".$row['voterid']."</td><td>".$row['name']."</td><td>".$row['mobile']."</td><td>".$row['email']."</td><td>".$row['address']."</td><td>".$row['role']."</td></tr>";

         }
       }
       else{
           echo" 0 record found...";
       }

?>
    </table>
</div>

</body>
</html>