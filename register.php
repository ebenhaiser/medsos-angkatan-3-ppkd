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
              <div class="card-title">
                <h3 class="card-title text-center">Sign up to see photos and videos from your friends.</h3>
                <p class="text-center">Sign In</p>
              </div>
              <?php if(isset($_GET['register']) == 'failed'): ?>
              <div class="alert alert-danger">Register failed!</div>
              <?php endif ?>
              <form action="controller/actionSignUp.php" method="post">
                <div class="form-group mb-3">
                  <!-- <label for="email" class="form-label">Email</label> -->
                  <input type="text" name="full_name" class="form-control" placeholder="Full Name">
                </div>
                <div class="form-group mb-3">
                  <!-- <label for="email" class="form-label">Email</label> -->
                  <input type="text" name="username" class="form-control" placeholder="Username">
                </div>
                <div class="form-group mb-3">
                  <!-- <label for="email" class="form-label">Email</label> -->
                  <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group mb-3">
                  <!-- <label for="password" class="form-label">Password</label> -->
                  <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group mb-3">
                  <div class="d-grid">
                    <button type="submit" class="btn btn-primary" name="sign_up">Sign Up</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="card shadow mt-2">
            <div class="card-body">
              <p align="center">Have an account? <a style="text-decoration: none;" href="login.php">Log In</a> </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include 'inc/footer.php' ?>
</body>

</html>