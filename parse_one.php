<?php
define("HOST","localhost");
define("DATABASE","json_test");
define("PASSWORD","mysql");
define("USERNAME","root");

$match=array();
$temp=array();
$username=$_POST['username'];
$password=$_POST['password'];
//$username="Aditya";
//$password="Akash";

$link=@mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);

$query="SELECT * FROM hindi_contents";
@mysqli_query($link,"SET NAMES 'utf8'");
$result=mysqli_query($link,$query) or die("Not Done");
$i=0;
while($row=mysqli_fetch_row($result)){
    $temp[$i]=$row[1];
    $i++;
}
$match['success']=1;
$match['arr']=$temp;
$match['mobile']="9827042601";
$match['email']="adityasoni5859@gmail.com";
mysqli_close($link);
echo json_encode($match, JSON_UNESCAPED_UNICODE);
