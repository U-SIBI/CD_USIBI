<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>USIBI web | Advance</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    *{
      margin:0;
      padding:0;
      font-family: "Kanit", sans-serif;
      font-weight: 300;
    }
    .bg-image{
     /* Set the position of the background image */
    background-position: center;
    /* Set the size of the background image */
    background-size: cover;
    /* Set the repeat of the background image */
    background-repeat: no-repeat;
    /* background-image: url("image/bgpoint.png"); */
    background-image: url("image/bgpoint.png");   
    }
    body{
      background: #0174BE;
    }
    .container{
      width: 80%;
      margin:80px;
    }
    .container h1{
      padding: 32px 0;
      color : #fff;
      font-size: 30px;
      text-align: center;
    }
    .row{
      display: flex;
      align-items: center;
      flex-wrap: wrap;
    }
    .col{
      flex-basis: 50%;
      min-width:250px;
    }
    .feature-img{
      width: 70%;
      margin:auto;
      position:relative;
      border-radius:6px;
      overflow:hidden;
    }
    .small-img-row{
       display: flex;
       background: white;
       margin: 20px 0;
       align-items: center;
       border-radius:10px;
       overflow: hidden;
       width: 85%;
    }
    .small-img{
      position: relative;
    }
    .small-img img{
      width: 150px;
    }
    .small-img-row p{
      margin-left: 20px;
      color: black;
      line-height: 22px;
      font-size: 15px;
    }
    .play-btn{
      width:60px;
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%,-50%);
      cursor: pointer;
    }
    .small-img .play-btn{
      width: 35px;
    }
    .video-player{
      width: 80%;
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%,-50%);
      display: none;
    }
    video.focus{
      outline:none;
    }
    .close-button{
      position: absolute;
      top: 10px;
      right: 10px;
      width: 30px;
      cursor: pointer;
    }

    @media (max-width: 1024px) {
    .container {
        width: 90%;
        margin: 60px auto;
    }

    .container h1 {
        font-size: 26px;
    }

    .col {
        flex-basis: 100%;
        text-align: center;
    }

    .feature-img {
        width: 80%;
    }

    .small-img-row {
        width: 90%;
    }
}

/* Responsive layout for mobile devices */
@media (max-width: 768px) {
    .container {
        width: 95%;
        margin: 40px auto;
    }

    .container h1 {
        font-size: 22px;
    }

    .col {
        flex-basis: 100%;
        text-align: center;
    }

    .feature-img {
        width: 90%;
    }

    .small-img-row {
        width: 95%;
    }

    .small-img img {
        width: 100px;
    }

    .small-img-row p {
        font-size: 14px;
        margin-left: 10px;
    }

    .play-btn {
        width: 50px;
    }

    .small-img .play-btn {
        width: 30px;
    }

    .video-player {
        width: 90%;
    }
}

/* Responsive layout for small mobile devices */
@media (max-width: 480px) {
    .container {
        width: 100%;
        margin: 20px auto;
    }

    .container h1 {
        font-size: 18px;
    }

    .feature-img {
        width: 100%;
    }

    .small-img img {
        width: 80px;
    }

    .small-img-row p {
        font-size: 12px;
        margin-left: 5px;
    }

    .play-btn {
        width: 40px;
    }

    .small-img .play-btn {
        width: 25px;
    }

    .video-player {
        width: 100%;
    }
}
  </style>
</head>
<body class="bg-image">
  <div class="container">
    <h1> SIBI ADVANCE TUTORIAL</h1>
    <div class="row"> 
      <div class="col">
        <div class="feature-img">
        <img src="image/hedponGirlBG.png" alt="" width="100%">
        </div>
      </div>
      <div class="col">
        <div class="small-img-row">
          <div class="small-img">
            <img src="image/diaThumb.png" alt="" width="200">
            <img src="image/playButton.png" alt="" class="play-btn" onclick="playVideo('video/dia.mp4')">
          </div>
          <p>Tutorial mengutarakan kata "dia" <br>menggunakan bahasa isyarat SIBI</p>
        </div>
        <div class="small-img-row">
          <div class="small-img">
            <img src="image/kamuThumb.png" alt="" width="200">
            <img src="image/playButton.png" alt="" class="play-btn" onclick="playVideo('video/kamu.mp4')">
          </div>
          <p>Tutorial mengutarakan kata "kamu" <br>menggunakan bahasa isyarat SIBI</p>
        </div>
        <div class="small-img-row">
          <div class="small-img">
            <img src="image/kitaThumb.png" alt="" width="200">
            <img src="image/playButton.png" alt="" class="play-btn" onclick="playVideo('video/kita.mp4')">
          </div>
          <p>Tutorial mengutarakan kata "kita" <br>menggunakan bahasa isyarat SIBI</p>
        </div>
      </div>
    </div>
  </div>
  <div class="video-player" id="videoPlayer">
    <video width="100%" controls autoplay id="myVideo">
      <source src="video/dia.mp4" type="video/mp4">
    </video>
    <img src="image/closeButton.png" alt="" class="close-button" onclick="stopVideo()">
  </div>

<script>
  var videoPlayer= document.getElementById("videoPlayer")
  var myVideo= document.getElementById("myVideo")

  function stopVideo(){
    videoPlayer.style.display = "none";
  }

  function playVideo(file){
    myVideo.src = file;
    videoPlayer.style.display = "block";
  }
</script>
</body>
</html>