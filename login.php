<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css">
</head>

<body>
  <div class="wrapper">
    <div class="container">
      <div class="row">
        <div class="col-sm-5 mx-auto mt-5">
          <div class="card shadow">
            <div class="card-body">
              <h3 class="card-title text-center">Selamat Datang di Perpus App</h3>
              <p class="text-center">Silahkan masuk dengan akun anda</p>
              <form action="actionLogin.php" method="post">
                <div class="form-group mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email">
                </div>
                <div class="form-group mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" name="password" id="password" class="form-control"
                    placeholder="Masukkan Password">
                </div>
                <div class="form-group mb-3">
                  <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Masuk</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include 'inc/footer.php' ?>
</body>

</html>