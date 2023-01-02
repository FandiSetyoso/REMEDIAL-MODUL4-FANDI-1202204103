<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav gap-3">
                    <a href="Homeadmin.php" class="nav-link" style="color: white;">Home</a>
                    <a href="MyItemadmin.php" class="nav-link">Villa</a>
                    <a href="logout.php" class="nav-link">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <!--Isi-->
    <section id="home">
        <div class="container" >
            <div class="d-flex gap-5 justify-content-center align-items-center" style="margin-top: 50px; margin-bottom: 200px;">
                <div>
                    <h1>Selamat Datang di<br>Menu Admin</h1>
                    <a href="MyItemadmin.php" class="button btn-primary">edit Villa</a>
                    <div class="d-flex align-items-center gap-5 mt-5">
                    </div>
                </div>
                <img src="imagelogin.jpg" alt="...">
            </div>
        </div>
    </section>
</body>
</html>