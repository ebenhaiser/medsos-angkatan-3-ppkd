<?php
// include "controller/add-category-control.php";
if (isset($_POST['add'])) {
  $category_name = $_POST['category_name'];

  $queryInsert = mysqli_query(
    $connection,
    "INSERT INTO categories (category_name) VALUES ('$category_name')");
  header("location: ?pg=category&add=success");
};


// include "controller/delete-category-control.php";
// BUAT DELETE CATEGORY
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];

  $queryDelete = mysqli_query($connection, "DELETE FROM categories WHERE id='$id'");
  header("location: ?pg=category&delete=success");
};


// include "controller/edit-category-control.php";
// BUAT EDIT CATEGORY
if (isset($_GET['edit'])) {
  $id = $_GET['edit'];
  $queryEdit = mysqli_query($connection, "SELECT * FROM categories WHERE id='$id'");
  $rowEdit = mysqli_fetch_assoc($queryEdit);
};

if (isset($_POST['edit'])) {
  $category_name = $_POST['category_name'];

  $update = mysqli_query(
    $connection,
    "UPDATE categories SET category_name='$category_name' WHERE id='$id'");
  header("location: ?pg=category&edit=success");

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
            <legend class="float-none w-auto px-3"><?php echo isset($_GET['edit']) ? 'Atur' : 'Tambah' ?> Kategori
            </legend>
            <form class="" action="" method="post">
              <div class="form-group mb-3">
                <label for="" class="form-label">Name Kategori : </label>
                <input type="text" class="form-control" name="category_name" placeholder="Masukkan nama"
                  value="<?php echo isset($_GET['edit']) ? $rowEdit['category_name'] : '' ?>">
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