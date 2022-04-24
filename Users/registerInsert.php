<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
$Name=$_POST['Name'];
$Email=$_POST['email'];
$Mobile=$_POST['mobile'];
$Username=$_POST['username'];
$Password=$_POST['password'];
$Status = "Pending";
$con = mysqli_connect ("localhost","root","","biodb");
$sql="insert into users_reg(Name,Email,Mobile,Username,Password,Status) VALUES (
    '$Name','$Email','$Mobile','$Username','$Password','$Status'
)";
var_dump($sql);
if(mysqli_query($con,$sql)){
    echo '<script type="text/javascript">alert("Registration Completed Succesfully");window.location=\'register.php\';</script>';
}
