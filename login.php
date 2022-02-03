<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <script src="assets/css/bootstrap.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body style="background:#f0f0f0;">
    
    <div class="container">
        <br><br><br><br><br><br>
        <div class="row">
            <div class="col-md-4 mx-auto bg-light p-5">
                <h3 class="text-center">Login Hotel Hebat</h3>
                <hr>
                <form action="action/login.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required="required">
                    </div>
                    <br>
                    <div class="form-group d-flex justify-content-between">
                        <input type="submit" value="Masuk" class="btn btn-primary" name="Masuk">
                        <a href="index.php" class="btn btn-primary">Halaman Tamu</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>