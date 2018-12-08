<?php 

include('amazonhd.php');

require('amazon.php'); 


?>
<div id='nav'>
              <div id='nav-upnav' aria-hidden='true' style='background-image: url(https://images-na.ssl-images-amazon.com/images/G/01/airstream/upnav/T1/nav_merged_1x._CB472725852_.jpg); background-color: #F6F6F6; text-align: left; background-position: top left; height: 55px; background-repeat: no-repeat; background-size: 1920px; min-width: 1000px;'>
              <a href='/spark/ref=nav_upnav_merged_T1_Landing' class='nav-a' tabindex='5'><span class='nav-spanAltText'></span></a>
              </div>
            
            <div class='nav-row'>
            <img src='https://images-na.ssl-images-amazon.com/images/G/01/img18/events/12dod/12DOD_DesktopSWM_400x39_Shop12._CB479370442_.jpg' id='deals'>

            <form id =bar action="http://localhost/amazon3.php" method="post">
            <button id='search-button'>&#128269;</button>
            <input id='search' type='text' size='80'>  
             </form>
                
                
                <div id='mySidenav' class='sidenav'>
                    <a href='javascript:void(0)' class='closebtn' onclick='closeNav()'>&times;</a>

                    <a href='#' target='_parent' class='backbtn'>&#8249;</a>
                    
                    <a href ='#' class='signin'><img src='//cdn.onlinewebfonts.com/svg/img_311846.png' 
                    alt='icon'class='Img'>Hello, Sign in</a>
                
                    <a class='static'>Select a Category</a>
                    <hr class='line'>
                    <a href='#' class='course'>Course</a>
                    <a href='#' class='book'>books</a>
                    <a href='#' class='is'>ISBN</a>
                    <a href='#' class='op'>Other Products</a>
                </div>
                <span id='nav-opener' onclick='openNav()'>&#9776;</span>
              </div>     
        
        </div>
        <div id='content'>
            <img id='kindle' src='https://images-na.ssl-images-amazon.com/images/G/01/kindle/merch/2018/CAMPAIGN/Holiday/DECEMBER-style-4/TAB/V2/Holiday-4-fam-gw-desktop-hero-image-map-tall_3000x1200x2_v2._CB460583657_.jpg'>
            <div class='row'>
                <div class='row-item'>
                    <div class='row-item-inner'>
                        <p class='bold'>College Technology</p>
                        <img alt='colege Tech' src='https://images-na.ssl-images-amazon.com/images/G/01/US-hq/2017/img/Consumer_Electronics/1142891_us_consumer_electronics_egg18_dashboardcards_dashboard_card_2x_520x520_1_1539344000._CB481487068_SY520_.jpg' 
                        data-a-hires='https://images-na.ssl-images-amazon.com/images/G/01/US-hq/2017/img/Consumer_Electronics/1142891_us_consumer_electronics_egg18_dashboardcards_dashboard_card_2x_520x520_1_1539344000._CB481487068_SY520_.jpg'>
                    </div>
                </div>
                <div class='row-item'>
                    <div class='row-item-inner'>
                        <p class='bold'>School Supplies</p>
                        <img src='https://wisebread-killeracesmedia.netdna-ssl.com/files/fruganomics/imagecache/605x340/blog-images/iStock-153500715.jpg' 
                        alt='' title='' class='' width='100' height='320'>
                    </div>
                </div>
                <div class='row-item'>
                    <div class='row-item-inner'>
                        <p class='bold'>Recently View</p>
                        <img alt='Deals' src='https://images-na.ssl-images-amazon.com/images/G/01/img18/events/12dod/12DOD_gw_dashboardcard_520x520._CB479076569_SY520_.jpg'
                        data-a-hires='https://images-na.ssl-images-amazon.com/images/G/01/img18/events/12dod/12DOD_gw_dashboardcard_520x520._CB479076569_SY520_.jpg'>
                        <p>New deals every day on apparel, books and everything else!</p>
                    </div>
                </div>
            </div>
        </div> 

<?php
$query = "SELECT COURSE FROM books"; 
$run = mysqli_query($dbe, $query); 

$count = mysqli_num_rows($run);

if ($count > 0){
    while($row = mysqli_fetch_array($run, MYSQLI_ASSOC)){
        echo "<div id='newbar' class='newbar'>
             <a href='http://localhost/amazon3.php' target='_blank' class='tee'>".$row['COURSE']."</a>
            </div>";
    }
    
  }

  $query = "SELECT BOOK_NAME FROM books"; 
$run = mysqli_query($dbe, $query); 

$count = mysqli_num_rows($run);

if ($count > 0){
    while($row = mysqli_fetch_array($run, MYSQLI_ASSOC)){
        echo "<div id='newbar' class='newbar'>
             <a href='http://localhost/amazon3.php' class='tie'>".$row['BOOK_NAME']."</a>
            </div>";
    }
  }

  $query = "SELECT ISBN FROM books"; 
$run = mysqli_query($dbe, $query); 

$count = mysqli_num_rows($run);

if ($count > 0){
    while($row = mysqli_fetch_array($run, MYSQLI_ASSOC)){
        echo "<div id='newbar' class='newbar'>
             <a href='http://localhost/amazon3.php' class='tat'>".$row['ISBN']."</a>
            </div>";
    }
    
  }

  
mysqli_close($dbe);
include('amazonft.php');
?>