<body style="background-color: #1f1f1f;">
<style>
    .msg:hover{
    background-color: black;
    }
</style>
<?php
global $profile;
global $profile_post;
global $user;  
?>
    <div class="container col-md-9 col-sm-12 rounded-5" style="background-color: black;border-radius:25px; padding-bottom: 1px;">
        <div class="col-25 rounded p-4 mt-4 d-md-flex gap-5">
            <div class="col-md-4 col-sm-12 d-flex justify-content-center mx-auto align-items-start"><div class="px-md-5"></div><img src="assets/images/profile/<?=$profile['profile_pic']?>"
                    class="img-thumbnail rounded-circle mb-3" style="width:170px;height:170px" alt="...">
            </div>
            <div class="col-md-7 col-sm-12 rounded-start">
                <div class="d-flex flex-column">
                    <div class="d-flex gap-5 align-items-center">
                        <span style="font-size: xx-large; color:#ff5500;"><?=$profile['first_name']?> <?=$profile['last_name']?></span>
                        
                        <?php 
if($user['id']!=$profile['id'] && !checkBS($profile['id'])){
    ?>
   <div class="dropdown text-light">
                            <span class="" style="font-size:xx-large" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots"></i> </span>
                            <ul class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton1">
                                <li><a class=" dropdown-item msg"style="color: #ff5500;" href="#" data-bs-toggle="modal" data-bs-target="#chatbox" onclick="popchat(<?=$profile['id']?>)"><i class=" bi bi-chat-fill" style="color: #ff5500;"></i> Message</a></li>
                                <li><a class="dropdown-item msg "style="color: #ff5500;" href="assets/php/actions.php?block=<?=$profile['id']?>&username=<?=$profile['username']?>"><i class="bi bi-x-circle-fill"style="color: #ff5500;" ></i> Block</a></li>
                            </ul>
                        </div>
    <?php
}
                        ?>
                      


                    </div>
                    <span style="font-size: larger;" class="text-secondary">@<?=$profile['username']?></span>
                    <?php
if(!checkBS($profile['id'])){
    ?>
 <div class="d-flex gap-2 align-items-center my-3">

<a class="btn btn-sm"  style="background-color: #ff5500;color:white;"><i class="bi bi-file-post-fill"></i> <?=count($profile_post)?> Posts</a>
<a style="background-color: #ff5500;" class="btn btn-sm btn text-light <?=count($profile['followers'])<1?'disabled':''?>" data-bs-toggle="modal" data-bs-target="#follower_list"><i class="bi bi-people-fill"></i> <?=count($profile['followers'])?> Followers</a>
<a style="background-color: #ff5500;" class="btn btn-sm btn text-light  <?=count($profile['following'])<1?'disabled':''?>" data-bs-toggle="modal" data-bs-target="#following_list"><i class="bi bi-person-fill"></i> <?=count($profile['following'])?> Following</a>


</div>
    <?php

}
                    ?>
                   
<?php


if($user['id']!=$profile['id']){
?>
 <div class="d-flex gap-2 align-items-center my-1">
<?php
if(checkBlockStatus($user['id'],$profile['id'])){
?> 
<button class="btn btn-sm btn-danger unblockbtn" data-user-id='<?=$profile['id']?>' >Unblock</button>

<?php
}else if(checkBlockStatus($profile['id'],$user['id'])){ ?>
    <div class="alert alert-danger" role="alert">
    <i class="bi bi-x-octagon-fill"></i> @<?=$profile['username']?> blocked you !
</div>
   <?php }else if(checkFollowStatus($profile['id'])){
   ?>
<button class="btn btn-sm btn-danger unfollowbtn" data-user-id='<?=$profile['id']?>' >Unfollow</button>
   
   <?php
}else{
    ?>
<button style="background-color: #ff5500;" class="btn btn-sm btn followbtn text-light" data-user-id='<?=$profile['id']?>' >Follow</button>

    <?php
}
?>



</div>
<?php
}
?>
                   
                </div>
            </div>


        </div>
        <h3 class=" " style="border-bottom:1px solid #ff5500;color:#ff5500;">Posts</h3>
        <?php

if(checkBS($profile['id'])){
    $profile_post = array();

   ?>
 <div class="alert alert-secondary text-center" role="alert">
    <i class="bi bi-x-octagon-fill"></i> You are not allowed to see posts !
</div>
   <?php
    
}else if(count($profile_post)<1){
    echo "<p style='background-color:#ff5500;' class='p-2  rounded text-center text-light my-3'>You don't have any post</p>";
}
        ?>
        <div class="gallery d-flex flex-wrap gap-2 mb-5" >
            <?php
               
foreach($profile_post as $post){
    $likes = getLikes($post['id']);

    ?>
            <img src="assets/images/posts/<?=$post['post_img']?>" data-bs-toggle="modal" data-bs-target="#postview<?=$post['id']?>" width="300px" class="rounded" />
       
            <div class="modal fade" id="postview<?=$post['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-body d-md-flex p-0">
                    <div class="col-md-8 col-sm-12">
                        <img src="assets/images/posts/<?=$post['post_img']?>" style="max-height:90vh" class="w-100 rounded-start">
                    </div>

                    <div class="col-md-4 col-sm-12 d-flex flex-column" >
                        <div style="background-color: #ff5500;" class="d-flex align-items-center p-2 text-light" <?=$post['post_text']?'':' '?>">
                            <div><img src="assets/images/profile/<?=$profile['profile_pic']?>" alt="" height="50" width="50" class="rounded-circle border">
                            </div>
                            <div>&nbsp;&nbsp;&nbsp;</div>
                            <div class="d-flex flex-column justify-content-start">
                                <h6 style="margin: 0px;" ><?=$profile['first_name']?> <?=$profile['last_name']?></h6>
                                <p style="margin:0px;" class="text-light">@<?=$profile['username']?></p>
                            </div>
                            <div class="d-flex flex-column align-items-end flex-fill">
                <div class="" ></div>
                <div class="dropdown">
  <span class="<?=count($likes)<1?'disabled':''?>" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  <?=count($likes)?> likes
</span>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
  <?php
  foreach($likes as $like){
      $lu = getUser($like['user_id']);
      ?>
  <li><a class="dropdown-item" href="?u=<?=$lu['username']?>"><?=$lu['first_name'].' '.$lu['last_name']?> (@<?=$lu['username']?>)</a></li>

      <?php
  }
  ?> 
    
  </ul>
</div>
                <div style="font-size:small" class="text-muted">Posted <?=show_time($post['created_at'])?> </div> 
                 
</div>
                        </div>
<div style="background-color: #ffb999;" class=" p-2 text-dark <?=$post['post_text']?'':'d-none'?>"><?=$post['post_text']?> </div>


                        <div class="flex-fill align-self-stretch overflow-auto bg-dark text-light" id="comment-section<?=$post['id']?>" style="height: 100px;">

                          <?php
$comments = getComments($post['id']);
if(count($comments)<1){
    ?>
<p class="p-3 text-center my-2 nce">no comments</p>
    <?php
}
foreach($comments as $comment){
    $cuser = getUser($comment['user_id']);
    ?>
<div class="d-flex align-items-center p-2">
                                <div><img src="assets/images/profile/<?=$cuser['profile_pic']?>" alt="" height="40" width="40" class="rounded-circle ">
                                </div>
                                <div>&nbsp;&nbsp;&nbsp;</div>
                                <div class="d-flex flex-column justify-content-start align-items-start ">
                                    <h6 style="margin: 0px;"><a href="?u=<?=$cuser['username']?>" class="text-decoration-none `" style="color:#ff5500;">@<?=$cuser['username']?></a> - <?=$comment['comment']?></h6>
                                    <p style="margin:0px;" class="text-light"><?=show_time($comment['created_at'])?></p>
                                </div>
                            </div>

    <?php
}
                          ?>

                             
                          

                           

                        </div>
                        <?php
                        if(checkFollowStatus($profile['id']) || $profile['id']==$user['id']){
                            ?>
  <div class="input-group p-2 bg-dark text-light" style="border-top: 1px solid #ff5500;">
                            <input type="text" class="form-control rounded-0 border-0 comment-input bg-dark text-light" placeholder="say something.."
                                aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-outline  add-comment text-light" style="background-color: #ff5500; border-radius:15px;" data-cs="comment-section<?=$post['id']?>" data-post-id="<?=$post['id']?>" type="button"
                                id="button-addon2">Post</button>
                        </div>
                            <?php
                        }else{
                            ?>
<div class="text-center p-2 text-light" style="background-color: #ff5500;">
if you want to comment follow this user</div>
                        
                            <?php
                        }
                        ?>
                      
                    </div>



                </div>

            </div>
        </div>
    </div>
    <?php
}
            ?>
        </div>
    </div>

    <!-- this is for follower list -->
    <div class="modal fade" id="follower_list" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
            <div class="modal-header text-light" style="background-color: #ff5500;">
                <h5 class="modal-title">Followers</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-dark text-light">
                <?php
foreach($profile['followers'] as $f){
    $fuser = getUser($f['follower_id']);
    $fbtn='';
    if(checkFollowStatus($f['follower_id'])){
        $fbtn = '<button style="background-color:#ff5500; color:white;" class="btn btn-sm btn unfollowbtn" data-user-id='.$fuser['id'].' >Unfollow</button>';
    }else if($user['id']==$f['follower_id']){
        $fbtn='';
    }else{
        $fbtn = '<button style="background-color:#ff5500; color:white;" class="btn btn-sm btn followbtn" data-user-id='.$fuser['id'].' >Follow</button>';

    }
    ?>
<div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center p-2">
                        <div><img src="assets/images/profile/<?=$fuser['profile_pic']?>" alt="" height="40" width="40" class="rounded-circle border">
                        </div> text-light
                        <div>&nbsp;&nbsp;</div>
                        <div class="d-flex flex-column justify-content-center">
                            <a href='?u=<?=$fuser['username']?>' class="text-decoration-none text-light"><h6 style="margin: 0px;font-size: small;"><?=$fuser['first_name']?> <?=$fuser['last_name']?></h6></a>
                            <p style="margin:0px;font-size:small;color:#ff5500;">@<?=$fuser['username']?></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                      <?=$fbtn?>

                    </div>
                </div>
    <?php
}
                ?>
            </div>
   
        </div>
  </div>
</div>



<!-- this is for following list -->
<div class="modal fade" id="following_list" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
            <div class="modal-header text-light" style="background-color: #ff5500;">
                <h5 class="modal-title">Following</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-dark">
                <?php
foreach($profile['following'] as $f){
    $fuser = getUser($f['user_id']);
    $fbtn='';
    if(checkFollowStatus($f['user_id'])){
        $fbtn = '<button style="background-color: #ff5500;" class="btn btn-sm btn text-light unfollowbtn" data-user-id='.$fuser['id'].' >Unfollow</button>';
    }else if($user['id']==$f['user_id']){
        $fbtn='';
    }else{
        $fbtn = '<button style="background-color: #ff5500;" class="btn btn-sm btn text-light followbtn" data-user-id='.$fuser['id'].' >Follow</button>';

    }
    ?>
<div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center p-2">
                        <div><img src="assets/images/profile/<?=$fuser['profile_pic']?>" alt="" height="40" width="40" class="rounded-circle ">
                        </div>
                        <div>&nbsp;&nbsp;</div>
                        <div class="d-flex flex-column justify-content-center">
                            <a href='?u=<?=$fuser['username']?>' class="text-decoration-none text-light"><h6 style="margin: 0px;font-size: small;"><?=$fuser['first_name']?> <?=$fuser['last_name']?></h6></a>
                            <p style="margin:0px;font-size:small;color:#ff5500;">@<?=$fuser['username']?></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                      <?=$fbtn?>

                    </div>
                </div>
    <?php
}
                ?>
            </div>
   
        </div>
  </div>
</div>