<?php
include "config.php";

$name = $_POST['name'];
$email = $_POST['email'];
$lang = $_POST['lang'];

$foundjquery = "Not found";
if(in_array('jQuery',$lang)){
    $foundjquery = "found";
}
// Converting the array to comma separated string
$lang = implode(",",$lang);

// check entry
$sql = "SELECT COUNT(*) AS cntuser from userinfo WHERE email='".$email."'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$count = $row['cntuser'];

if($count > 0){
    // update
    $updatequery = "UPDATE userinfo SET name='".$name."',lang='".$lang."' WHERE email='".$email."'";
    mysqli_query($con,$updatequery);
}else{
    // insert
    $insertquery = "INSERT INTO userinfo(name,email,lang) VALUES('".$name."','".$email."','".$lang."')";
    mysqli_query($con,$insertquery);
}
$return_arr = array('name'=>$name,'email'=>$email,'lang'=>$lang,"foundjquery"=>$foundjquery);

echo json_encode($return_arr);