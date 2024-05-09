<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php require ('header.php'); ?>



<div id="section_2">
<div class="search-center">
  
    <div class="box">  
        <h3 class="find-frnd">
        Find Friends <u class="bi-search"></u>
    </h3>
    <form name="search">
        <input type="text" class="input" name="txt" placeholder="Search" required>
       
    </form>
<div class="result-friend">
<table>
    <div style="color:orange; font-size:25px;"> Result</div>
    <hr>
    <tr>
        <td class="td-result">
            <img src="michi.jpg" alt="" class="table-img">
        </td>
        <td class="td-result">
            <a href="ArGunz">  Michi Nowa Bataluna</a>
        </td>
        <td class="td-result" style="padding-left: 20px;">
       <div class="follow">
                   <button class="follow" id="follow">Follow</button>
               </div> 
        </td>
      
    </tr>
    <tr>
        <td class="td-result">
            <img src="arvin1.jpg" alt="" class="table-img">
        </td>
        <td class="td-result">
            <a href="ArGunz">  Arvin Jay Guno</a>
        </td>
        <td class="td-result" style="padding-left: 20px;">
        <div class="follow">
                   <button class="follow" id="follow">Follow</button>
               </div> 
        </td>
      
    </tr>
    <tr>
        <td class="td-result">
            <img src="kim.jpg" alt="" class="table-img">
        </td>
        <td class="td-result">
            <a href="ArGunz">  Lhil Kim Mendoza</a>
        </td>
        <td class="td-result" style="padding-left: 20px;">
        <div class="follow">
                   <button class="follow" id="follow">Follow</button>
               </div> 
        </td>
      
    </tr>
</table>

</div>

</div>

</div>

<script> 
var followBtns = document.querySelectorAll(".follow button");
followBtns.forEach(function(btn) {
    btn.addEventListener("click", function() {
        if (btn.innerText === 'Follow') {
            btn.innerText = 'Following';
            btn.style.backgroundColor = 'red';
        } else {
            btn.innerText = 'Follow';
         btn.style.backgroundColor = 'orange';
        }
    });
});

    
</script>
<?php require ('footer.php'); ?>
</body>
</html>