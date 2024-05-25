<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boostrap -->
    <link rel="stylesheet" href="assets/bootstrap-5.2.3/css/bootstrap.min.css">
    <title>Aplikasi Data Pemeriksaan Pasien BPJS</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap');

        * {
            font-family: "Nunito", sans-serif;
            font-optical-sizing: auto;
            font-weight: weight;
            font-style: normal;
        }
    </style>

</head>


<body>
    <div class="container">
        <div class="row vh-100 d-flex align-items-center justify-content-center">
            <div class="col-4">
                <div class="card py-3">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="assets/bootstrap-5.2.3/img/eltibiz.png" width="50%" alt="">
                        </div>
                        <hr class="my-4">
                        <h1 class="fw-bold text-center">LOGIN APLIKASI</h1>
                        <form action="proses_login.php" method="post">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="username" id="floatingInput" placeholder="Username">
                                <label for="floatingInput">Username</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="d-grid gap-2 my-3">
                                <button class="btn btn-primary" name="submit" type="submit">Masuk</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Boostrap JS -->
    <script src="asset/plugins/bootstrap-5.2.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>