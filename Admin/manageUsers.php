
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BioDB</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<?php
session_start();
if(isset($_SESSION['Username'])){
}
else{
		header('location:../admin/loginPage.php');
}
$ID = $_SESSION['ID'];
$Status = 'Pending';
$con = mysqli_connect("localhost","root","","biodb");
$sql = "select * from users_reg where Status ='".$Status."'  ";
$result = mysqli_query($con,$sql);
// $row = mysqli_fetch_array($result);
?>
<body class="d-flex flex-column vh-100 text-center text-white bg-dark" >
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
                <h3 class="float-md-left mb-0 text-white">Oral Cancer Database</h3>
                <nav class="nav nav-masthead justify-content-center float-md-right">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link" href="#">Know More</a>
                    <a class="nav-link" href="#">Login</a>
                    <a class="nav-link" href="#">Logout</a>
                </nav>

                
            </div>
        </header>
        <?php
                 while ($row = mysqli_fetch_array($result)) {
                    $Id = $row['usersID'];
                    $Name = $row['Name'];
                    echo $Name;
                ?>
                <?php
                }
                ?>
        <footer class="mt-auto text-white-50">
        <p>&copy; 2022  </p>
        </footer>
    </div>