<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsfeed</title>
</head>
<body style="background-color:#1f1f1f;">
<style>
    .button{
        background-color: #1f1f1f;
        color: white;
        border: none;
    }
    .button:hover{
    background-color: #ff6600;
    }
    .hey:hover{
            background-color: black;
            color: white
    }

</style>
<?php 
 global $user;
 global $posts;
 global $follow_suggestions;
 
 ?>
    <div class="container col-md-10 col-sm-12 col-lg-9 rounded-0 d-flex justify-content-center">
        <div class="col-md-8 col-sm-12">

        <!-- newsfeed -->
        <?php
           
           showError('post_img');
           if(count($posts)<1){
               echo "<p style='width:50vw; background-color:#ff5500;' class='p-2 border-4 rounded text-center text-light my-3 col-11'>Your Newsfeed is empty</p>";
           }
            foreach($posts as $post){
                $likes = getLikes($post['id']);
                $comments = getComments($post['id']);
        ?>

               
                <div class="card mt-4" style="background-color: black
; border-radius:20px;padding:10px;color:white;border:5px solid black;">
               <div class="card-title d-flex justify-content-between  align-items-center">

                   <div class="d-flex align-items-center p-2" style="color: orange;">
                       <img src="assets/images/profile/<?=$post['profile_pic']?>" alt="" height="30" width="30" class="rounded-circle border">&nbsp;&nbsp;<a href='?u=<?=$post['username']?>' class="text-decoration-none text-light"><?=$post['first_name']?> <?=$post['last_name']?></a>
                   </div>
                   <div class="p-2">
                       <?php
                            if($post['uid']==$user['id']){
                        ?>

  <div class="dropdown">
        <i class="bi bi-three-dots-vertical" id="option<?=$post['id']?>" data-bs-toggle="dropdown" aria-expanded="false"></i>
        <ul class="dropdown-menu bg-dark" aria-labelledby="option<?=$post['id']?>">
            <li><a class="dropdown-item text-danger hey" href="assets/php/actions.php?deletepost=<?=$post['id']?>"><i class="bi bi-trash-fill"></i> Delete Post</a></li>
        </ul>
</div>
    <?php
}
    ?>
                      
                    </div>
                </div>
                <!-- image for post -->
                    <img src="assets/images/posts/<?=$post['post_img']?>" loading=lazy class="" alt="..." style="max-width: 100%">
                    <h4 style="font-size: x-larger" class="p-2 border-bottom d-flex">
                    <span>

                    <!-- liked post or not -->
               <?php
                    if(checkLikeStatus($post['id'])){
                        $like_btn_display='none';
                        $unlike_btn_display='';
                    }else{
                        $like_btn_display='';
                        $unlike_btn_display='none';  
                    }
                ?>
 <!-- icons for heart and ocmment -->
                <i class="bi bi-heart-fill unlike_btn text-danger" style="display:<?=$unlike_btn_display?>" data-post-id='<?=$post['id']?>'></i>
                <i class="bi bi-heart like_btn" style="display:<?=$like_btn_display?>" data-post-id='<?=$post['id']?>'></i>

                </span>  
                &nbsp;&nbsp;<i
                        class="bi bi-chat-left d-flex align-items-center"><span class="p-1 mx-2 text-small" style="font-size:small" data-bs-toggle="modal" data-bs-target="#postview<?=$post['id']?>"><?=count($comments)?> comments</span></i> 
                        
                </h4>
                <div>
                <span class="p-1 mx-2" data-bs-toggle="modal" data-bs-target="#likes<?=$post['id']?>"><span id="likecount<?=$post['id']?>"><?=count($likes)?></span> likes</span>
                <span style="font-size:small" class="text-muted">Posted</span> <?=show_time($post['created_at'])?> 
                 
</div>
                <?php
                    if($post['post_text']){
                ?>
            <div class="card-body">
                <?=$post['post_text']?>
            </div>
    <?php
}
    ?>
            <!-- comments -->
            <div class="input-group p-2 <?=$post['post_text']?'border-top':''?>">
                 
                 <input type="text" class="form-control border-0 mr-4 comment-input bg-dark text-light"style="border-radius:15px;"  placeholder="comment on this post"
                         aria-label="Recipient's username" aria-describedby="button-addon2">
                     <button class="button text-light add-comment"style="border-radius:15px;" data-page='wall' data-cs="comment-section<?=$post['id']?>" data-post-id="<?=$post['id']?>" type="button"
                         id="button-addon2">Post</button>
         </div>

            </div>

            <div class="modal fade" id="postview<?=$post['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-body d-md-flex p-0 bg-dark text-light">
                    <div class="col-md-8 col-sm-12">
                        <img src="assets/images/posts/<?=$post['post_img']?>" style="max-height:90vh" class="w-100 overflow:hidden">
                    </div>

 

                    <div class="col-md-4 col-sm-12 d-flex flex-column">
                        <div class="d-flex align-items-center p-2  " style="background-color: #ff5500;">
                            <div><img src="assets/images/profile/<?=$post['profile_pic']?>" alt="" height="50" width="50" class="rounded-circle border">
                            </div>
                            <div>&nbsp;&nbsp;&nbsp;</div>
                            <div class="d-flex flex-column justify-content-start">
                                <h6 style="margin: 0px;" class="text-light"><?=$post['first_name']?> <?=$post['last_name']?></h6>
                                <p style="margin:0px;"  >@<?=$post['username']?></p>
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


                        <div class="flex-fill align-self-stretch overflow-auto" id="comment-section<?=$post['id']?>" style="height: 100px;">

                          <?php
if(count($comments)<1){
    ?>
<p class="p-3 text-center my-2 nce">no comments</p>
    <?php
}
foreach($comments as $comment){
    $cuser = getUser($comment['user_id']);
    ?>
<div class="d-flex align-items-center p-2">
                                <div><img src="assets/images/profile/<?=$cuser['profile_pic']?>" alt="" height="40" width="40" class="rounded-circle border">
                                </div>
                                <div>&nbsp;&nbsp;&nbsp;</div>
                                <div class="d-flex flex-column justify-content-start align-items-start">
                                    <h6 style="margin: 0px;"><a href="?u=<?=$cuser['username']?>" class="text-decoration-none text-dark text-small text-muted">@<?=$cuser['username']?></a> - <?=$comment['comment']?></h6>
                                    <p style="margin:0px;" class="text-muted">(<?=show_time($comment['created_at'])?>)</p>
                                </div>
                            </div>

    <?php  
}
                          ?>

                        </div>
                        <div class="input-group p-2 border-top" style="border-color: #ff5500;">
                            <input type="text" class="form-control rounded-0 border-0 comment-input bg-dark text-light" placeholder="say something.."
                                aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button  class="btn btn-outline add-comment text-light " style="background-color: #ff5500;border-radius:15px;" data-cs="comment-section<?=$post['id']?>" data-post-id="<?=$post['id']?>" type="button"
                                id="button-addon2">Post</button>
                        </div>
                    </div>



                </div>

            </div>
        </div>
    </div>

    <!-- who likes the post -->

            <div class="modal fade" id="likes<?=$post['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Likes</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <?php
                if(count($likes)<1){
                    ?>
<p>Currently No Likes</p>
                    <?php
                }
foreach($likes as $f){

    $fuser = getUser($f['user_id']);
    $fbtn='';
    if(checkBS($f['user_id'])){
continue;
    }else if(checkFollowStatus($f['user_id'])){
        $fbtn = '<button class="btn btn-sm btn-danger unfollowbtn" data-user-id='.$fuser['id'].' >Unfollow</button>';
    }else if($user['id']==$f['user_id']){
        $fbtn='';
    }else{
        $fbtn = '<button class="btn btn-sm btn-primary followbtn" data-user-id='.$fuser['id'].' >Follow</button>';

    }
    ?>
<div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center p-2">
                        <div><img src="assets/images/profile/<?=$fuser['profile_pic']?>" alt="" height="40" width="40" class="rounded-circle border">
                        </div>
                        <div>&nbsp;&nbsp;</div>
                        <div class="d-flex flex-column justify-content-center">
                            <a href='?u=<?=$fuser['username']?>' class="text-decoration-none text-dark"><h6 style="margin: 0px;font-size: small;"><?=$fuser['first_name']?> <?=$fuser['last_name']?></h6></a>
                            <p style="margin:0px;font-size:small" class="text-muted">@<?=$fuser['username']?></p>
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

    <?php
}
            ?>
       
       

        </div>
        </div>
    </div>
   
</body>
</html>