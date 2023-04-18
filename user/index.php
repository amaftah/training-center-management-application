<?php include("../dbConnection.php");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/75c6b1327b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>


<header>
<nav class="navbar navbar-light bg-dark">
  <a class="navbar-brand" href="#">
    <img src="/docs/4.3/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    E-Course
  </a>
</nav>
</header>


<div class="container-fluid ">
        <div class="container mt-5">
            <div class="row mt-5 w-100 d-flex justify-content-center">
                <div class="col-6 mt-5">
                    <form action="./sign up.php" method="post">
                        <div class="my-3 text-center">
                            <img src="./logo/user.png" class="circle p-2 rounded-circle" style="width:100px">
                        </div>
                        <div class="my-3 text-center">
                            <h3>Se connecter à votre compte</h3>
                        </div>
                        <div class="my-3">
                            <input type="email" class="w-100 input-blue" name="email" placeholder="name@example.com">
                        </div>
                        <div class="my-3">
                            <input type="password" class="w-100 input-blue" name="password" placeholder="Entrer votre mot de pass ...">
                            
                        </div>
                            
                        <div class="my-3">
                            <button Class="w-100 blue" name="connecter">Connecter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>