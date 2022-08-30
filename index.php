<?php
  if(isset($_POST['button'])){
    $imgUrl = $_POST['imgurl'];
    $ch = curl_init($imgUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $downloadImg = curl_exec($ch);
    curl_close($ch);
    header('Content-type: image/jpg');
    header('Content-Disposition: attachment;filename="thumbnail.jpg"');
    echo $downloadImg;
  }
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="description" content=" Download Youtube Thumbnails For Completely Free and Wthout any Interruptions!">
  <meta name="keywords" content="Thumbnail , Downloader, download thumnails, youtube, image, logo , one click, no ads, free">

  <meta name="author" content="">
  <link rel="icon" href="logo.png" type="image/gif" > 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" >

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <title> Youtube Thumbnail Downloader | One Click Thumbnail Downloader | Homepage </title>
 
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
















form{
  width: 450px;
  background: black;
  padding: 30px ;
  border-radius: 5px;
  border: 1px solid white;
}
form header{
  text-align: center;
  font-size: 28px;
  font-weight: 500;
  margin-top: 10px;
  color: #FFB830;
  border-bottom:  2px solid #FFB830;
}
form .url-input{
  margin: 30px 0;
}
.url-input .title{
  font-size: 18px;
  color: White;
}
.url-input .field{
  margin-top: 5px;
  height: 50px;
  width: 100%;
  position: relative;
}
.url-input .field input{
  height: 100%;
  width: 100%;
  border: none;
  outline: none;
  padding: 0 15px;
  font-size: 15px;
  background: #F1F1F7;
  border-bottom: 4px solid black;
  font-family: 'Noto Sans', sans-serif;
}
.url-input .field input::placeholder{
  color: #b3b3b3;
}
.url-input .field .bottom-line{
  position: absolute;
  left: 0;
  bottom: 0;
  height: 4px;
  width: 100%;
  background: #FFB830;
  transform: scale(0);
  transition: transform 0.3s ease;
}
.url-input .field input:focus ~ .bottom-line,
.url-input .field input:valid ~ .bottom-line{
  transform: scale(1);
}
form .preview-area{
  border-radius: 5px;
  height: 220px;
  display: flex;
  overflow: hidden;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  border: 2px dashed #FFB830;
}
.preview-area.active{
  border: none;
}
.preview-area .thumbnail{
  width: 100%;
  display: none;
  border-radius: 5px;
}
.preview-area.active .thumbnail{
  display: block;
}
.preview-area.active .icon,
.preview-area.active span{
  display: none;
}
.preview-area .icon{
  color: #FFB830;
  font-size: 80px;
}
.preview-area span{
  color: #FFB830;
  margin-top: 25px;
}
form .download-btn{
  color: #fff;
  height: 53px;
  width: 100%;
  outline: none;
  border: none;
  font-size: 17px;
  font-weight: 500;
  cursor: pointer;
  margin: 30px 0 20px 0;
  border-radius: 5px;
  background: #FFB830;
  pointer-events: none;
  transition: background 0.3s ease;
}
.download-btn:hover{
  background: white;
  color: Black;
}
@media screen and (max-width: 460px){
  body{
    padding: 0 20px;
  }
  form header{
    font-size: 24px;
  }
  .url-input .field,
  form .download-btn{
    height: 45px;
  }
  form .download-btn{
    font-size: 15px;
  }
  form .preview-area{
    height: 130px;
  }
  .preview-area .icon{
    font-size: 50px;
  }
  .preview-area span{
    margin-top: 10px;
    font-size: 12px;
  }
}





























::selection{
  color: #000000;
  background: #FFB830;
}




.contain{
  max-width: 450px;
  margin: 40px auto;
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







.cards{
margin: 0 auto;
padding: 40px 40px;}
.titlee{
font-size:20px;
color : #FFB830;
font-weight: 500;
display:flex;
justify-content: center;
}


.animate__pulse {
  --animate-duration: 2s;
}




.historytab {
margin: 15px ;
margin-bottom: 120px;
width: 100%;
display:flex;
justify-content: space-around;

}
 .historytab a{
padding:10px 10px;
margin: 15px auto;
text-decoration:none;
cursor: pointer;
color:black;
font-size: 18px;
font-weight: 500;
border-radius: 5px;
text-align: center;
background: #FFB830;
font-weight: 600;
}

.retrnn{
display: flex;

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
    <a href="/homepage.html" style="text-decoration: none; color: #FFB830;" >
 
     YT Thumbnail <br> <span style="font-size: 27px;"> Downloader </span> </a>
    </div>
    <input type="checkbox" id="click">
    <label for="click" class="menu-btn">
      <i style=" font-family: 'Poppins', sans-serif;   font-size: 15px;
  font-weight: 600;  padding: 4px 17px;   border-radius: 5px; background:#FFB830; color: black ;" >
   Menu </i>
    </label>
    <ul>
      <li><a class=" active  " href="/homepage.html">Home</a></li>
      <li><a class="   " href="/developer.php"> Contact Us </a></li>
      <li><a class="   " href="/review.php">Review</a></li>   
        
      <li><a class="   " href="/error.php">Download App</a></li>   
      <li><a class="   " href="/supportus.php">Donate</a></li>
      </ul>
  </nav>






































<div class="contain">
 


  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <header>Download Thumbnail </header> 
    <div class="url-input">
      <span class="title">Paste video url here:</span>
      <div class="field">
        <input type="text" placeholder="https://www.youtube.com/paste_your_video_link_here" required>
        <input class="hidden-input" type="hidden" name="imgurl">
        <span class="bottom-line"></span>
      </div>
    </div>
    <div class="preview-area">
      <img class="thumbnail" src="" alt="">
      <i class="icon fas fa-cloud-download-alt"></i>
      <span>Paste video url to see preview</span>
    </div>
    <button class="download-btn" type="submit" name="button">Download Thumbnail</button>
  </form>



</div>
































<div class="cards">
    <div class="titlee">
       The  Project <br>
    </div>

<div style="font-size:15px; color : white; font-weight: 350; ">

        
         This is <b style="font-size:17px; color : #FFB830; font-weight: 500;">  Help Us to Grow </b>  
         by giving your Valuable and Precious Reviews, Ideas or Suggestions. Get connected to  <a
            href="" target="_blank" style="text-decoration: underline;
            color: #FFB830; font-weight: 500; ">   
            Admin (Developer) by Clicking Here !</a>
    </div>

<div>

    <div class="retrnn">
        <div class="historytab">
            <a  href="/supportus.php"> Donate! </a>
           </div>

           <div class="historytab">
               <a  href="/review.php"> Give Review!  </a>
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
              <a href="/homepage.html"> Home </a>
            </li>

            <li>
              <a href="/supportus.php"> Support Us </a>
            </li>

            <li>
              <a href="/review.php"> Review </a>
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




<script>
    const urlField = document.querySelector(".field input"),
    previewArea = document.querySelector(".preview-area"),
    imgTag = previewArea.querySelector(".thumbnail"),
    hiddenInput = document.querySelector(".hidden-input"),
    button = document.querySelector(".download-btn");
    urlField.onkeyup = ()=>{
      let imgUrl = urlField.value;
      previewArea.classList.add("active");
      button.style.pointerEvents = "auto";
      if(imgUrl.indexOf("https://www.youtube.com/watch?v=") != -1){
        let vidId = imgUrl.split('v=')[1].substring(0, 11);
        let ytImgUrl = `https://img.youtube.com/vi/${vidId}/maxresdefault.jpg`;
        imgTag.src = ytImgUrl;
      }else if(imgUrl.indexOf("https://youtu.be/") != -1){
        let vidId = imgUrl.split('be/')[1].substring(0, 11);
        let ytImgUrl = `https://img.youtube.com/vi/${vidId}/maxresdefault.jpg`;
        imgTag.src = ytImgUrl;
      }else if(imgUrl.match(/\.(jpe?g|png|gif|bmp|webp)$/i)){
        imgTag.src = imgUrl;
      }else{
        imgTag.src = "";
        button.style.pointerEvents = "none";
        previewArea.classList.remove("active");
      }
      hiddenInput.value = imgTag.src;
    }
  </script>




</body>

</html>
