<?php
   session_start();
?>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email=$_POST['email'];
$password=$_POST['password'];
$accountType=$_POST['accountType'];
$UserId;

//write your queries here

$sql = "Select UserId from  users where email='$email' and password='$password' and UserTypeId='$accountType'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $row=$result->fetch_assoc();

  $UserId=$row["UserId"];

}
else
{
  $myObj2 = new \stdClass();
  $myObj2->UserTypeId=-2;
  $myObj2->Id=-2;

  $myJSON = json_encode($myObj2);

  echo $myJSON;
}

if($accountType=='1')
{
  $sql2="Select CustomerId from customers where UserId='$UserId' ";
  $result2=$conn->query($sql2);
  if($result2->num_rows>0)
  {
    $row2=$result2->fetch_assoc();


    $_SESSION["Id"]=$row2["CustomerId"];
    $_SESSION["UserTypeId"]=$accountType;

    $myObj = new \stdClass();
    $myObj->UserTypeId=$accountType;
    $myObj->Id=$row2["CustomerId"];

    $myJSON = json_encode($myObj);

    echo $myJSON;
  }
}
else
{
  $sql2="Select ServiceProviderId from serviceproviders where UserId='$UserId' ";
  $result2=$conn->query($sql2);
  if($result2->num_rows>0)
  {
    $row2=$result2->fetch_assoc();

    $_SESSION["Id"]=$row2["ServiceProviderId"];
    $_SESSION["UserTypeId"]=$accountType;

    $obj = new \stdClass();
    $obj->UserTypeId=$accountType;
    $obj->Id=$row2["ServiceProviderId"];

    $myJSON = json_encode($obj);

    echo $myJSON;
  }
}

$conn->close();

?>