<?php
// include "controller/add-book-control.php";
// BUAT ADD BOOK
if (isset($_POST['add'])) {
  $title = $_POST['title'];
  $publisher = $_POST['publisher'];
  $year_of_publication = $_POST['year_of_publication'];
  $author = $_POST['author'];
  $id_category = $_POST['id_category'];

  $queryInsert = mysqli_query(
      $connection,
      "INSERT INTO books (id_category, title, publisher, year_of_publication, author) VALUES ('$id_category', '$title', '$publisher', '$year_of_publication', '$author')"
  );
  header("location: ?pg=book&add=success");
};


// include "controller/delete-book-control.php";
// BUAT DELETE USER
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];

  $queryDelete = mysqli_query($connection, "DELETE FROM books WHERE id='$id'");
  header("location: ?pg=book&delete=success");
};


// include "controller/edit-book-control.php";
// BUAT EDIT USER
if (isset($_GET['edit'])) {
  $id = $_GET['edit'];
  $queryEdit = mysqli_query($connection, "SELECT * FROM books WHERE id='$id'");
  $rowEdit = mysqli_fetch_assoc($queryEdit);
};

if (isset($_POST['edit'])) {
  $title = $_POST['title'];
  $publisher = $_POST['publisher'];
  $year_of_publication = $_POST['year_of_publication'];
  $author = $_POST['author'];
  $id_category = $_POST['id_category'];

  $update = mysqli_query(
      $connection,
      "UPDATE books SET title='$title', publisher='$publisher', year_of_publication='$year_of_publication', author='$author' WHERE id='$id'"
  );
  header("location: ?pg=book&edit=success");

  if (!$update) {
      echo "Update gagal";
  };
};

$queryCategory = mysqli_query($connection, "SELECT * FROM categories");

?>

<div class="container">
  <div class="row">
    <div class="col-sm-5 mx-auto mt-5">
      <div class="card shadow">
        <div class="card-body">
          <fieldset class="border border-black border-2 p-3 shadow">
            <legend class="float-none w-auto px-3"><?php echo isset($_GET['edit']) ? 'Atur' : 'Tambah' ?> Buku
            </legend>
            <form action="" method="post">
              <div class="form-group mb-3">
                <label for="" class="form-label">Kategori : </label>
                <select name="id_category" class="form-control" id="">
                  <option value="">Pilih kategori</option>
                  <?php while($rowCategory = mysqli_fetch_assoc($queryCategory)): ?>
                  <option
                    <?php echo isset($_GET['edit']) ? ($rowCategory['id'] == $rowEdit['id_category'] ? 'selected' : '') : '' ?>
                    value="<?php echo $rowCategory['id'] ?>">
                    <?php echo $rowCategory['category_name'] ?></option>
                  <?php endwhile ?>
                </select>
              </div>
              <div class="form-group mb-3">
                <label for="" class="form-label">Judul : </label>
                <input type="text" class="form-control" name="title" placeholder="Masukkan kategori"
                  value="<?php echo isset($_GET['edit']) ? $rowEdit['title'] : '' ?>">
              </div>
              <div class="form-group mb-3">
                <label for="" class="form-label">Penerbit : </label>
                <input type="text" class="form-control" name="publisher" placeholder="Masukkan penerbit"
                  value="<?php echo isset($_GET['edit']) ? $rowEdit['publisher'] : '' ?>">
              </div>
              <div class="form-group mb-3">
                <label for="" class="form-label">Tahun Terbit : </label>
                <input type="text" class="form-control" name="year_of_publication" placeholder="Masukkan tahum terbit"
                  value="<?php echo isset($_GET['edit']) ? $rowEdit['year_of_publication'] : '' ?>">
              </div>
              <div class="form-group mb-3">
                <label for="" class="form-label">Penulis : </label>
                <input type="text" class="form-control" name="author" placeholder="Masukkan penulis"
                  value="<?php echo isset($_GET['edit']) ? $rowEdit['author'] : '' ?>">
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