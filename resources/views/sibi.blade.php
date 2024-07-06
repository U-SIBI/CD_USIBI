<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>USIBI web | All about SIBI</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        body {
    display: flex;
	flex-direction: column;
	align-items: center;
	height: 100vh;
    background-color: #FF9130;
    font-family: "kanit";

    }
    .bg-image {
    /* Set the position of the background image */
    background-position: center;
    /* Set the size of the background image */
    background-size: cover;
    /* Set the repeat of the background image */
    background-repeat: no-repeat;
    /* background-image: url("image/bgpoint.png"); */
    background-image: url("image/bgSibi.png");
    }
    .button1 {
    /* Set width and height */
    width: 550px;
    height: 50px;
    /* Add rounded corners */
    border-radius: 10px; /* Adjust for desired curve */
    /* Style the button */
    background-color: #FFFFFF; /* Change background color as needed */
    color: black; /* Text color */
    font-size: 18px; /* Adjust font size */
    border: none; /* Remove default border */
    cursor: pointer; /* Indicate clickable element */
    align-items: center; /* Align content vertically within the button */
    justify-content: center;
    font-family: "kanit";
    display: flex;
    text-align: left;
    transition: background-color 0.2s ease;
        img{
            margin-right: 10%;
        }
    }
    .button2 {
    /* Set width and height */
    width: 550px;
    height: 50px;
    margin-top: 15px;
    /* Add rounded corners */
    border-radius: 10px; /* Adjust for desired curve */
    /* Style the button */
    background-color: #FFFFFF; /* Change background color as needed */
    color: black; /* Text color */
    font-size: 18px; /* Adjust font size */
    border: none; /* Remove default border */
    cursor: pointer; /* Indicate clickable element */
    align-items: center; /* Align content vertically within the button */
    justify-content: center;
    font-family: "kanit";
    display: flex;
    text-align: left;
    transition: background-color 0.2s ease;
        img{
            margin-right: 10%;
        }
    }
    .button3 {
    /* Set width and height */
    width: 550px;
    height: 50px;
    margin-top: 15px;
    /* Add rounded corners */
    border-radius: 10px; /* Adjust for desired curve */
    /* Style the button */
    background-color: #FFFFFF; /* Change background color as needed */
    color: black; /* Text color */
    font-size: 18px; /* Adjust font size */
    
    border: none; /* Remove default border */
    cursor: pointer; /* Indicate clickable element */
    align-items: center; /* Align content vertically within the button */
    justify-content: center;
    font-family: "kanit";
    display: flex;
    text-align: left;
    transition: background-color 0.2s ease;
        img{
            margin-right: 10%;
        }
    }
    .button1:hover {
    /* Button background color on hover */
    transform: translateY(-8px);
    box-shadow: 0 10px 15px rgba(0,0,0,0.2);
    /* background-color: #c5c4c4; */
    }
    .button2:hover {
        transform: translateY(-8px);
    box-shadow: 0 10px 15px rgba(0,0,0,0.2);
    /* Button background color on hover */
    }
    .button3:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 15px rgba(0,0,0,0.2);
    /* Button background color on hover */
    }
    .button-container{
        display: flex; /* Make the container a flex container for better arrangement */
        flex-direction: column; /* Arrange buttons vertically */
        
        position: absolute; /* Position the container absolutely */
        top: 50%; /* Set top position to 50% */
        left: 50%; /* Set left position to 50% */
        transform: translate(-50%, -50%);
    }

    nav {
        /* background: linear-gradient(90deg, #0191eb, #004e7e);  */
          background-color: #ff881f;
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
          background-color: #0174BE;
      }

    @media (max-width: 1024px) {
    .button1, .button2, .button3 {
        width: 400px;
        font-size: 16px;
    }

    .button1 img, .button2 img, .button3 img {
        margin-right: 5%;
    }
}

/* Responsive layout for mobile devices */
@media (max-width: 768px) {
    .button1, .button2, .button3 {
        width: 300px;
        font-size: 14px;
        height: 45px;
    }

    .button-container {
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .button1 img, .button2 img, .button3 img {
        margin-right: 5%;
    }
}

/* Responsive layout for small mobile devices */
@media (max-width: 480px) {
    .button1, .button2, .button3 {
        width: 250px;
        font-size: 12px;
        height: 40px;
    }

    .button1 img, .button2 img, .button3 img {
        margin-right: 5%;
    }
}

    </style>
</head>
<body class="bg-image">
    <div class="button-container">
        <button class="button1" onclick="window.location.href='/history'">
            <img src="image/historyVector.png" alt="" width="40">
            History
        </button>
        <button class="button2" onclick="window.location.href='/basic'">
            <img src="image/basicVector.png" alt="" width="40">
            Basic
        </button>
        <button class="button3" onclick="window.location.href='/index'">
            <img src="image/advanceVector.png" alt="" width="40">
            Advance
        </button>

    </div>

    <nav>
        <ul>
            <li><a href="#" onclick="window.location.href='/menu'">Main Menu</a></li>
            <li><a href="#" onclick="window.location.href='/live'">LIVE</a></li>
            <li><a href="#" onclick="window.location.href='/image'">Image Translate</a></li>
            <li><a href="#" onclick="window.location.href='/about'">About Us</a></li>
        </ul>
    </nav>
    
    
</body>
</html>