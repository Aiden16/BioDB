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
if(isset($_SESSION['User_Username'])){
}
else{
    header('location:../database/loginPage.php');

}
$ID = $_GET['id'];
// echo $ID;
// $Status = 'Pending';
$con = mysqli_connect("localhost","root","","biodb");
$sql = "select * from oralprecancer where Gene='".$ID."'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
?>
<body class="d-flex flex-column vh-100 text-center text-white bg-dark" >
    <div class="cover-container d-flex w-100 h-100 p-5 mx-auto flex-column">
        <header class="mb-auto">
            <div>
                <h3 class="float-md-left mb-0 text-white">Oral Cancer Database</h3>
                <nav class="nav nav-masthead justify-content-center float-md-right">
                    <a class="nav-link" aria-current="page" href="../index.php">Home</a>
                    <a class="nav-link" href="logout.php">Logout</a>
                </nav>

                
            </div>
        </header>
    </div>
<div class="container d-flex justify-content-center align-items-center mb-5">

<div class="card" style="width: 20rem;">
  <img class="card-img-top" src="https://www.news-medical.net/image.axd?picture=2020%2F6%2Fshutterstock_1238405779.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title text-dark"><?php echo $row['Gene'] ?></h5>
    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><h5><a href="<?php echo $row['HGMD'] ?>">HGMD</a></h3></li>
    <li class="list-group-item"><h5><a href="<?php echo $row['SNP'] ?>">SNP</a></h3></li>
    <li class="list-group-item"><h5><a href="<?php echo $row['c-DNA Librarie'] ?>">c-DNA Librarie</a></h3></li>
    <li class="list-group-item"><h5><a href="<?php echo $row['Protein sequence'] ?>">Protein sequence</a></h3></li>
    <li class="list-group-item"><h5><a href="<?php echo $row['Homologous genes'] ?>">Homologous genes</a></h3></li>
    <li class="list-group-item"><h5><a href="<?php echo $row['Pathways'] ?>">Pathways</a></h3></li>
    <li class="list-group-item"><h5><a href="<?php echo $row['Human Protein Atlas (HPA)'] ?>">Human Protein Atlas (HPA)</a></h3></li>
    <li class="list-group-item"><h5><a href="<?php echo $row['PubMed'] ?>">PubMed</a></h3></li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Go Back</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
</div>


<footer class="mt-auto text-white-50">
            <p>&copy; 2022  </p>
        </footer>
          </div>
      </div>
</body>