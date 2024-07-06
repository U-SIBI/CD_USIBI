<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="CSS/style.css"> --}}

    <title>USIBI web | Main menu</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

      html, body {
          margin: 0;
          padding: 0;
          width: 100%;
          height: 100%;
          font-family: 'Kanit', sans-serif;
          background: url('image/bgmenu2.png') no-repeat center center fixed;
          background-size: cover;
          background-color: #0174BE;
      }

      /* Style for the navigation bar */
      nav {
        /* background: linear-gradient(90deg, #0191eb, #004e7e);  */
          background-color: #0191eb;
          overflow: hidden;
          width: 100%;
          position: fixed;
          top: 0;
          z-index: 1000;
      }

      nav ul {
          list-style: none;
          padding: 0;
          margin: 0;
          display: flex;
          justify-content: flex-end; /* Align items to the left */
      }

      nav ul li {
          margin: 0 15px;
      }

      nav ul li a {
          display: block;
          color: white;
          text-align: center;
          font-size: 18px;
          padding: 14px 20px;
          text-decoration: none;
          transition: background-color 0.3s;
      }

      nav ul li a:hover {
          background-color: #ff7700;
      }

      /* Style for the content */
      .content {
          padding: 50px; /* Add padding to account for the fixed navbar */
          text-align: center; 
          color: white; /* Change text color to white for better contrast */
      }

      .content img{
        margin-bottom: -10%;
      }

      .content h1 {
          color: #ffffff;
      }

      /* Style for the button */
      .button1 {
        width: 180px;
        height: 50px;
        border-radius: 10px;
        background-color: #FFFFFF;
        color: black;
        font-size: 18px;
        border: 2px solid #FFFFFF;
        cursor: pointer;
        align-items: center;
        justify-content: center;
        font-family: 'Kanit', sans-serif;
        display: flex;
        text-align: center;
        transition: background-color 0.2s ease, border-color 0.2s ease;
        margin: 20px auto;
      }

      .button1:hover {
        background-color: #c5c4c4;
        border-color: #c5c4c4;
      }

      @media (max-width: 768px) {
    nav ul {
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    nav ul li {
        margin: 10px 0;
    }

    nav ul li a {
        font-size: 16px;
        padding: 10px 15px;
    }

    .content {
        padding: 20px;
    }

    .content img {
        width: 100%;
        margin-top: 17%;
        margin-bottom: -20%;
    }

    .button1 {
        width: 150px;
        height: 45px;
        font-size: 16px;
    }
}

      
    </style>
</head>
<body>
  <nav>
      <ul>
          <li><a href="#home" onclick="window.location.href='/sibi'">All About SIBI</a></li>
          <li><a href="#about" onclick="window.location.href='/image'">Image Translate</a></li>
          <li><a href="#" onclick="window.location.href='/about'">About Us</a></li>
      </ul>
  </nav>

  <div class="content">
    <img src="image/menu_logo2.png" width="500" alt="">
    <h1>U-SIBI</h1>
    <button class="button1" onclick="window.location.href='/live'">LIVE</button>
  </div>
</body>
</html>
