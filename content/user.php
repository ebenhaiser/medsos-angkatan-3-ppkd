<?php
$queryUser = mysqli_query($connection, "SELECT * FROM users ORDER BY id DESC");
?>
<div class="mt-5 container">
  <div class="row">
    <div class="col-md-12">
      <fieldset class="border border-black border-2 p-3 shadow">
        <legend class="float-none w-auto px-3">Data User</legend>
        <div align="right" class="button-action">
          <a href="?pg=add-user" class="btn btn-primary">Tambah</a>
          <!-- <a href="" class="btn btn-warning">Recycle</a> -->
        </div>
        <br>
        <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Telepon</th>
                <th>Email</th>
                <th>Jenis Kelamin</th>
                <th>Settings</th>
              </tr>
            </thead>
            <tbody>
              <?php
                            $no = 1;
                            while ($row = mysqli_fetch_assoc($queryUser)) {
                            ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['phone_number'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['gender'] ?></td>
                <td>
                  <a href="?pg=add-user&edit=<?php echo $row['id'] ?>">
                    <button class="btn btn-outline-success">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-pen" viewBox="0 0 16 16">
                        <path
                          d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z" />
                      </svg>
                    </button>
                  </a>
                  |
                  <a onclick="return confirm ('Apakah anda yakin akan menghapus data ini?')"
                    href="?pg=add-user&delete=<?php echo $row['id'] ?>">
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