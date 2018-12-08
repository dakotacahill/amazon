<?php 

include('amazonhd.php');

require('amazon.php'); 


?>

<!DOCTYPE html>

<html>
<head>
	<title>
	<?php
	echo "amazon shopping place";
	?>
	</title>
    <div id='nav'>
              <div id='nav-upnav' aria-hidden='true' style='background-image: url(https://images-na.ssl-images-amazon.com/images/G/01/airstream/upnav/T1/nav_merged_1x._CB472725852_.jpg); background-color: #F6F6F6; text-align: left; background-position: top left; height: 55px; background-repeat: no-repeat; background-size: 1920px; min-width: 1000px;'>
              <a href='/spark/ref=nav_upnav_merged_T1_Landing' class='nav-a' tabindex='5'><span class='nav-spanAltText'></span></a>
              </div>
            
                
                
            <div class="nav-row">
            <img src="https://images-na.ssl-images-amazon.com/images/G/01/img18/events/12dod/12DOD_DesktopSWM_400x39_Shop12._CB479370442_.jpg" id="deals">
                
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>

                    <a href="#" target="_parent" class="backbtn">‹</a>
                    
                    <a href="#" class="signin"><img src="//cdn.onlinewebfonts.com/svg/img_311846.png" alt="icon" class="Img">Hello, Sign in</a>
                
                    <a class="static">Select a Category</a>
                    <hr class="line">
                    <a href="#" class="course">Course</a>
                    <a href="#" class="book">books</a>
                    <a href="#" class="is">ISBN</a>
                    <a href="#" class="op">Other Products</a>
                </div>
                <span id="nav-opener" onclick="openNav()">☰</span>
              </div>

              <div id="desc" class ="prod">
              <img src="https://cdn3.iconfinder.com/data/icons/tools-solid-icons-vol-4/72/171-512.png" width="128" height="auto" alt="book" 
              class="bookimg">
              </div>
   
</body>
</html>