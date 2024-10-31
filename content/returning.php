<?php
$query = mysqli_query($connection, "SELECT borrowing.borrowing_number, returning_books.* FROM returning_books 
LEFT JOIN borrowing ON borrowing.id = returning_books.id_borrowing ORDER BY id DESC");

?>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <fieldset class="border border-black border-2 p-3 mt-5 shadow">
        <legend class="float-none w-auto px-3">Data Pengembalian</legend>
        <div align="right">
          <a href="?pg=add-returning" class="btn btn-primary">Tambah</a>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover mt-3">
            <thead>
              <tr>
                <th>No</th>
                <th>No Peminjaman</th>
                <th>Status</th>
                <th>Denda</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              while ($row = mysqli_fetch_assoc($query)):
              ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row['borrowing_number'] ?></td>
                <td><?php echo $row['status'] ?></td>
                <td><?php echo $row['charge'] ?></td>
                <td>
                  <a id="edit-user" data-id="<?php echo $row['id'] ?>"
                    href="?pg=add-returning&detail=<?php echo $row['id'] ?>" class="btn btn-success btn-sm">Detail

                  </a> |
                  <a href="?pg=add-returning&delete=<?php echo $row['id'] ?>" class="btn btn-danger btn-sm"
                    onclick="return confirm('Apakah anda yakin akan menghapus data ini??')">Delete</a>
                </td>
              </tr>
              <?php endwhile ?>
            </tbody>
          </table>
        </div>
      </fieldset>
    </div>
  </div>
</div>