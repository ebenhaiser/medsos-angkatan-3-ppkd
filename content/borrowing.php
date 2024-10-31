<?php
$queryBorrowing = mysqli_query($connection, "SELECT members.member_name, borrowing.* 
FROM borrowing LEFT JOIN members ON members.id = borrowing.id_member WHERE deleted_at = 0 ORDER BY id DESC");
?>
<div class="mt-5 container">
  <div class="row">
    <div class="col-md-12">
      <fieldset class="border border-black border-2 p-3 shadow">
        <legend class="float-none w-auto px-3">Data Peminjaman</legend>
        <div align="right" class="button-action">
          <a href="?pg=add-borrowing" class="btn btn-primary">Tambah</a>
          <!-- <a href="" class="btn btn-warning">Recycle</a> -->
        </div>
        <br>
        <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Anggota</th>
                <th>No Peminjaman</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
                <th>Status</th>
                <th>Settings</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $no = 1;
                while ($rowBorrowing = mysqli_fetch_assoc($queryBorrowing)) {
                ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $rowBorrowing['member_name'] ?></td>
                <td><?php echo $rowBorrowing['borrowing_number'] ?></td>
                <td><?php echo $rowBorrowing['borrowing_date'] ?></td>
                <td><?php echo $rowBorrowing['return_date'] ?></td>
                <td><?php echo $rowBorrowing['status'] ?></td>
                <td>
                  <a href="?pg=add-borrowing&detail=<?php echo $rowBorrowing['id'] ?>">
                    <button class="btn btn-outline-primary">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-eye" viewBox="0 0 16 16">
                        <path
                          d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                        <path
                          d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                      </svg>
                    </button>
                  </a>
                  |
                  <a onclick="return confirm ('Apakah anda yakin akan menghapus data ini?')"
                    href="?pg=add-borrowing&delete=<?php echo $rowBorrowing['id'] ?>">
                    <button class="btn btn-outline-danger">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-trash" viewBox="0 0 16 16">
                        <path
                          d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                        <path
                          d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                      </svg>
                    </button>
                  </a>
                </td>
                <?php }; ?>
              </tr>
            </tbody>
          </table>
        </div>
      </fieldset>
    </div>
  </div>
</div>