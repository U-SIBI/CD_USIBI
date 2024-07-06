<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image Upload</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        * {
            margin: 0;
            padding: 0;
            font-family: 'Kanit', sans-serif;
            box-sizing: border-box;
        }
        .bg-image {
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            background-image: url("image/bgpoint.png");
            background-color: #FF9130;
        }
        .hero {
            width: 100%;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .content {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        #drop-area {
            width: 600px;
            height: 400px;
            padding: 30px;
            background: #fff;
            text-align: center;
            border-radius: 20px;
            margin-left: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        #img-view {
            width: 100%;
            height: 100%;
            border-radius: 20px;
            border: 2px dashed #bbb5ff;
            background: #f7f8ff;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        #img-view img {
            width: 100px;
        }
        #img-view p, #img-view span {
            margin-top: 15px;
        }
        #img-view span {
            display: block;
            font-size: 12px;
            color: #777;
        }
        .button1 {
            margin-top: 20px;
            width: 180px;
            height: 50px;
            border-radius: 10px;
            background-color: #FFFFFF;
            color: black;
            font-size: 18px;
            border: none;
            cursor: pointer;
            align-items: center;
            justify-content: center;
            font-family: 'Kanit', sans-serif;
            display: flex;
            text-align: left;
            transition: background-color 0.2s ease;
        }
        .button1 img {
            margin-right: 10px;
        }
        .button1:hover {
            background-color: #c5c4c4;
        }
        nav {
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
            justify-content: flex-end;
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

        .header-container {
            text-align: center;
            margin-bottom: -8%;;
            margin-top: 5%;
        }

        .header-container h1 {
            margin: 0;
            font-size: 2.5em;
            color: white;
        }

        .header-container p {
            margin: 5px 0;
            font-size: 1.2em;
            color: #333;
        }
        @media (max-width: 1024px) {
            #drop-area {
                width: 400px;
                height: 250px;
                padding: 20px;
            }
            .button1 {
                width: 150px;
                height: 45px;
                font-size: 16px;
            }
        }
        @media (max-width: 768px) {
            .hero {
                flex-direction: column;
                padding: 20px;
            }
            #imageVector {
                width: 70%;
                margin-top: 20px;
            }
            #drop-area {
                width: 300px;
                height: 200px;
                padding: 20px;
            }
            #img-view img {
                width: 80px;
                margin-top: 15px;
                margin-left: 15px;
            }
            .button1 {
                width: 140px;
                height: 40px;
                font-size: 14px;
            }
        }
        @media (max-width: 480px) {
            #drop-area {
                width: 250px;
                height: 180px;
                padding: 15px;
            }
            #img-view img {
                width: 60px;
                margin-top: 10px;
                margin-left: 10px;
            }
            .button1 {
                width: 120px;
                height: 35px;
                font-size: 12px;
            }
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            const dropArea = document.getElementById("drop-area");
            const inputFile = document.getElementById("input-file");
            const imageView = document.getElementById("img-view");

            inputFile.addEventListener("change", uploadImage);

            function uploadImage() {
                let imgLink = URL.createObjectURL(inputFile.files[0]);
                imageView.style.backgroundImage = `url(${imgLink})`;
                imageView.textContent = " ";
                imageView.style.border = 0;
            }

            dropArea.addEventListener("dragover", function(e) {
                e.preventDefault();
            });
            dropArea.addEventListener("drop", function(e) {
                e.preventDefault();
                inputFile.files = e.dataTransfer.files;
                uploadImage();
            });

            $('form').on('submit', function(e) {
                e.preventDefault(); // Mencegah pengiriman form default

                let formData = new FormData(this);
                $.ajax({
                    url: '{{ route('upload') }}',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        // Tampilkan notifikasi atau hasil prediksi
                        alert("Prediksi: " + response.prediction);
                    },
                    error: function(xhr, status, error) {
                        // Tampilkan pesan error jika ada
                        alert("Error: " + error);
                    }
                });
            });
        });
    </script>
</head>
<body class="bg-image">
    <nav>
        <ul>
            <li><a href="/menu">Main Menu</a></li>
            <li><a href="/live">LIVE</a></li>
            <li><a href="/sibi">All About SIBI</a></li>
            <li><a href="/about">About Us</a></li>
        </ul>
    </nav>
    <div class="header-container">
        <h1>Image Translate</h1>
        <p>Menerjemahkan bahasa isyarat melalui foto tangan mu!</p>
    </div>
    <div class="hero">
        <div class="content">
            <img src="image/imageVector.png" id="imageVector" width="30%">
            <form enctype="multipart/form-data">
                @csrf
                <label for="input-file" id="drop-area">
                    <input type="file" accept="image/*" id="input-file" name="image" hidden>
                    <div id="img-view">
                        <img src="image/cloudIcon.png" alt="">
                        <p>Drag and drop or click here <br>to upload image</p>
                        <span>Upload any images from desktop</span>
                    </div>
                    <button class="button1" type="submit">
                        <img src="image/historyVector.png" alt="" width="40">
                        Translate
                    </button>
                </label>
            </form>
        </div>
    </div>
</body>
</html>
