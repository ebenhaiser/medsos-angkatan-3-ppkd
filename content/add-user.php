<?php
// include "controller/add-user-control.php";
// BUAT ADD USER
if (isset($_POST['add'])) {
  $level = $_POST['level'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  $phone_number = $_POST['phone_number'];
  $password = sha1($_POST['password']);

  $queryInsert = mysqli_query(
      $connection,
      "INSERT INTO users (level, name, email, gender, phone_number) VALUES ('$level', '$name',  '$email', '$gender', '$phone_number')"
  );
  header("location: ?pg=user&add=success");
};


// include "controller/delete-user-control.php";
// BUAT DELETE USER
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];

  $queryDelete = mysqli_query($connection, "DELETE FROM users WHERE id='$id'");
  header("location: ?pg=user&delete=success");
};


// include "controller/edit-user-control.php";
// BUAT EDIT USER
if (isset($_GET['edit'])) {
  $id = $_GET['edit'];
  $queryEdit = mysqli_query($connection, "SELECT * FROM users WHERE id='$id'");
  $rowEdit = mysqli_fetch_assoc($queryEdit);
};

if (isset($_POST['edit'])) {
  $level = $_POST['level'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  $phone_number = $_POST['phone_number'];
  $password =  isset($_POST['password']) ? sha1($_POST['password']) : $rowEdit['password'];

  $update = mysqli_query(
      $connection,
      "UPDATE users SET level='$level', name='$name', email='$email', gender='$gender', phone_number='$phone_number' WHERE id='$id'"
  );
  header("location: ?pg=user&edit=success");

  if (!$update) {
      echo "Update gagal";
  };
};
?>

<div class="container">
  <div class="row">
    <div class="col-sm-5 mx-auto mt-5">
      <div class="card shadow">
        <div class="card-body">
          <fieldset class="border border-black border-2 p-3">
            <legend class="float-none w-auto px-3"><?php echo isset($_GET['edit']) ? 'Atur' : 'Tambah' ?> User
            </legend>
            <form class="" action="" method="post">
              <div class="form-group mb-3">
                <label for="" class="form-label">Level : </label><br>
                <input <?php echo isset($_GET['edit']) ? ($rowEdit['level'] == "Admin") ? 'checked' : '' : '' ?>
                  type="radio" name="level" value="Admin">Admin
                <br>
                <input <?php echo isset($_GET['edit']) ? ($rowEdit['level'] == "Member") ? 'checked' : '' : '' ?>
                  type="radio" name="level" value="Member">Member
              </div>
              <div class="form-group mb-3">
                <label for="" class="form-label">Name : </label>
                <input type="text" class="form-control" name="name" placeholder="Masukkan nama"
                  value="<?php echo isset($_GET['edit']) ? $rowEdit['name'] : '' ?>">
              </div>
              <div class="form-group mb-3">
                <label for="" class="form-label">Email : </label>
                <input type="email" class="form-control" name="email" placeholder="Masukkan email"
                  value="<?php echo isset($_GET['edit']) ? $rowEdit['email'] : '' ?>">
              </div>
              <div class="form-group mb-3">
                <label for="" class="form-label">Password : </label>
                <input type="text" class="form-control" name="password" placeholder="Masukkan password" value="">
              </div>
              <div class="form-group mb-3">
                <label for="" class="form-label">Gender : </label><br>
                <input <?php echo isset($_GET['edit']) ? ($rowEdit['gender'] == "Male") ? 'checked' : '' : '' ?>
                  type="radio" name="gender" value="Male">Male
                <br>
                <input <?php echo isset($_GET['edit']) ? ($rowEdit['gender'] == "Female") ? 'checked' : '' : '' ?>
                  type="radio" name="gender" value="Female">Female
              </div>
              <div class="form-group mb-3">
                <label for="" class="form-label">Nomor Telepon : </label>
                <input type="text" class="form-control" name="phone_number" placeholder="Masukkan nomor telepon"
                  value="<?php echo isset($_GET['edit']) ? $rowEdit['phone_number'] : '' ?>">
              </div>
              <button type="submit" class="btn btn-primary" name="<?php echo isset($_GET['edit']) ? 'edit' : 'add' ?>">
                <?php echo isset($gender['edit']) ? 'Atur' : 'Tambah' ?>
              </button>
            </form>
          </fieldset>
        </div>
      </div>
    </div>
  </div>
</div>