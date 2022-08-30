
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="description" content=" A Small Project!">
  <meta name="keywords" content="Thumbnail , Downloader, download thumnails, youtube, image, logo , one click, no ads, free">

  <meta name="author" content="Shivansh Vasu">
  <link rel="icon" href="logo.png" type="image/gif" > 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" >

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <title> Youtube Thumbnail Downloader | One Click Thumbnail Downloader | Review </title>
 
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

















.wrapper2{
position: relative;
margin : 40px auto;
max-width: 400px;
background: #000;
border-radius: 5px;
box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
border: 2px solid white;
}

.wrapper2 .head-text{
color: #000;
border-radius: 5px 5px 0 0;
border-bottom: 2px solid black;
padding: 20px 20px;
font-weight: 600;
font-size: 20px;
background: #FFB830;
text-align: center;
}

.wrapper2 .chat-box{
padding: 20px;
width: 100%;
}

.chat-box form{
padding: 35px 25px;
margin: 20px 0;
border-radius: 5px;
border: 1px solid lightgrey;
background: #000;
}
.chat-box form .field{
height: 30px;
width: 100%;

}




.historytab {
margin: 15px auto;
width: 100%;
display: flex;
background: #000;
}
 .historytab a{
padding:10px 60px;
align-items: self;
margin: 15px auto;
text-decoration:none;
cursor: pointer;
color: #000;
font-size: 18px;
font-weight: 500;
border: 2px solid Black;
border-radius: 5px;
background: #FFB830;

}


.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}


.row1{
  color: white;
  background: White;
  text-align: center;
  margin: 10px auto ;

}
.row1 img{
    align-items: center;
    width: 150px;
    margin-bottom: 20px;
}
.row1 p{ 
font-size: 35px;
color : Black;
margin:  auto;
letter-spacing: 1px;
}


















@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

.wrapper{
  max-width: 1080px;
  margin: 90px auto;
  padding: 0 20px;
  position: relative;
}
.wrapper .center-line{
  position: absolute;
  height: 100%;
  width: 4px;
  background: #fff;
  left: 50%;
  top: 20px;
  transform: translateX(-50%);
}
.wrapper .row{
  display: flex;
}
.wrapper .row-1{
  justify-content: flex-start;
}
.wrapper .row-2{
  justify-content: flex-end;
}
.wrapper .row section{
  background: #FFB830;
  border-radius: 5px;
  width: calc(50% - 40px);
  padding: 20px;
  position: relative;
}
.wrapper .row section::before{
  position: absolute;
  content: "";
  height: 15px;
  width: 15px;
  background: #FFB830;
  top: 28px;
 
  transform: rotate(45deg);
}
.row-1 section::before{
  right: -7px;
}
.row-2 section::before{
  left: -7px;
}
.row section .icon,
.center-line .scroll-icon{
  position: absolute;
  background: #FFB830;
  height: 40px;
  width: 40px;
  text-align: center;
  line-height: 40px;
  border-radius: 50%;
  color: black;
  background-color: #FFB830;
  font-size: 17px;
  box-shadow: 0 0 0 4px #fff, inset 0 2px 0 rgba(0,0,0,0.08), 0 3px 0 4px rgba(0,0,0,0.05);
}
.center-line .scroll-icon{
  bottom: 0px;
  left: 50%;
  background: #FFB830;
  font-size: 25px;
  transform: translateX(-50%);
}
.row-1 section .icon{
  top: 15px;
  right: -60px;
}
.row-2 section .icon{
  top: 15px;
  left: -60px;
}
.row section .details,
.row section .bottom{
  display: flex;
  align-items: center;
  justify-content: space-between;
    background:#FFB830;
}
.row section .details span{
  font-size: 15px;
    background:#FFB830;
}

.row section .details .title{
  font-size: 18px;
  font-weight: 600;
    background:#FFB830;
}


.row section p{
  margin: 10px 0 17px 0;
   background:#FFB830;
   font-size: 15px;
}
.row section .bottom a{
  text-decoration: none;
  background: #FFB830;
  color: #fff;
  padding: 7px 15px;
  border-radius: 5px;
 font-size: 14px; 
  font-weight: 400;
  transition: all 0.3s ease;
}

.row section .bottom i{

  background:#FFB830;
  font-size: 15px; 
}


.row section .bottom a:hover{
  transform: scale(0.97);
}
@media(max-width: 790px){
  .wrapper .center-line{
    left: 40px;
  }
  .wrapper .row{
    margin: 30px 0 3px 60px;
  }
  .wrapper .row section{
    width: 100%;
  }
  .row-1 section::before{
    left: -7px;
  }
  .row-1 section .icon{
    left: -60px;
  }
}
@media(max-width: 440px){
  .wrapper .center-line,
  .row section::before,
  .row section .icon{
    display: none;
  }
  .wrapper .row{
    margin: 10px 0;
  }
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
      <li><a class="   " href="/developer.php"> Contact Us </a></li>
      <li><a class="  active " href="/review.php">Review</a></li> 
      <li><a class="   " href="/error.php">Download App</a></li>       
      <li><a class="   " href="/supportus.php">Donate</a></li>
      </ul>
  </nav>






<div class="wrapper2">
  <div class="head-text">
    Give Your Valuable Review <br> or Send a Message To us!
  </div>
  <div class="chat-box">

    <form action="#">
        <div class="head-text" style="color:white; font-size: 15px; font-weight: 400;  margin-top:-25px ; background: #000;  ">
     Fll this Google Form to Give your <br> Precious Ideas, Modifications and Advices!
  </div>
          
     
        <div class="row1" style="color:white; background: #000;" >
        
               <div class="historytab"  style=" margin-top:-25px ; margin-bottom:-25px;">
         <a  href="https://forms.gle/HdHgWUv3dUm6g9Xj9" target="_blank" > Write Review Here! </a>

          

        </div>
           
            
        </div>
    </div>


</div>

<div>

<div class="head-text  " style="color:#FFB830; align-items:centre; font-size: 23px; font-weight: 500;
  margin-top: 58px ; margin-bottom: -58px ;
 text-align: center; background: #000;  ">
     Some of the Previous Reviews!
  </div>


  </div>











 <div class="wrapper">
    <div class="center-line">
      <a href="#" class="scroll-icon"><i class="fas fa-caret-up" style="  background: #FFB830; "></i></a>
    </div>



    <div class="row row-1">
      <section>
        <i class="icon fas fa-heart"></i>
      
        <div class="details">
          <span class="title"> Wesbsite is vey Good!</span>
          <span>23 Dec 2021</span>
        </div>
        <p>The website is looking really very cool. It's presentation is just mind blowing. Keep it Up Bro!</p>
        <div class="bottom">
           <a >
          <i class="fas fa-star" style="  background: #FFB830; color:black; font-size:18px; "  ></i>
          <i class="fas fa-star" style="  background: #FFB830; color:black; font-size:18px; "  ></i>
          <i class="fas fa-star" style="  background: #FFB830; color:black; font-size:18px; "  ></i>
          <i class="fas fa-star" style="  background: #FFB830; color:black; font-size:18px; "  ></i>
          <i class="fas fa-star" style="  background: #FFB830; color:black; font-size:18px; "  ></i>
          </a>
          <i>-Rudransh Srivastava (Student)</i>
        </div>
      </section>
    </div>
    






     <div class="row row-2">
      <section>
        <i class="icon fas fa-heart"></i>
        <div class="details">
          <span class="title"> This Idea is very innovative!</span>
          <span>23 Dec 2021</span>
        </div>
        <p>This idea is relly very Amazing. It is Without any garbage. We really Liked this!</p>
        <div class="bottom">
         <a >
          <i class="fas fa-star" style="  background: #FFB830; color:black; font-size:18px; "  ></i>
          <i class="fas fa-star" style="  background: #FFB830; color:black; font-size:18px; "  ></i>
          <i class="fas fa-star" style="  background: #FFB830; color:black; font-size:18px; "  ></i>
          <i class="fas fa-star" style="  background: #FFB830; color:black; font-size:18px; "  ></i>
          <i class="fas fa-star" style="  background: #FFB830; color:black; font-size:18px; "  ></i>
          </a>
          <i>- Kausstubh Jaiswal (Student)</i>
        </div>
      </section>
    </div>







<div class="row row-1">
      <section>
        <i class="icon fas fa-heart"></i>
      
        <div class="details">
          <span class="title">A New sparkel!</span>
          <span>23 Dec 2021</span>
        </div>
        <p>You always bring something new to us and this one is really very cool brother. Keep Growing!</p>
        <div class="bottom">
           <a >
          <i class="fas fa-star" style="  background: #FFB830; color:black; font-size:18px; "  ></i>
          <i class="fas fa-star" style="  background: #FFB830; color:black; font-size:18px; "  ></i>
          <i class="fas fa-star" style="  background: #FFB830; color:black; font-size:18px; "  ></i>
          <i class="fas fa-star" style="  background: #FFB830; color:black; font-size:18px; "  ></i>
          <i class="fas fa-star" style="  background: #FFB830; color:black; font-size:18px; "  ></i>
          </a>
          <i>-Shivansh Vasu(Student)</i>
        </div>
      </section>
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
    <p>&copy;  2021  Youtube Thumbnail Downloader  | All Rights Reserved 
    </p>
  </div>
  </footer>
  </div>
</body>

</html>
