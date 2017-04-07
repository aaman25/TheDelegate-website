<?php  
session_start(); 
  
?>  
  
  
  
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">  
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.js"></script>
<link rel="stylesheet" href="D3H.css" type="text/css">
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  
  
</style>  
  
<body>  
                                                                 <!-- -   nav           -->
    
    
    
        <header id="topHeader">
    <ul class="topnav" id="myTopnav">
            <li style="width:10%" class="nightHover"><a  href="javascript:void(0);" onClick="nightMode()" style="font-size: 28px;padding-top:2px;">&#9728;</a></li>
             <li style="width:15%;">
         <form>
             <input type="text" name="search" placeholder="">
         </form>
        </li>
                <li  style ="width:50%;letter-spacing:8px;font-size:17px;"><a href="#news">THE DELEGATE</a></li>
        <li   style="width:25%;"> <img id="dashImg"src="https://cdn3.iconfinder.com/data/icons/gray-user-toolbar/512/manager-128.png"  style="width:35px;height:35px;"><a href="Registration.php" >Register</a> </li>
<!-- - - - - - - - - - - - - - - - - - - Phone Mode - - - - - - - - - - - - - - - - - - - - - - - -->
            <li style="width:10%;" class="nightHover"><a  href="javascript:void(0);" onClick="nightModePhone()" style="font-size: 28px;padding-top:2px;">&#9728;</a></li>
        <li class="searchIcon" style="width:10%" ><a href="javascript:void(0);" onClick="searchResponse()"><img src="https://cdn1.iconfinder.com/data/icons/hawcons/32/698956-icon-111-search-128.png"  style="width:40px;height:40px;"></a></li>
       <li  class="delIcon" style="width:60%;"><a href="#">THE DELEGATE</a></li>
          <li class="dashIcon" style="width:20%"><a href="#"><img src="https://cdn3.iconfinder.com/data/icons/gray-user-toolbar/512/manager-128.png"  style="width:50%;height:40px;"></a></li>

    </ul>
</header>
<style>
li.nightHover a:hover{
    color:#d38928;
}
</style>



<header id="lowerHeader">
    <ul class="lowNav" id="myLowNav">
        <li><a href="#">MUN Trivia</a></li>
        <li><a href="#">Meet The Veterans</a></li>
        <li><a href="D3P2.html">General Articles</a></li>
        <li class="mainLi"><a  href="D3H6(1).html">Home</a></li>
        <li><a href="#">CEO's Note</a></li>
        <li><a href="#">Our Partners</a></li>
        <li><a href="#">Know Us</a></li>
        <li class="icon">
            <a href="javascript:void(0);" onClick="navResponse()" style="width:40px:height:40px;">&#9776;</a>
        </li>
    </ul>
</header>
<div class="searchBar" id="mySearchBar">
        <form>
             <input type="text" name="search" placeholder="">
         </form>
</div>
<script>
function searchResponse(){
var x=document.getElementById("mySearchBar");
if(x.className==="searchBar"){
    x.className += " expand";
}else{
    x.className="searchBar";
    }
}
</script>
<script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function navResponse() {

    var el=document.getElementsByClassName("lowNav");
    if(el[0].classList.contains("responsive"))
    {
    el[0].classList.remove("responsive");
    }
    else if(el[0].classList.contains("lowNav"))
    {
    el[0].classList.add("responsive");
    }

    
    

    /*var x=document.getElementById("mylowNav");
    if(x.className==="lowNav")
    x.className+=" responsive";
    else
    x.className="lowNav";*/
    
}

function nightMode() {
  

           var a = document.getElementById("myLowNav");
    if (a.className === "lowNav") {
        a.className+= " nightmode";
    } else {
        a.className = "lowNav";
    }
               var b = document.getElementById("myTopnav");
      if (b.className === "topnav") {
        b.className+= " nightmode";
    } else {
        b.className = "topnav";
    }

               var c = document.getElementById("myFullArticle");
      if (c.className === "fullArticle") {
        c.className+= " nightmode";
    } else {
        c.className = "fullArticle";
    }

               var d = document.getElementById("myfAT");
      if (d.className === "fAT") {
        d.className+= " nightmode";
    } else {
        d.className = "fAT";
    }
}
function nightModePhone() {

   

          
               var b = document.getElementById("myTopnav");
      if (b.className === "topnav") {
        b.className+= " nightmodephone";
    } else {
        b.className = "topnav";
    }
 
 

    var el = document.getElementsByClassName("lowNav");
    if(el[0].classList.contains("nightmodephone"))
    el[0].classList.remove("nightmodephone");
    else if(el[0].classList.contains("lowNav"))
    el[0].classList.add("nightmodephone");

            var c = document.getElementById("myFullArticle");
      if (c.className === "fullArticle") {
        c.className+= " nightmodephone";
    } else {
        c.className = "fullArticle";
    }

               var d = document.getElementById("myfAT");
      if (d.className === "fAT") {
        d.className+= " nightmodephone";
    } else {
        d.className = "fAT";
    }
}

     




</script>
<style>
    div.fullArticle{
    top:110px;
    width:100%;
    padding:40px 6%;
    position: absolute;
    font-size: 26px;
    text-align: center;
    background-color: #eae4dc;
}
img.coverImg{
    display: block;
    width:80%;
    margin-left:10%;
    height:400px;
    -webkit-box-shadow: -1px 4px 9px 4px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 4px 9px 4px rgba(0,0,0,0.75);
box-shadow: -1px 4px 9px 4px rgba(0,0,0,0.75);
}

/*------------night mode------------------------------------------------------------------*/


div.fullArticle.nightmode{
    top:118px;
    width:100%;
    padding:40px 6%;
    position: absolute;
    font-size: 26px;
    text-align: center;
	background-image: url("http://images.all-free-download.com/images/graphiclarge/black_texture_texture_background_06_hd_pictures_169901.jpg") ;
transition: 0.1s;
}
div.fullArticle.nightmode h1{
   
            color:#ba8651;
transition: 0.3s;
}
p.fAT.nightmode{
    color:#bcb5b1;
transition: 0.3s; 
}
@media screen and (max-width:950px) {

    div.fullArticle.nightmodephone{
    top:118px;
    width:100%;
    padding:40px 6%;
    position: absolute;
    font-size: 26px;
    text-align: center;
	background-image: url("http://images.all-free-download.com/images/graphiclarge/black_texture_texture_background_06_hd_pictures_169901.jpg") ;
transition: 0.1s;
}
div.fullArticle.nightmodephone h1{
   
            color:#ba8651;
transition: 0.3s;
}
p.fAT.nightmodephone{
    color:#bcb5b1;
transition: 0.3s; 
}
    </style>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    
    
    
    
    
    
    
    
    
    
    
    
                                                                         <!--    nav end            -->
  
<div class="container">  
    <div class="row" style="text-align:center;">  
        <div class="col-md-4 col-md-offset-4">  
            <div class="login-panel panel panel-success">  
                <div class="panel-heading">  
                    <h3 class="panel-title">Sign In</h3>  
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action="login.php">  
                        <fieldset>
                            <div class="form-group"  >  
                                <input class="form-control" placeholder="Name" name="name" type="text" autofocus>  
                            </div> 
                            <br>
                            <div class="form-group"  >  
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>  
                            </div>  
                            <br>
                            <div class="form-group">  
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">  
                            </div>  
  
  <br>
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >  
  
                            <!-- Change this to a button or input when using this as a form -->  
                          <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->  
                        </fieldset>  
                    </form>  
                </div>  
            </div>  
        </div>  
    </div>  
</div>  
  
  
</body>  
  
</html>  
  
<?php  
  
include("Db_conection.php");  
  
if(isset($_POST['login']))  
{  
    $user_email=$_POST['email'];  
    $user_pass=$_POST['pass'];  
    $user_name=$_POST['name'];
    $check_user="select * from users WHERE user_email='$user_email' AND user_pass='$user_pass' AND user_name='$user_name'";  
    $run=mysqli_query($dbcon,$check_user);  
  
    if(mysqli_num_rows($run))  
    {  
        echo "<script>window.open('welcome.php','_self')</script>";  
          $_SESSION['name'] =$user_name;
        $_SESSION['email']=$user_email;  
  
    }  
    else  
    {  
      echo "<script>alert('Email or password is incorrect!')</script>";  
    }  
}  
?>