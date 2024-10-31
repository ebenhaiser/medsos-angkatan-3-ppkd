<?php
// include "controller/add-category-control.php";
if (isset($_POST['add'])) {
  $level_name = $_POST['level_name'];

  $queryInsert = mysqli_query(
    $connection,
    "INSERT INTO levels (level_name) VALUES ('$level_name')");
  header("location: ?pg=level&add=success");
};


// include "controller/delete-category-control.php";
// BUAT DELETE CATEGORY
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];

  $queryDelete = mysqli_query($connection, "DELETE FROM levels WHERE id='$id'");
  header("location: ?pg=level&delete=success");
};


// include "controller/edit-category-control.php";
// BUAT EDIT CATEGORY
if (isset($_GET['edit'])) {
  $id = $_GET['edit'];
  $queryEdit = mysqli_query($connection, "SELECT * FROM levels WHERE id='$id'");
  $rowEdit = mysqli_fetch_assoc($queryEdit);
};

if (isset($_POST['edit'])) {
  $level_name = $_POST['levels'];

  $update = mysqli_query(
    $connection,
    "UPDATE category SET level_name='$level_name' WHERE id='$id'");
  header("location: ?pg=level&edit=success");

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
            <legend class="float-none w-auto px-3"><?php echo isset($_GET['edit']) ? 'Atur' : 'Tambah' ?> Level
            </legend>
            <form class="" action="" method="post">
              <div class="form-group mb-3">
                <label for="" class="form-label">Name Level : </label>
                <input type="text" class="form-control" name="level_name" placeholder="Masukkan nama level"
                  value="<?php echo isset($_GET['edit']) ? $rowEdit['level_name'] : '' ?>">
              </div>
              <button type="submit" class="btn btn-primary" name="<?php echo isset($_GET['edit']) ? 'edit' : 'add' ?>">
                <?php echo isset($_GET['edit']) ? 'Atur' : 'Tambah' ?>
              </button>
            </form>
          </fieldset>
        </div>
      </div>
    </div>
  </div>
</div>