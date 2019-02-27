<?php
session_start();
 include('includes/database.php');
 if(isset($_GET['vkey'])){
  $vkey = $_GET['vkey'];
  $conn = mysqli_connect(dbserver, dbuser, dbpass,dbname);
  $resultset = $conn->query("SELECT verified,vkey from user where verified=0 and vkey='$vkey' limit 1");
  if($resultset->num_rows == 1){
    $update = $conn->query("UPDATE user SET verified=1 where vkey = '$vkey' limit 1");
    if($update){
      echo "Success of verification . Please Login now";
    }
  }
  else{
    echo "Account Alredy verified";
  }

}
else{
  echo "Something went wrong";
}


?>


