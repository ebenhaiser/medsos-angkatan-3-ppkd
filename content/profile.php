<?php
$id_user = $_SESSION['id'];
$queryUser = mysqli_query($connection, "SELECT * FROM users WHERE id = '$id_user'");
$rowUser = mysqli_fetch_assoc($queryUser);

$queryTweet = mysqli_query($connection, "SELECT * FROM tweets WHERE id_user = '$id_user'");
$rowTweet = mysqli_fetch_assoc($queryTweet);
?>


<div class="container shadow mt-4" style="border-radius: 12px;">
  <div class="row">
    <div class="col-sm-12 mt-3">
      <div class="cover rounded-top">
        <div style="max-height: 324px; width: auto; overflow: hidden;" class="mx-auto">
          <img
            src="<?php echo isset($rowUser['cover_picture']) ? "img/coverPicture/".$rowUser['cover_picture'] : 'https://placehold.co/800x200' ?>"
            alt="" class="img-fluid">
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="profile-header mt-3">
        <img
          src="<?php echo isset($rowUser['profile_picture']) ? "img/profilePicture/".$rowUser['profile_picture'] : 'https://placehold.co/100' ?>"
          alt="" class="rounded-circle" width="200px" style="border: solid 6px white">
        <!-- <h2><?php echo isset($rowUser['full_name']) ? $rowUser['full_name'] : '' ?></h2>
        <p><?php echo isset($rowUser['username']) ? $rowUser['username'] : '' ?></p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quasi vero dolores quos beatae rem,
          eum
          cupiditate obcaecati debitis dignissimos molestiae animi consequatur deserunt odit exercitationem
          reprehenderit
          placeat provident corporis!</p> -->
      </div>
    </div>
    <div class="col-sm-6 mt-5" align="right">
      <div class="mt-4">
        <a href="#" class="btn btn-primary me-auto" data-bs-toggle="modal" data-bs-target="#profileEditorModal">Edit
          Profile</a>
        <a href="#" class="btn btn-primary me-3" data-bs-toggle="modal" data-bs-target="#coverEditorModal">Edit
          Cover</a>
      </div>
    </div>
    <div class="col-sm-12 mt-3">
      <div class="d-flex grid gap-2">
        <h2><?php echo isset($rowUser['full_name']) ? $rowUser['full_name'] : '' ?></h2>
        <img src="assets/svg/twitter-verified-badge.svg" alt="" height="40px">
      </div>
      <p><?php echo isset($rowUser['username']) ? $rowUser['username'] : '' ?></p>
      <p><?php echo isset($rowUser['description']) ? $rowUser['description'] : '' ?></p>
    </div>
    <div class="col-sm-12 mt-5">
      <ul class="nav nav-underline" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#tweet-tab-pane"
            type="button" role="tab" aria-controls="tweet-tab-pane" aria-selected="true">Tweets</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#tweet-and-reply-tab-pane"
            type="button" role="tab" aria-controls="tweet-and-reply-tab-pane" aria-selected="false">Tweets &
            replies</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#media-tab-pane" type="button"
            role="tab" aria-controls="media-tab-pane" aria-selected="false">Media</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#like-tab-pane" type="button"
            role="tab" aria-controls="like-tab-pane" aria-selected="false">Likes</button>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active mt-4 mb-4" id="tweet-tab-pane" role="tabpanel" aria-labelledby="home-tab"
          tabindex="0">
          <?php include 'tweet.php' ?>
        </div>
        <div class="tab-pane fade" id="tweet-and-reply-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
          tabindex="0">...
        </div>
        <div class="tab-pane fade" id="media-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">...
        </div>
        <div class="tab-pane fade" id="like-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class=" modal fade" id="profileEditorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Profile</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="controller/edit-profile.php?id=<?php echo $rowUser['id'] ?>" method="post"
        enctype="multipart/form-data">
        <div class="modal-body">
          <div class="mb-3">
            <input type="text" class="form-control" name="full_name" placeholder="Full Name"
              value="<?php echo isset($rowUser['full_name']) ? $rowUser['full_name'] : '' ?>">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" name="username" placeholder="Username"
              value="<?php echo isset($rowUser['username']) ? $rowUser['username'] : '' ?>">
          </div>
          <div class="mb-3">
            <input type="email" class="form-control" name="email" placeholder="Email"
              value="<?php echo isset($rowUser['email']) ? $rowUser['email'] : '' ?>">
          </div>
          <div class="mb-3">
            <textarea name="description" id="" class="form-control"
              placeholder="description"><?php echo isset($rowUser['description']) ? $rowUser['description'] : '' ?></textarea>
            <!-- <input type="text" class="form-control" name="email" placeholder="Email"
              value=""> -->
          </div>
          <div class="mb-3">
            <input type="file" class="form-control" name="profile_picture">
          </div>
          <div class="mb-3">
            <img
              src="img/profilePicture/<?php echo isset($rowUser['profile_picture']) ? $rowUser['profile_picture'] : '' ?>"
              class="img-thumbnail" width="100%" alt="">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="submit">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="coverEditorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Cover</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="controller/edit-cover.php?id=<?php echo $rowUser['id'] ?>" method="post"
        enctype="multipart/form-data">
        <div class="modal-body">
          <div class="mb-3">
            <input type="file" class="form-control" name="cover_picture">
          </div>
          <div class="mb-3">
            <img src="img/coverPicture/<?php echo isset($rowUser['cover_picture']) ? $rowUser['cover_picture'] : '' ?>"
              class="img-thumbnail" width="100%" alt="">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="submit">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>