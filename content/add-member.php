<?php
// include "controller/add-user-control.php";
// BUAT ADD USER
if (isset($_POST['add'])) {
  $member_name = $_POST['member_name'];
  $phone_number = $_POST['phone_number'];
  $email = $_POST['email'];
  $address = $_POST['address'];

  $queryInsert = mysqli_query(
      $connection,
      "INSERT INTO members (member_name, phone_number, email, address) VALUES ('$member_name', '$phone_number', '$email', '$address')"
  );
  header("location: ?pg=member&add=success");
};


// include "controller/delete-user-control.php";
// BUAT DELETE USER
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];

  $queryDelete = mysqli_query($connection, "DELETE FROM members WHERE id='$id'");
  header("location: ?pg=member&delete=success");
};


// include "controller/edit-user-control.php";
// BUAT EDIT USER
if (isset($_GET['edit'])) {
  $id = $_GET['edit'];
  $queryEdit = mysqli_query($connection, "SELECT * FROM members WHERE id='$id'");
  $rowEdit = mysqli_fetch_assoc($queryEdit);
};

if (isset($_POST['edit'])) {
  $member_name = $_POST['member_name'];
  $phone_number = $_POST['phone_number'];
  $email = $_POST['email'];
  $address = $_POST['address'];

  $update = mysqli_query(
      $connection,
      "UPDATE members SET member_name='$member_name', phone_number='$phone_number', email='$email',  address='$address' WHERE id='$id'"
  );
  header("location: ?pg=member&edit=success");

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
            <legend class="float-none w-auto px-3"><?php echo isset($_GET['edit']) ? 'Atur' : 'Tambah' ?> Anggota
            </legend>
            <form class="" action="" method="post">
              <div class="form-group mb-3">
                <label for="" class="form-label">Name : </label>
                <input type="text" class="form-control" name="member_name" placeholder="Masukkan nama"
                  value="<?php echo isset($_GET['edit']) ? $rowEdit['member_name'] : '' ?>">
              </div>
              <div class="form-group mb-3">
                <label for="" class="form-label">Nomor Telepon : </label>
                <input type="text" class="form-control" name="phone_number" placeholder="Masukkan nomor telepon"
                  value="<?php echo isset($_GET['edit']) ? $rowEdit['phone_number'] : '' ?>">
              </div>
              <div class="form-group mb-3">
                <label for="" class="form-label">Email : </label>
                <input type="email" class="form-control" name="email" placeholder="Masukkan email"
                  value="<?php echo isset($_GET['edit']) ? $rowEdit['email'] : '' ?>">
              </div>
              <div class="form-group mb-3">
                <label for="" class="form-label">Alamat : </label>
                <input type="text" class="form-control" name="address" placeholder="Masukkan alamat"
                  value="<?php echo isset($_GET['edit']) ? $rowEdit['address'] : '' ?>">
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