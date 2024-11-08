<?php
  $queryTweet = mysqli_query($connection, "SELECT * FROM tweets ORDER BY created_at DESC");
?>

<div class="row">
  <div class="col-md-12" align="right">
    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
      data-bs-target="#tweetModal">Tweet</button>
  </div>
  <?php if(mysqli_num_rows($queryTweet) > 0) : ?>
  <div class="col-sm-12 mt-3">
    <?php while($rowTweet = mysqli_fetch_assoc($queryTweet)) : ?>
    <div class="d-flex">
      <div class="flex-shrink-0">
        <img
          src="img/profilePicture/<?php echo isset($rowUser['profile_picture']) ? $rowUser['profile_picture'] : '' ?>"
          alt="..." width="50" class="border border-1 rounded-circle shadow">
      </div>
      <div class="flex-grow-1 ms-3 my-auto">
        <?php if(!empty($rowTweet['photo'])) : ?>
        <img width="150px" class="mb-3"
          src="img/tweetPhoto/<?php echo isset($rowTweet['photo']) ? $rowTweet['photo'] : '' ?>" alt="">
        <?php endif ?>
        <?php echo isset($rowTweet['content']) ? $rowTweet['content'] : '' ?>
      </div>
    </div>
    <div class="row">
      <!-- COMMENT -->
      <div class="col-sm-4 ms-3">
        <form action="add_comment.php" method="POST">
          <!-- <input type="text" name="id_tweet" value="<?php echo $rowTweet['id'] ?>">
          <input type="text" name="id_user" value="<?php echo $rowTweet['id_user'] ?>"> -->

          <textarea name="comment_text" class="form-control" id="comment_text" cols="5" rows="5"
            placeholder="Tulis Balasan Anda ... "></textarea>
          <button class="btn btn-secondary btn-sm mt-2" type="submit">Kirim Balasan</button>
        </form>

        <div class="alert mt-2" id="comment-alert" style="display: none;"></div>
        <div class="mt-1">
          <?php
          if (isset($rowTweet['id']) && isset($rowTweet['id_user'])) :
              $idStatus = $rowTweet['id'];
              $userId = $rowTweet['id_user'];
              $queryComment = mysqli_query($connection, "SELECT * FROM comments WHERE id_tweet = '$idStatus' AND id_user = '$userId'");
              $rowCounts = mysqli_fetch_all($queryComment, MYSQLI_ASSOC);

              foreach ($rowCounts as $rowCount) :
          ?>
          <span>
            <pre>Komentar : <?php echo $rowCount['comment_text'] ?></pre>
          </span>
          <!-- <div class="d-flex gap-3">
                                    <p><?php echo $rowComment['comment_text'] ?></p>
                                    <p><i></i>(<?php echo $rowComment['nama_lengkap'] ?>)</p>
                                    <p><i></i>(<?php echo $rowComment['nama_pengguna'] ?>)</p>
                                    <p><small><?php echo $rowComment['tanggal'] ?></small></p>
                                </div> -->
          <?php
              endforeach;
            endif;
          ?>
        </div>
      </div>
      <!-- LIKE -->
      <?php
        $idStatusnya = $rowTweet['id'];
        $selectLike = mysqli_query($connection, "SELECT COUNT(id_user) AS countuser FROM likes WHERE id_tweet = '$idStatusnya'");
        $rowLike = mysqli_fetch_assoc($selectLike);
      ?>
      <div class="col-sm-4 status">
        <!-- <input type="text" id="id_user_like" value="<?php echo $rowTweet['id_user'] ?>"> -->
        <button class="btn btn-success btn-sm" onclick="toggleLike(<?php echo $rowTweet['id']; ?>)">Like
          (<?php echo isset($rowLike['countuser']) ? $rowLike['countuser'] : "0" ?>)</button>
      </div>
    </div>
    <div class="col-md-1">
      <a href="controller/add-tweet.php?delete=<?php echo $rowTweet['id']; ?>" style="color: red;" class="me-4 my-auto">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash"
          viewBox="0 0 16 16">
          <path
            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
          <path
            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
        </svg>
      </a>
    </div>

    <hr>
    <?php endwhile ?>
    <?php else : ?>
    <h3 class="text-center">No tweets yet</h3>
    <?php endif ?>
  </div>
</div>

<div class="modal fade" id="tweetModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Create Tweet</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="controller/add-tweet.php?add=<?php echo $rowUser['id'] ?>" method="post"
        enctype="multipart/form-data">
        <div class="modal-body">
          <!-- <div class="mb-3">
            <input type="text" class="form-control" name="full_name" placeholder="Full Name"
              value="<?php echo isset($rowUser['full_name']) ? $rowUser['full_name'] : '' ?>">
          </div> -->
          <div class="mb-3">
            <textarea name="content" id="summernote" class="form-control" placeholder="Tweet..."></textarea>
          </div>
          <div class="mb-3">
            <input type="file" name="photo" class="form-control">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="submit">Tweet</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
function toggleLike(statusId) {
  const userId = document.getElementById('id_user_like').value;
  fetch("like_status.php", {
      method: 'POST',
      headers: {
        "Content-Type": "application/x-www-form-urlencoded"
      },
      body: `id_tweet=${statusId}&id_user=${userId}`
    })
    .then(response => response.json())
    .then(data => {
      if (data.status === "liked") {
        alert("Liked!");
      } else if (data.status === "unliked") {
        alert("Unliked!");
      }
      location.reload();
    })
    .catch(error => console.error("Error:", error));
}
</script>