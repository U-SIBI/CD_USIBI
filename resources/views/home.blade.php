<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <title>USIBI web | Home</title>
    <style>
     @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

      body{
        display: flex;
	flex-direction: column;
	align-items: center;
	height: 100vh;
    background-color: #FF9130;
      }

    .bg-image {
    /* Set the position of the background image */
    background-position: center;
    /* Set the size of the background image */
    background-size: cover;
    /* Set the repeat of the background image */
    background-repeat: no-repeat;
    /* background-image: url("image/bgpoint.png"); */
    background-image: url("image/bgpoint.png");
    }

    
    .container{
        /* text-align: center; */
        position: absolute; /* Position the container absolutely */
        top: 40%;   /* Set top position to 50% */
        left: 50%;   /* Set left position to 50% */
        transform: translate(-50%, -50%); /* Center the container within its space */
        width: fit-content; /* Adjust width as needed */
        height: fit-content; /* Adjust height as needed */
        display: flex;
    }
    .text{
      color: white;
      margin-bottom: 25px;
      font-size: 13px;
      letter-spacing: 2px;
      font-family: "Kanit", sans-serif;
      position: absolute; /* Position the container absolutely */
      top: 70%;   /* Set top position to 70% */
      left: 50%;   /* Set left position to 50% */
      transform: translate(-50%, -50%); /* Center the container within its space */
    }
    .loading{
      width: 100%;
      height: auto;
      display: flex;
      justify-content: center;
      align-items: center;
      position: absolute; /* Position the container absolutely */
        top: 75%;   /* Set top position to 70% */
        left: 50%;   /* Set left position to 50% */
        transform: translate(-50%, -50%); /* Center the container within its space */
    }
    .loading .line-box{
      padding: 2px;
      width: 40%;
      height: 20px;
      border: 2px solid green;
      border-radius: 20px;
    }
    .loading .line-box .line{
      height: 20px;
      border-radius: 20px;
      background: #0174BE;
      animation: loading 4s forwards cubic-bezier(0,0,0,0);
    }
    @keyframes loading{
      0%{
        width: 5%;
      }
      100%{
        width: 100%;
      }
    }

    @media (max-width: 600px) {
    .text {
        font-size: 10px; /* Smaller text size */
        letter-spacing: 1px; /* Adjust letter spacing */
    }
    .loading .line-box {
        width: 80%; /* Adjust width to fit smaller screens */
    }
}

/* Medium devices (tablets, 768px and down) */
@media (max-width: 768px) {
    .text {
        font-size: 11px; /* Slightly larger than phones */
        letter-spacing: 1.5px; /* Adjust letter spacing */
    }
    .loading .line-box {
        width: 60%; /* Adjust width to fit tablets */
    }
}

/* Large devices (laptops/desktops, 1024px and up) */
@media (min-width: 1024px) {
    .text {
        font-size: 14px; /* Larger text size for bigger screens */
        letter-spacing: 2px; /* Adjust letter spacing */
    }
    .loading .line-box {
        width: 50%; /* Wider bar for larger screens */
    }
}
    </style>
</head>
<body class="bg-image">
    <div class="container">
        <img src="image/home_logo.png" alt="" width="400" justify-content= center>
        
    </div>
    <div class="text">
        <h1>loading...</h1>
      </div>
      <div class="loading">
        <div class="line-box">
          <div class="line"></div>
        </div>
      </div>
  <script>
        // Fungsi untuk memuat halaman baru
        function loadNewPage() {
            window.location.href = "/menu"; // Ganti "halaman_baru.html" dengan URL halaman baru yang Anda inginkan
        }

        // Event listener yang akan memanggil fungsi loadNewPage setelah 2 detik (sesuai durasi animasi loading)
        window.onload = function() {
            setTimeout(loadNewPage, 4000);
        };
  </script>
    
</body>


</html>