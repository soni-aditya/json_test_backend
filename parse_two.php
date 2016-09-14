<?php
define("HOST","localhost");
define("DATABASE","json_test");
define("PASSWORD","mysql");
define("USERNAME","root");

$match=array();
$username=$_POST['username'];
$password=$_POST['password'];
//$username="Aditya";
//$password="Akash";

$link=@mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);

$query="SELECT * FROM hindi_contents";
@mysqli_query($link,"SET NAMES 'utf8'");
$result=mysqli_query($link,$query) or die("Not Done");

if($row=mysqli_fetch_row($result)){
    $match['mobile']=$row[0];
    $match['email']=$row[1];
    $match['success']=1;
    $match['uname']=$username;
    $match['pword']=$password;
}
else{
    $match['success']=0;
}
mysqli_close($link);
echo json_encode($match, JSON_UNESCAPED_UNICODE);
