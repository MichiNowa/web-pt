<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>
    <?php require ('header.php'); ?>

    <div class="profile-container">
        <div class="profile-details">
            <div class="profile-picture">
                <img src="th.jpg" alt="Profile Picture">
            </div>
            <div class="profile-info">
                <h4>Michi Arvin Lhil</h4>
                <div class="follow-count">
                    <span style="font-size: 20px;"><a href="">Following</a> : 100</span>
                    <span style="font-size: 20px; "><a href="">Followers</a> : 500</span>
                </div>
                <p>Bio: Full Stack Developer.</p>
            </div>
        </div>
        <br>
        <hr>
        
        <br>
        
        <h6>Skills</h6>
        <div class="skills">
            <ul>
                <span>HTML,</span>
                <span> CSS,</span>
                <span> JavaScript,</span>
                <span> PHP,</span>
                <span> MySQL,</span>
                <span> Bootstrap</span>
            </ul>
        </div>
        <h6>Hobbies</h6>
        <div class="hobbies">
            <ul>
                <span>Reading,</span>
                <span> Gaming,</span>
                <span> Coding,</span>
                <span> Watching Movies</span>
            </ul>
        </div>
        <h6>About</h6>
        <div class="about">
            <span>Live in <a href="">Kinabjangan, Nasipit, Agusan del Norte</a></span><br>
            <span>School at <a href="">Saint Micheal College of Caraga</a> </span><br>
            <span>Work at <a href="">Avenger</a></span> 
        </div>
        <br>
        <h6>Elsewhere</h6>
        <div class="elsewhere">
            <ul>
                <li><a href="">Facebook</a></li>
                <li><a href="">Twitter</a></li>
                <li><a href="">Instagram</a></li>
                <li><a href="">LinkedIn</a></li>
            </ul>
        </div>
    </div>

    <div class="profile-container">
        <div class="activities">
            <h4><u>Activities</u></h4>
            <br>
            <div class="activity">
                <div class="inline">
                    <small class="float-end text-navy">1h ago</small>
                    <strong><img src="th.jpg" alt="" width="40px" class="img" style="border-radius: 100px;"> Michi Arvin Lhil</strong> Upload a photo<br />
               <br>
                    <div class="caption">
                    <small><p>My Games</p></small>
                </div>
                    <figure><img src="roblox.jpg" alt="" width="400px" height="400">
                    <figcaption><small class="text-muted">Today 6:35 pm</small></figcaption>
                </figure>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero.</p>
                <div class="interaction-buttons">
                    <hr>
                    <button class="bi-heart" style="margin-right: 70px;" > Heart</button>
                    <button class="bi-chat" style="margin-right: 70px;"> Comment</button>
                    <button class="bi-share" style="margin-right: 70px;"> Share</button>
                    <input type="text" name="comment" id="comment" class="comment" placeholder="Write  a comment" style="border-radius: 8px;">

                </div>    
            </div>
        </div>
        <br>     
          <hr>
        <br>
 
        <div class="activities">
        
            <div class="activity">
                <div class="inline">
                    <small class="float-end text-navy">1h ago</small>
                    <strong><img src="th.jpg" alt="" width="40px" class="img" style="border-radius: 100px;"> Michi Arvin Lhil</strong> posted something on <strong>ArGunz's </strong>timeline<br />
                <br>
                    <div>
                        <p>Happy Birthday ArGunz!!!</p>
                    </div>
                    <small class="text-muted">Today 6:35 pm</small>
                </div>
          
                <div class="interaction-buttons">
                    <hr>
                <button class="bi-heart" style="margin-right: 70px;" > Heart</button>
                    <button class="bi-chat" style="margin-right: 70px;"> Comment</button>
                    <button class="bi-share" style="margin-right: 70px;"> Share</button>

                    <div class="comment-area" style="border:1px solid; padding:15px; border-radius: 15px;background-color: whitesmoke;"> 
                    
                    <div class="comment-friend" style="background-color: whitesmoke;">
                      <strong><img src="michi.jpg" alt="bfbf" width="35px" style="border-radius: 100px;"> Michi Nowa</strong> @michi <br>
                       <p class="comment-p">  Happy Birthday ArGunz, ayay pakals na!  <br>  <button class="bi-heart" style="margin-right;" > </button>
                  </p>
                     
                    </div>
                   
                    <div class="comment-friend" style="background-color: whitesmoke;">
                      <strong> <img src="kim.jpg" alt="" width="35px" style="border-radius: 100px;"> Lhil Kim</strong>  @lhilkim <br>
                      <p class="comment-p"> Happy Birthday ArGunz, anha ko sainyo kaon ko lechon bi gutom kaau  <br>  <button class="bi-heart" style="margin-right;" > </button></p> 
                      <input type="text" name="comment" id="comment" class="comment" placeholder="Write  a comment" style="border-radius: 8px;">

                    </div>
                
 
                </div>
                  
                  
                </div>    
            </div>
        </div>
        <br>
        <hr>
        <br>

        <div class="activities">
        
            <div class="activity">
                <div class="inline">
                    <small class="float-end text-navy">1h ago</small>
                    <strong><img src="th.jpg" alt="" width="40px" class="img" style="border-radius: 100px;"> Michi Arvin Lhil</strong> shared a photo <br />
                    <hr>
             
                <strong><img src="kim.jpg" alt="" width="30px" class="img" style="border-radius: 100px;"> Lhil Kim</strong>
          
                <div class="caption">
                    <small><p>My Idol</p></small>
                </div>
                <figure>
                <figure><img src="image.png" alt="" width="400px" height="400">
                <figcaption>  <small class="text-muted">Yesterday 6:35 pm</small></figcaption>
                </figure>
                    <div>
                        <p></p>
                    </div>
                  
                </div>
          
                <div class="interaction-buttons">
                    <hr>
                <button class="bi-heart" style="margin-right: 70px;" > Heart</button>
                    <button class="bi-chat" style="margin-right: 70px;"> Comment</button>
                    <button class="bi-share" style="margin-right: 70px;"> Share</button>
                    <div class="comment-friend" style="background-color: whitesmoke;">
                    <div class="comment-area" style="border:1px solid; padding:15px; border-radius: 15px;background-color: whitesmoke;"> 
                    
                    <div class="comment-friend" style="background-color: whitesmoke;">
                      <strong><img src="michi.jpg" alt="bfbf" width="35px" style="border-radius: 100px;"> Michi Nowa</strong> @michi <br>
                       <p class="comment-p">  Wow nice picture  <br>  <button class="bi-heart" style="margin-right;" > </button>
                  </p>
                     
                    </div>
                   
                    <div class="comment-friend" style="background-color: whitesmoke;">
                      <strong> <img src="kim.jpg" alt="" width="35px" style="border-radius: 100px;"> Lhil Kim</strong>  @lhilkim <br>
                      <p class="comment-p"> Luhhh kanindottt sa pictureee
                          <br>  <button class="bi-heart" style="margin-right;" > </button></p> 
                      <input type="text" name="comment" id="comment" class="comment" placeholder="Write  a comment" style="border-radius: 8px;">

                    </div>
                
 
                </div>
                </div>    
            </div>
        </div>
        <br>     
          <hr>
        <br>
        <div class="activities">
       
            <div class="activity">
                <div class="inline">
                    <small class="float-end text-navy">1h ago</small>
                    <strong><img src="th.jpg" alt="" width="40px" class="img" style="border-radius: 100px;"> Michi Arvin Lhil</strong> started  following  <strong>ArGunz</strong><br />
              <br>
                    <small class="text-muted">Today 6:35 pm</small>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero.</p>
                <div class="interaction-buttons">
                    <hr>
                <button class="bi-heart" style="margin-right: 70px;" > Heart</button>
                    <button class="bi-chat" style="margin-right: 70px;"> Comment</button>
                    <button class="bi-share" style="margin-right: 70px;"> Share</button>
               
                    <input type="text" name="comment" id="comment" class="comment" placeholder="Write  a comment" style="border-radius: 8px;">
                </div>    
            </div>
        </div>

        <!-- Other activities go here -->

    </div>

    <?php require 'footer.php'; ?>
</body>
</html>
