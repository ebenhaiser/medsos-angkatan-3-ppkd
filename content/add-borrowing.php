<?php
// include "controller/add-borrowing-control.php";
// BUAT ADD BORROWING
if (isset($_POST['save'])) {
  $borrowing_number = $_POST['borrowing_number'];
  $id_member = $_POST['id_member'];
  $borrowing_date = $_POST['borrowing_date'];
  $return_date = $_POST['return_date'];
  $id_book = $_POST['id_book'];
  $status = "Di Pinjam";

  $queryInsert = mysqli_query(
      $connection,
      "INSERT INTO borrowing (borrowing_number, id_member, borrowing_date, return_date, status) VALUES ('$borrowing_number', '$id_member', '$borrowing_date', '$return_date', '$status')"
  );

  $id_borrowing = mysqli_insert_id($connection);
  
  foreach ($id_book as $key => $book) { 
    $id_book = $_POST['id_book'][$key];
    $insertDetail = mysqli_query($connection, "INSERT INTO borrowing_details (id_borrowing, id_book) VALUES ('$id_borrowing', '$id_book')");
  };

  header("location: ?pg=borrowing&add=success");
};


// include "controller/delete-borrowing-control.php";
// BUAT DELETE BORROWING
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];

  $queryDelete = mysqli_query($connection, "UPDATE borrowing SET deleted_at = 1 WHERE id='$id'");
  header("location: ?pg=borrowing&delete=success");
};


// include "controller/edit-borrowing-control.php";
// BUAT EDIT BORROWING
if (isset($_GET['detail'])) {
  $id = $_GET['detail'];
  $queryDetail = mysqli_query($connection, "SELECT members.member_name, borrowing.* FROM borrowing LEFT JOIN members ON members.id = borrowing.id_member WHERE borrowing.id='$id'");
  $rowDetail = mysqli_fetch_assoc($queryDetail);
  $queryDetailBorrow = mysqli_query($connection, "SELECT books.title, borrowing_details.* FROM borrowing_details LEFT JOIN books ON books.id = borrowing_details.id_book WHERE borrowing_details.id_borrowing = '$id'");
};

$queryBook = mysqli_query($connection, "SELECT * FROM books");

$queryMember = mysqli_query($connection, "SELECT * FROM members");

$queryBorrowCode = mysqli_query($connection, "SELECT MAX(id) AS id_borrow FROM borrowing");
$rowBorrowing = mysqli_fetch_assoc($queryBorrowCode);
$id_borrowing = $rowBorrowing['id_borrow'];
$id_borrowing++;

$borrowCode = "PJM/" . date('dmy') . sprintf("%03s", $id_borrowing);

?>

<div class="mt-5 container">
  <div class="row">
    <div class="col-sm-12">
      <div class="card shadow">
        <div class="card-body">
          <h3 class="card-title text-center">
          </h3>
          <fieldset class="border border-black border-2 p-3">
            <legend class="float-none w-auto px-3"><?php echo isset($_GET['detail']) ? 'Detail' : 'Tambah' ?> Peminjaman
            </legend>
            <form action="" method="post">
              <div class="mb-3 row">
                <div class="col-sm-6">

                  <!-- Nomor Pinjam -->
                  <div class="mb-3">
                    <label for="" class="form-label">No Peminjaman</label>
                    <input type="text" class="form-control" name="borrowing_number"
                      value="<?php echo isset($_GET['detail']) ? $rowDetail['borrowing_number'] : $borrowCode ?>"
                      readonly>
                  </div>

                  <!-- Tanggal Peminjaman -->
                  <div class="mb-3">
                    <label for="" class="form-label">Tanggal Peminjaman</label>
                    <input required type="date" class="form-control" name="borrowing_date"
                      value="<?php echo isset($_GET['detail']) ? $rowDetail['borrowing_date'] : '' ?>"
                      <?php echo isset($_GET['detail']) ? 'readonly' : '' ?>>
                  </div>

                  <!-- Nama Buku -->
                  <?php if(empty($_GET['detail'])) : ?>
                  <div class="mb-3">
                    <label for="" class="form-label">Nama Buku</label>
                    <select required name="" id="id_book" class="form-control">
                      <option value="">Pilih Buku</option>
                      <!-- ambil data buku dari table buku -->
                      <?php while ($rowBook = mysqli_fetch_assoc($queryBook)) : ?>
                      <option value="<?php echo $rowBook['id'] ?>">
                        <?php echo $rowBook['title'] ?>
                      </option>
                      <?php endwhile ?>
                    </select>
                  </div>
                  <?php endif ?>
                </div>

                <div class="col-sm-6">

                  <!-- Nama Anggota -->
                  <div class="mb-3">
                    <label for="" class="form-label">Nama Aggota</label>
                    <?php if (empty($_GET['detail'])) : ?>
                    <select required name="id_member" id="" class="form-control">
                      <option value="">Pilih Anggota</option>
                      <?php while ($rowMember = mysqli_fetch_assoc($queryMember)) : ?>
                      <option value="<?php echo $rowMember['id'] ?>">
                        <?php echo $rowMember['member_name'] ?>
                      </option>
                      <?php endwhile?>
                    </select>
                    <?php else : ?>
                    <input type="text" class="form-control" readonly value="<?php echo $rowDetail['member_name'] ?>">
                    <?php endif ?>
                  </div>

                  <!-- Tanggal Pengembalian -->
                  <div class="mb-3">
                    <label for="" class="form-label">Tanggal Pengembalian</label>
                    <input required type="date" class="form-control" name="return_date"
                      value="<?php echo isset($_GET['detail']) ? $rowDetail['return_date'] : '' ?>"
                      <?php echo isset($_GET['detail']) ? 'readonly' : '' ?>>
                  </div>
                </div>
              </div>

              <!-- Tombol Tambah Row -->
              <?php if(empty($_GET['detail'])) : ?>
              <div align="right" class="mb-3">
                <button type="button" id="add-row" class="btn btn-primary">
                  Tambah Row
                </button>
              </div>
              <?php endif ?>

              <!-- tabel data dari query dengan php -->
              <?php if (!empty($_GET['detail'])) : ?>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Buku</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $no = 1;
                  while ($rowDetailBorroring = mysqli_fetch_assoc($queryDetailBorrow)) :?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $rowDetailBorroring['title'] ?></td>
                  </tr>
                  <?php endwhile ?>
                </tbody>
              </table>
              <?php else : ?>
              <!-- ini tabel data dari js -->
              <table id="table_add_borrowing" class="table table-bordered">
                <thead>
                  <tr>
                    <th>Judul Buku</th>
                    <th>Settings</th>
                  </tr>
                </thead>
                <tbody class="table-row">
                </tbody>
              </table>

              <!-- Tombol Simpan -->
              <div class="mt-5">
                <button type="submit" class="btn btn-primary" name="save">
                  Simpan
                </button>
                <?php endif ?>

              </div>
            </form>
          </fieldset>
        </div>
      </div>
    </div>
  </div>
</div>