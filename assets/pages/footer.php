<?php if (isset($_SESSION['Auth'])) { ?>
  <div class="modal fade" id="addpost" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header text-light" style="background-color: #ff5500;border-color:#ff5500;">
          <h5 class="modal-title">Share A Code Snippet</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body bg-dark">
          <img src="" style="display:none" id="post_img" class="w-100 rounded border">
          <form method="post" action="assets/php/actions.php?addpost" enctype="multipart/form-data">
            <div class="my-3">
              <input class="form-control bg-dark text-light" name="post_img" type="file"
                id="select_post_img">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label text-light">What's your Code
                about?</label>
              <input type="text" name="post_text" class="form-control bg-dark text-light"
                id="exampleFormControlTextarea1" rows="1">
            </div>

            <button type="submit" class="btn btn text-light" style="background-color: #ff5500;">Post</button>

          </form>
        </div>

      </div>
    </div>
  </div>

  <div class="offcanvas offcanvas-start" tabindex="-1" id="notification_sidebar" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header text-light" style="background-color: #ff5500;">
      <h5 class="offcanvas-title" id="offcanvasExampleLabel">Notifications</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body bg-dark">
      <?php
      $notifications = getNotifications();
      foreach ($notifications as $not) {
        $time = $not['created_at'];
        $fuser = getUser($not['from_user_id']);
        $post = '';
        if ($not['post_id']) {
          $post = 'data-bs-toggle="modal" data-bs-target="#postview' . $not['post_id'] . '"';
        }
        $fbtn = '';
        ?>
        <div class="d-flex justify-content-between border-bottom">
          <div class="d-flex align-items-center p-2">
            <div><img src="assets/images/profile/<?= $fuser['profile_pic'] ?>" alt="" height="40" width="40"
                class="rounded-circle border">
            </div>
            <div>&nbsp;&nbsp;</div>
            <div class="d-flex flex-column justify-content-center" <?= $post ?>>
              <a href='?u=<?= $fuser['username'] ?>' class="text-light">
                <h6 style="margin: 0px;font-size: small;" class="text-light"><?= $fuser['first_name'] ?>
                  <?= $fuser['last_name'] ?>
                </h6>
              </a>
              <p style="margin:0px;font-size:small" class="<?= $not['read_status'] ? 'text-light' : '' ?>">
                @<?= $fuser['username'] ?>     <?= $not['message'] ?></p>
              <time style="font-size:small" class="timeago <?= $not['read_status'] ? 'text-light' : '' ?> text-small"
                datetime="<?= $time ?>"></time>
            </div>
          </div>
          <div class="d-flex align-items-center">
            <?php
            if ($not['read_status'] == 0) {
              ?>
              <div class="p-1 bg-primary rounded-circle"></div>

              <?php

            } else if ($not['read_status'] == 2) {
              ?>
                <span class="badge bg-danger">Post Deleted</span>
              <?php
            }
            ?>

          </div>
        </div>
        <?php
      }
      ?>

    </div>
  </div>







  <div class="offcanvas offcanvas-start" tabindex="-1" id="message_sidebar" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header badge" style="background-color: #ff5500;">
      <h5 class="offcanvas-title" id="offcanvasExampleLabel">Messages</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body bg-dark text-light" id="chatlist">

    </div>
  </div>

  <div class="modal fade" id="chatbox" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content bg-dark">
        <div class="modal-header text-light" style="background-color:#ff5500;">
          <a href="" id="cplink" class="text-decoration-none text-light">
            <h5 class="modal-title" id="exampleModalLabel"><img src="assets/images/profile/default_profile.jpg"
                id="chatter_pic" height="40" width="40" class="m-1 rounded-circle "><span id="chatter_name"></span>(@<span
                id="chatter_username">loading..</span>)</h5>
          </a>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body bg-dark d-flex flex-column-reverse gap-2" id="user_chat">
          loading..
        </div>
        <div class="modal-footer">

          <p class="p-2 text-danger mx-auto" id="blerror" style="display:none">
            <i class="bi bi-x-octagon-fill"></i> You are not allowed to interact with this user

        </div>
        <div class="input-group p-2 " id="msgsender">
          <input type="text" class="form-control border-0 bg-dark text-light" id="msginput" placeholder="say something.."
            aria-label="Recipient's username" aria-describedby="button-addon2">
          <button class="btn btn  text-light" style="background-color: #ff5500;border-radius:15px;" id="sendmsg"
            data-user-id="0" type="button">Send</button>
        </div>
      </div>
    </div>
  </div>
  </div>




<?php } ?>

<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/jquery.timeago.js"></script>

<script src="assets/js/custom.js?v=<?= time() ?>"></script>

<footer style="background-color: #1f1f1f;">
  <hr>
  <div class="mt-2 text-center ">
    <img src="../images/logo.png" alt="" width="150px">
    <p class="copyright-text">
      <small class="col-12 mt-auto mb-5 text-muted">Copyright © 2024 MAL Company - Michi Arvin Lhil Company</small>
    </p>
  </div>
</footer>


</body>

</html>