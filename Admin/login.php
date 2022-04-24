<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
$Username=$_POST['username'];
$Password=$_POST['password'];
$con = mysqli_connect("localhost","root","","job");

$sql = "select * from admin where UserName='".$Username."' and Password='".$Password."'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'loginPage.php\';</script>';
}
else
{
$_SESSION['Username']=$row['UserName'];
$_SESSION['ID'] = $row['UserId'];
header("location:index.php");
}
mysqli_close($con);
// echo $Username;