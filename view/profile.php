<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
<?php require 'header.php'; ?>
<div class="profile">
        <div class="details">
            <div class="picture">
                <img src="th.jpg" alt="Profile Picture">
            </div>
            <div class="profile-info">
                <div class="namee">
                <strong>Michi Arvin Lhil</strong> 
                </div>
                
                <div class="follow">
                    <button class="follow" id="follow">Follow</button>
                </div>
                <br>
                <div class="follow-count">
                    <span style="font-size: 20px;"><a href="">Following</a> : 100</span>
                    <span style="font-size: 20px; "><a href="">Followers</a> : 500</span>
                </div>
        
                <p>Bio: Full Stack Developer.</p>
            </div>
        </div>
    
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

 
<div class="activity">
        <div class="nf">
        <h4>Activities</h4>
        <br>
        <div class="upload">
                <div class="photo">
                  
                    <strong><img src="th.jpg" alt="" width="40px" class="img" style="border-radius: 100px;"> Michi Arvin Lhil</strong> Upload a photo  <span class="time-act">now</span><br />
               <br>
                    <div class="caption">
                    <small><p>My Games</p></small>
                </div>
                    <figure><img src="roblox.jpg" alt="" width="400px" height="400">
                    <figcaption><small class="text-muted">Today 6:35 pm</small></figcaption>
                </figure>
                </div>
               
                <div class="interaction-buttons">
                    <hr>
                    <button class="red" id="red1" style="margin-right: 70px; padding:5px;" > <b><a href="#"><small>1.2k </small> </a> <br><i class="bi-heart"></i>   Heart</b></button>
                  
                  <button  style="margin-right: 70px;"><b><small><a href="#"><small>1.5k </small> <br></a> <br></small><i class="bi-chat" ></i>    Comment</b></button>
              
                  <button  style="margin-right: 70px;"><b><a href="#"><small>100k </small> </a><br><i class="bi-share"> Share</i></b> </button>
                  <br>
                  <hr>
                    <input type="text" name="comment" id="comment" class="comment" placeholder="Write  a comment" style="border-radius: 8px;">

                </div>    
            </div>
        </div>    
            <br><hr><br>
        <br>
        <div class="nf">

        <div class="upload">
                <div class="photo">
                  
                <strong><img src="th.jpg" alt="" width="40px" class="img" style="border-radius: 100px;"> Michi Arvin Lhil</strong> posted something on <strong>ArGunz's </strong>timeline  <span class="time-act">1h ago</span><br />
               <br>
                </div>
                <div class="caption">
                     <p>Happy Fiesta ArGunz!!!</p>
                </div>
               
                <div class="interaction-buttons">
                    <hr>
                    <button class="red" id="red2" style="margin-right: 70px; padding:5px;" > <b><a href="#"><small>1.2k </small> </a> <br><i class="bi-heart"></i>   Heart</b></button>
                  
                  <button  style="margin-right: 70px;"><small><a href="#"><b><small>1.5k </small> <br></a> <br></small><i class="bi-chat" ></i>    Comment</b></button>
              
                  <button  style="margin-right: 70px;"><b><a href="#"><small>100k </small> </a><br><i class="bi-share"> Share</i></b> </button>
                  <br>
                  <hr>
                    <input type="text" name="comment" id="comment" class="comment" placeholder="Write  a comment" style="border-radius: 8px;">
                    <br><br>
            <div class="comment-area" style="border:1px solid; padding:15px; border-radius: 15px;background-color: whitesmoke;"> 
                    
                    <div class="comment-friend" style="background-color: whitesmoke;">
                      <strong><img src="michi.jpg" alt="bfbf" width="35px" style="border-radius: 100px;"> Michi Nowa</strong> @michi <br>
                       <p class="comment-p">  Happy fiesta ArGunz, ayay pakals na!  <span class="time-act">1h ago</span> <br> 
                  </p>
                     
                    </div>
                   <hr>
                    <div class="comment-friend" style="background-color: whitesmoke;">
                      <strong> <img src="kim.jpg" alt="" width="35px" style="border-radius: 100px;"> Lhil Kim</strong>  @lhilkim <br>
                      <p class="comment-p"> Happy fiesta ArGunz, anha ko sainyo kaon ko lechon bi gutom kaau   <span class="time-act">1h ago</span><br> </p> 
                      <input type="text" name="comment" id="comment" class="comment" placeholder="Write  a comment" style="border-radius: 8px;">

                    </div>
                </div>    
            </div>
        </div>
      
    </div>
            <br><hr><br>
        <br>
        <div class="nf">

        <div class="upload">
                <div class="photo">
                  
                <strong><img src="th.jpg" alt="" width="40px" class="img" style="border-radius: 100px;"> Michi Arvin Lhil</strong> shared a photo 
                 <span class="time-act">4h ago</span><br>
                <p class="shared-cap">
                    Woww
                </p>
                <hr>
               

               <strong><img src="kim.jpg" alt="" width="30px" class="img" style="border-radius: 100px;"> Lhil Kim  </strong>
          <div class="caption">
              <small><p>My Idol</p></small>
          </div>
          <figure>
          <figure><img src="image.png" alt="" width="400px" height="400">
          <figcaption>  <small class="text-muted">Yesterday 6:35 pm</small></figcaption>
          </figure>
                </div>
           
               
                <div class="interaction-buttons">
                    <hr>
                    <button class="red" id="red3" style="margin-right: 70px; padding:5px;" > <b><a href="#"><small>1.2k </small> </a> <br><i class="bi-heart"></i>   Heart</b></button>
                  
                  <button  style="margin-right: 70px;"><small><a href="#"><b><small>1.5k </small> <br></a> <br></small><i class="bi-chat" ></i>    Comment</b></button>
              
                  <button  style="margin-right: 70px;"><b><a href="#"><small>100k </small> </a><br><i class="bi-share"> Share</i></b> </button>
                  <br>
                  <hr>
                    <input type="text" name="comment" id="comment" class="comment" placeholder="Write  a comment" style="border-radius: 8px;">
                    <br><br>
            <div class="comment-area" style="border:1px solid; padding:15px; border-radius: 15px;background-color: whitesmoke;"> 
                    
            <div class="comment-friend" style="background-color: whitesmoke;">
                      <strong><img src="michi.jpg" alt="bfbf" width="35px" style="border-radius: 100px;"> Michi Nowa</strong> @michi <br>
                       <p class="comment-p">  Wow nice picture  <span class="time-act">1h ago</span> <br> 
                  </p>
                     
                    </div>
                   <hr>
                    <div class="comment-friend" style="background-color: whitesmoke;">
                      <strong> <img src="kim.jpg" alt="" width="35px" style="border-radius: 100px;"> Lhil Kim</strong>  @lhilkim <br>
                      <p class="comment-p"> Luhhh kanindottt sa pictureee
                      <span class="time-act">1h ago</span> <br></p> 
                      <input type="text" name="comment" id="comment" class="comment" placeholder="Write  a comment" style="border-radius: 8px;">

                    </div>
                      
                    </div>

                </div>    
            </div>
        </div>
            <br><hr><br>
        <br>
        <div class="nf">

        <div class="upload">
                <div class="photo">
                  
                <strong><img src="th.jpg" alt="" width="40px" class="img" style="border-radius: 100px;"> Michi Arvin Lhil</strong> started  following  <strong>ArGunz</strong>  <span class="time-act">Yesterday</span><br />
                <hr>
                </div>
           
               
                <div class="interaction-buttons">
                
                    <button class="red" id="red4" style="margin-right: 70px; padding:5px;" > <b><a href="#"><small>1.2k </small> </a> <br><i class="bi-heart"></i>   Heart</b></button>
                  
                  <button  style="margin-right: 70px;"><small><a href="#"><b><small>1.5k </small> <br></a> <br></small><i class="bi-chat" ></i>    Comment</b></button>
              
                  <button  style="margin-right: 70px;"><b><a href="#"><small>100k </small> </a><br><i class="bi-share"> Share</i></b> </button>
                  <br>
                
                    <input type="text" name="comment" id="comment" class="comment" placeholder="Write  a comment" style="border-radius: 8px;">
                  

                    
            
                      
                    </div>

                </div>    
            </div>
        </div>
      
    </div>

    

 <script src="main.js"></script>

<?php require 'footer.php'; ?>
</body>
</html>