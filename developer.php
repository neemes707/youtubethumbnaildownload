
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="description" content=" A Small Project!">
  <meta name="keywords" content="Thumbnail , Downloader, download thumnails, youtube, image, logo , one click, no ads, free">

  <meta name="author" content="">
  <link rel="icon" href="logo.png" type="image/gif" > 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" >

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <title> Youtube Thumbnail Downloader | One Click Thumbnail Downloader </title>
 
  <style>
   @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');


*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
  background : black;
  
} 
nav{
  display: flex;
  height: 90px;
  width: 100%;
  background: #000000;
  align-items: center;
  justify-content: space-between;
  padding: 0 50px 0 100px;
  flex-wrap: wrap;
  border-bottom: 1px solid #e5e5e5;

}
nav .logo{
  color: #fff;
  font-size: 24px;
  font-weight: 500;
}
nav ul  {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  z-index:9999999;
}
nav ul li{
  margin: 0 5px;
}
nav ul li a{
  color: #f2f2f2;
  text-decoration: none;
  font-size: 15px;
  font-weight: 500;
  padding: 4px 17px;
  border-radius: 5px;
  letter-spacing: 1px;
  transition: all 0.3s ease;
}
nav ul li a.active,
nav ul li a:hover{
  color: rgb(0, 0, 0);
  font-weight: 700px;
  background: #FFB830;
}
nav .menu-btn i{
  color: #fff;
  font-size: 22px;
  cursor: pointer;
  display: none;
}
input[type="checkbox"]{
  display: none;
}
@media (max-width: 1000px){
  nav{
    padding: 0 40px 0 50px;
  }
}
@media (max-width: 950px) {
  nav .menu-btn i{
    display: block;
  }


  #click:checked ~ .menu-btn i:before{
    content: "\f00d";
  }
  nav ul{
    position: fixed;
    top: 80px;
    left: -100%;
    background: rgb(0, 0, 0);
    height: 100vh;
    width: 100%;
    text-align: center;
    display: block;
    transition: all 0.3s ease;
  }
  #click:checked ~ ul{
    left: 0;
  }
  nav ul li{
    width: 100%;
    margin: 40px 0;
  }
  nav ul li a{
    width: 100%;
    margin-left: -100%;
    display: block;
    font-size: 20px;
    transition: 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  }
  #click:checked ~ ul li a{
    margin-left: 0px;
  }
  nav ul li a.active,
  nav ul li a:hover{
    background: none;
    color: #FFB830;
  }
}









::selection{
  color: #000000;
  background: #ffffff;
}




input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid white;
  border-radius: 5px;
  color: white;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #FFB830;
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.contain{
  max-width: 450px;
  border: 1px solid #FFB830;
  margin: 40px auto;
  padding: 40px;
}


.contain h3{
 color: #FFB830;
 text-align:centre;
 font-size: 19px;
 font-weight:500;
}

input[type=submit]:hover {
  background-color: white;
  color:black;
  
}

 .btnn{
  color:black;
  font-size: 15px;
  font-weight: 700;
}


.labe{
  color:White;
  margin :  10px;
}





.wrappersv{
      background: black;
      border-radius: 15px;
      padding: 25px;
      max-width: 380px;
      width: 100%;
      margin: 60px;
       border: 2px solid white;
      box-shadow: 0px 5px 10px rgba(0,0,0,0.2);
       display: block;
    margin-left: auto;
    margin-right: auto ;
  }
  
  .slink{
      display: block;
      margin-bottom: 12px;
      border-radius: 5px;
      padding: 8px 15px;
      border: 2px solid white;
      transition: all 0.2s ease;
      font-size: 15px;
      
  }
  
  .slinkh{
      display: block;
      margin-bottom: 15px;
      margin-top: 20px ;
      border-radius: 5px;
      padding: 18px 15px;
      font-weight:600;
      border: 2px solid white;
      transition: all 0.6s ease;
      text-decoration: none;
  }
  
  .slinkf{
      display: block;
      margin-bottom: 12px;
      border-radius: 5px;
      padding: 8px 15px;
      border: 0px solid white;
      transition: all 0.2s ease;
      text-align: center;
      font-size: 12px;
      
  }
  
  .slink:hover{
  animation: ease-in-out;
      
      color: #FFB830;

  }
  .detailsv{
     text-align: center;
    }
    .detailsv span{
      font-weight: 500;
      font-size: 20px;
    }
















.footer2 {
    width: 100%;
    text-align: center;
    align-items: center;
    justify-content: space-between;
 
}
.footer {
  display: flex;
  flex-flow: row wrap;
  padding: 30px 30px 20px 30px;
  color: #ffffff;
  background-color: rgb(0, 0, 0);
  border-top: 1px solid #e5e5e5;
  font-weight: 300;
  font-size: 17px;

}

.footer > * {
  flex:  1 100%;
}

.footer__addr {
  margin-right: 1.25em;
  margin-bottom: 2em;
   font-size: 15px;
}

.footer__logo {
  font-family: 'Poppins', sans-serif;
  font-weight: 500;
  text-transform: uppercase;
  font-size: 18px;
  z-index: inherit; 
 

}

.footer__addr h2 {
  margin-top: 1.3em;
  font-size: 16px;
  font-weight: 500;
}

.nav__title {
  font-weight: 500;
  font-size: 17px;
  padding-bottom: 19px;

}


.footer__btn {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 36px;
  max-width: max-content;
  background-color: rgba(124, 0, 0, 0.07);
  border-radius: 100px;
  line-height: 0;
  margin: 0.6em 0;
  font-size: 1rem;
  padding: 0 1.3em;
}

.footer ul {
  list-style: none;
  padding-left: 0;
  padding-bottom: 11px;
}

.footer li {
  line-height: 2em;
}

.footer a {
  text-decoration: none;
   font-size: 14px;

  transition: 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

footer a:hover {
  color: #FFB830;
  font-size: 16px;

}

.footer__nav {
  display: flex;
  flex-flow: row wrap;
}


.footer__nav > * {
  flex: 1 50%;
  margin-right: 1.25em;
}

.nav__ul a {
  color: rgb(255, 255, 255);
  
}



.legal {
 
  background-color: black;
color: rgb(255, 255, 255);
text-align: center;
 width: 100%;
 font-size: 13px;
 padding-bottom:18px;
}



@media screen and (min-width: 40.375em) {
  .footer__nav > * {
    flex: 1;
  }
  

  
  .footer__addr {
    flex: 1 0px;
  }
  
  .footer__nav {
    flex: 2 0px;
  }
}
 </style>

 </head>

<body  >

  <nav>
    <div class="logo">
    <a href="/index.php" style="text-decoration: none; color: #FFB830;" >
 
     YT Thumbnail <br> <span style="font-size: 27px;"> Downloader </span> </a>
    </div>
    <input type="checkbox" id="click">
    <label for="click" class="menu-btn">
      <i style=" font-family: 'Poppins', sans-serif;   font-size: 15px;
  font-weight: 600;  padding: 4px 17px;   border-radius: 5px; background:#FFB830; color: black ;" >
   Menu </i>
    </label>
    <ul>
      <li><a class="   " href="/index.php">Home</a></li>
      <li><a class="  active " href="/developer.php"> Contact Us </a></li>
      <li><a class="   " href="/review.php">Review</a></li>  
      <li><a class="   " href="/error.php">Download App</a></li>      
      <li><a class="   " href="/supportus.php">Donate</a></li>
      </ul>
  </nav>




  <div style=" 
  font-size:23px;
  font-weight:500;
    margin: 0 auto;
     text-align: center;
    padding: 10px;
    margin-top:20px;
    margin-bottom:-45px;  color: white;">
  
       Contact through following Social Handles 
    </div>
  
  
  
  
   <div class="wrappersv">
  
      <header class="slinkh">
        <div class="detailsv">
          <span class="name" style=" color: #FFB830;" > Neemesh Kumar Singh </span>
          <p style=" font-size: 14px; font-weight: 300 ; color: #ffffff;"> Bachelor of Technology (B.Tech) 
          </br> Computer Science
          ( Developer )
          </p>
          
        </div>
      </header>
  
      <div class="center">
          </div>
          </div>
      </div>
  
  
  
  
  
   
  

  



  <div class="footer2">



    <footer class="footer">
      <div class="footer__addr">
        <a href="/home" style="text-decoration: none; color: white;"><h1 class="footer__logo"> 
          YT Thumbnail Downloader </h1></a>

        <h2 style="color: #FFB830;">  Instantly Download Youtube Thumbnails </h2>
In Just one Click without any <br>
Distractions and Interruptions.
        
       
      </div>

      <ul class="footer__nav">

        <li class="nav__item">
          <h2 class="nav__title" style="color: #FFB830;">Navigations</h2>

          <ul class="nav__ul">
            <li>
              <a href="/index.php"> Home </a>
            </li>

            <li>
              <a href="/supportus.php"> Support Us </a>
            </li>

            <li>
              <a href="/review.php">  Review </a>
            </li>
          </ul>
        </li>

        <li class="nav__item">
          <h2 class="nav__title" style="color: #FFB830; align-items: center;">Follow Developer On</h2>

          <ul class="nav__ul">
            <li>
              <a href="https://www.instagram.com" target="_blank" >
                <span class="fab fa-instagram" style="text-decoration: none; color: #C13584"> </span> &nbsp; Instagram </a>
            </li>

            <li>
              <a href="https://www.facebook.com" target="_blank" >
                <span class="fab fa-facebook" style="text-decoration: none; color: #3b5998"> </span> &nbsp; Facebook </a>
            </li>

            <li>
               <a href="https://www.twitter.com" target="_blank" >
            <span class="fab fa-twitter" style="text-decoration: none; color: #00Acee">  </span> &nbsp; Twitter</a>
            </li>
          </ul>
        </li>
      </ul>
  </div>

  <div class="legal">
<br>
    <br>
    <p>&copy;  2021  Youtube Thumbnail Downloader  | All Rights Reserved 
    </p>
  </div>
  </footer>
  </div>
</body>

</html>
