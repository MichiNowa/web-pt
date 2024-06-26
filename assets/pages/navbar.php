<style>
    .hey{
        color:white;
    }
    .hey:hover{
        background-color: black;
        color: white
    }
</style>
    <?php global $user;?>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: black;">
        <div class="container col-lg-9 col-sm-12 col-md-10 d-flex flex-lg-row flex-md-row flex-sm-column justify-content-between">
            <div class="d-flex justify-content-between col-lg-8 col-sm-12 " style="background-color: black;">
            <!-- logo -->
                <a class="navbar-brand" href="?">
                    <img src="assets/images/logo.png" alt="" height="28">
                </a>
            <!-- searchbar -->
                <form class="d-flex" id="searchform">
        <input class="form-control me-0 bg-dark text-light border-0" type="search" id="search"
          placeholder="Search for other users" aria-label="Search" autocomplete="off" style="background-color: #F8E5E5;">
        <div class="bg-dark text-light rounded  shadow py-3 px-4 mt-5" style="display:none;position:absolute;z-index:+99;"
          id="search_result" data-bs-auto-close="true">
          <button type="button" class="btn-close" aria-label="Close" id="close_search"></button>
          <div id="sra" class="text-start">
            <p class="text-center text-muted">Search a name</p>
          </div>
        </div>
      </form>

            </div>
            <ul class="navbar-nav flex-fill flex-row justify-content-evenly mb-lg-1 mb-sm-0" style="background-color: black;">
                <!-- home nav -->
                <li class="nav-item">
                    <a class="nav-link text-light" href="?"><i class="bi bi-house-door-fill" title="Home"></i></a>
                </li>

                <!-- add post nav -->
                <li class="nav-item">
                    
                    <a class="nav-link text-light" data-bs-toggle="modal" data-bs-target="#addpost" href="#"><i class="bi bi-plus-square-fill" title="Add Post"></i></a>
                </li>
                <!-- notif nav -->
                <li class="nav-item">
                  
                    
                    <?php
if(getUnreadNotificationsCount()>0){
    ?>
 <a class="nav-link text-light position-relative" id="show_not" data-bs-toggle="offcanvas" href="#notification_sidebar" role="button" aria-controls="offcanvasExample">
                    <i class="bi bi-bell-fill" title="Notifications"></i>
  <span class="un-count position-absolute start-10 translate-middle badge p-1 rounded-pill bg-danger">
   <small><?=getUnreadNotificationsCount()?></small>
  </span>
</a>

    <?php
}else{
    ?>
  <a class="nav-link text-light" data-bs-toggle="offcanvas" href="#notification_sidebar" role="button" aria-controls="offcanvasExample"><i class="bi bi-bell-fill" title="Notifications"></i></a>
    <?php
}
                    ?>
                </li>

                <!-- message nav -->
                <li class="nav-item">
                    <a class="nav-link text-light" data-bs-toggle="offcanvas" href="#message_sidebar" href="#"><i class="bi bi-chat-dots-fill" title="Messages"></i>  <span class="un-count position-absolute start-10 translate-middle badge p-1 rounded-pill bg-danger" id="msgcounter">
  
  </span></a>
                </li>
                <li class="nav-item dropdown dropstart">
                    <a class="nav-link bg-black text-light" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="assets/images/profile/<?=$user['profile_pic']?>" alt="" height="30" width="30" class="rounded-circle border">
                    </a>
                    <ul class="dropdown-menu position-absolute top-100 end-50 bg-dark" aria-labelledby="navbarDropdown">
                    <li><a class=" hey dropdown-item " href="?u=<?=$user['username']?>"><i class="bi bi-person"></i> My Profile</a></li>

                        <li><a class=" hey dropdown-item" href="?editprofile"><i class="bi bi-pencil-square"></i> Edit Profile</a></li>
                        <li>
                            <hr class=" hey dropdown-divider">
                        </li>
                        <li><a class="hey dropdown-item text-danger" href="assets/php/actions.php?logout"><i class="bi bi-box-arrow-in-left"></i> Logout</a></li>
                    </ul>
                </li>

            </ul>


        </div>
    </nav>
