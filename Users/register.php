
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

<body class="d-flex flex-column vh-100 bg-dark" >
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
                <h3 class="float-md-left mb-0 text-white">Oral Cancer Database</h3>
                <nav class="nav nav-masthead justify-content-center float-md-right">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">Know More</a>
                    <a class="nav-link" href="#">Login</a>
                    <a class="nav-link" href="#">Logout</a>
                </nav>
            </div>
        </header>
    </div>
    <div class="container d-flex justify-content-center align-items-center mb-5 mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3 col-xl-4 offset-xl-4">
            <div class="card shadow">
                <img src="https://www.sciencealert.com/images/2020-06/processed/cancer_topic_1024.jpg"
                    alt="" class="card-img-top" />
                <div class="card-body">
                    <h5 class="card-title">Register</h5>
                    <form action="registerInsert.php" method="POST" class="validated-form" >
                    <div class="mb-3">
                            <label class="form-label" for="Name">Name</label>
                            <input class="form-control" type="text" id="username" name="Name" required autofocus>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                    </div>
                    <div class="mb-3">
                            <label class="form-label" for="email">Email</label>
                            <input class="form-control" type="email" id="email" name="email" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                    </div>
                    <div class="mb-3">
                            <label class="form-label" for="mobile">Mobile</label>
                            <input class="form-control" type="number" id="email" name="mobile" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                    </div>
                        <div class="mb-3">
                            <label class="form-label" for="username">Username</label>
                            <input class="form-control" type="text" id="username" name="username" required autofocus>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="password">Password</label>
                            <input class="form-control" type="password" id="password" name="password" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <button class="btn btn-success btn-block">Register</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>