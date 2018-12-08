<!DOCTYPE html>

<html>
<head>
	<title>
	<?php
	echo "amazon shopping place";
	?>
	</title>
	<style>
.sidenav {
    height: 100%; 
    width: 0; 
    position: fixed; 
    z-index: 1; 
    top: 0; 
    left: 0;
    background-color:white; 
    overflow-x: hidden; 
    padding-top: 60px; 
    transition: 0.5s; 
    font-family: "Amazon Ember",Arial,sans-serif;

}


.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #000000be;
    display: block;
    transition: 0.3s;
}
.signin{
    background-color:#d2d5e0;
    color:white;
    
}

.course:hover,.book:hover,.is:hover,.op:hover {
   background-color:#C8C8C8;
}
.backbtn:hover{
    color: #fa0606;  
}
.closebtn:hover {
    color: #fa0606;
}
.Img{
    height:30px;
    width:30px;
    float:left;

}
.newbar{
    height: 100%; 
    width: 0; 
    position: fixed; 
    z-index: 1; 
    top: 0; 
    left: 0;
    background-color:white; 
    overflow-x: hidden; 
    padding-top: 60px; 
    transition: 0.5s; 
    font-family: "Amazon Ember",Arial,sans-serif;
}

.newbar a {
  padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #000000be;
    display: block;
    transition: 0.3s;
}
.backbtn{
    position: absolute;
    top: 0;
    left: 25px;
    font-size: 36px;
    margin-left: 0px;   
}

#nav-opener{
    font-size:30px;
    cursor:pointer;
    color:white;
    position:relative;
    top:-12px;
    margin-left:5px;
}
#logo{
    width:10%
}
/*.line{
    color: black;
}
*/
.static{
color:gray;
}

 .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}
.money, #search,#search-button,#deals{
float:right;
}
/*add background color to nav*/
#nav{
    background: #232f3e;
}
/*make banner 100% of page width*/
#banner{
    width:100%;
}

/*search bar is 30% width and 19.5pt font*/
#search{
    width:30%;
    font-size:19.5pt;
    border: thin solid #febd6a;
}

/*make search button right color*/
#search-button{
    background:#febd6a;
    border-radius: 2px;
    font-size:16pt;
}

/*make content 100% width*/
#content,#kindle{
    width:100%;
}

body{
    background:#fff;
}

/*make bold and 1.3em*/
.bold{
    font-weight:bold;
    font-size: 1.3em;
}

/*each row item is 1/3 of the page and floated left*/
.row-item{
    width:33%;
    float: left;
    position: relative;
    top:-200px;
}
/*inner row items are 70% of the row item and centered*/
.row-item-inner{
    width:70%;
    margin-left:auto;
    margin-right:auto;
    background:white;
    padding:20px;
    height: 200px;
}

/*row item inner images are 100% if width*/
.row-item-inner img{
    width:100%;
}

</style>
	
</head>

<body>
<span style="font-size:40px;cursor:pointer" ></span>
<script>
        function openNav() {
         document.getElementById("mySidenav").style.width = "300px";
        }
        
        function closeNav() {
         document.getElementById("mySidenav").style.width = "0";
        }
        </script>
              
              
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script>

        $(document).ready(function(){
          $(".course").click(function(){ 
            $(".course,.book,.is,.op").toggle("width"); 
            $(".course").after($(".tee")) });
});
$(document).ready(function(){
          $(".book").click(function(){
            $(".course,.book,.is,.op").toggle("width"); 
            $(".book").after($(".tie")) });
});

$(document).ready(function(){
          $(".is").click(function(){
            $(".course,.book,.is,.op").toggle("width"); 
            $(".is").after($(".tat")) });
});

$(document).ready(function(){
          $(".op").click(function(){
            $(".course,.book,.is,.op").toggle("width"); 
            $(".op").after($(".tut")) });
});

        </script>
			  
			  
