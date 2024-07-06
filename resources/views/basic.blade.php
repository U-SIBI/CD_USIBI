<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Scroll</title>
    <style>

        @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        body {
            font-family: 'Kanit', sans-serif;
            background-color: #0174BE;
            margin: 0;
            padding: 20px;
            /* Set the position of the background image */
            background-position: center;
            /* Set the size of the background image */
            background-size: cover;
            /* Set the repeat of the background image */
            background-repeat: no-repeat;
            /* background-image: url("image/bgpoint.png"); */
            background-image: url("image/bgpoint.png");
        }
        .gallery-wrapper {
            max-width: 100%;
            margin: 0 auto;
        }
        .gallery-title {
            text-align: center;
            margin-bottom: 20px;
            font-size: 1.5em;
            color: white;
        }
        .gallery-container {
            display: flex;
            overflow-x: auto;
            padding: 10px 0;
            -webkit-overflow-scrolling: touch; /* Smooth scrolling on mobile devices */
        }
        .gallery-container::-webkit-scrollbar {
            height: 10px;
        }
        .gallery-container::-webkit-scrollbar-thumb {
            background-color: #888;
            border-radius: 5px;
        }
        .gallery-container::-webkit-scrollbar-track {
            background-color: #f1f1f1;
        }
        .gallery-item {
            flex: 0 0 auto;
            margin: 10px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            width: 150px; /* Set a fixed width for the items */
            text-align: center; /* Center the title text */
            background-color: #FF9130; /* Optional: Add background to gallery item */
        }
        .gallery-item img {
            width: 100%;
            height: auto;
            display: block;
        }
        .gallery-caption {
            padding: 5px;
            font-size: 1em;
            color: white;
            text-align: center; /* Center the title text horizontally */
        }
        .gallery-item:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>

<div class="gallery-wrapper">
    <h1 class="gallery-title">SIBI ALPHABET</h1>
    <div class="gallery-container">
        <div class="gallery-item">
            <img src="image/imageHand/SIBI_A.jpg" alt="Gallery Image 1">
            <div class="gallery-caption">A</div>
        </div>
        <div class="gallery-item">
            <img src="image/imageHand/SIBI_B.jpg" alt="Gallery Image 2">
            <div class="gallery-caption">B</div>
        </div>
        <div class="gallery-item">
            <img src="image/imageHand/SIBI_C.jpg" alt="Gallery Image 3">
            <div class="gallery-caption">C</div>
        </div>
        <div class="gallery-item">
            <img src="image/imageHand/SIBI_D.jpg" alt="Gallery Image 4">
            <div class="gallery-caption">D</div>
        </div>
        <div class="gallery-item">
            <img src="image/imageHand/SIBI_E.jpg" alt="Gallery Image 5">
            <div class="gallery-caption">E</div>
        </div>
        <div class="gallery-item">
            <img src="image/imageHand/SIBI_F.jpg" alt="Gallery Image 6">
            <div class="gallery-caption">F</div>
        </div>
        <div class="gallery-item">
            <img src="image/imageHand/SIBI_G.jpg" alt="Gallery Image 7">
            <div class="gallery-caption">G</div>
        </div>
        <div class="gallery-item">
            <img src="image/imageHand/SIBI_H.jpg" alt="Gallery Image 8">
            <div class="gallery-caption">H</div>
        </div>
        <div class="gallery-item">
            <img src="image/imageHand/SIBI_I.jpg" alt="Gallery Image 9">
            <div class="gallery-caption">I</div>
        </div>
        <div class="gallery-item">
            <img src="image/imageHand/SIBI_J.jpg" alt="Gallery Image 10">
            <div class="gallery-caption">J</div>
        </div>
        <div class="gallery-item">
            <img src="image/imageHand/SIBI_K.jpg" alt="Gallery Image 11">
            <div class="gallery-caption">K</div>
        </div>
        <div class="gallery-item">
            <img src="image/imageHand/SIBI_L.jpg" alt="Gallery Image 12">
            <div class="gallery-caption">L</div>
        </div>
        <div class="gallery-item">
            <img src="image/imageHand/SIBI_M.jpg" alt="Gallery Image 13">
            <div class="gallery-caption">M</div>
        </div>
        <div class="gallery-item">
            <img src="image/imageHand/SIBI_N.jpg" alt="Gallery Image 14">
            <div class="gallery-caption">N</div>
        </div>
        <div class="gallery-item">
            <img src="image/imageHand/SIBI_O.jpg" alt="Gallery Image 15">
            <div class="gallery-caption">O</div>
        </div>
        <div class="gallery-item">
            <img src="image/imageHand/SIBI_P.jpg" alt="Gallery Image 16">
            <div class="gallery-caption">P</div>
        </div>
        <div class="gallery-item">
            <img src="image/imageHand/SIBI_Q.jpg" alt="Gallery Image 17">
            <div class="gallery-caption">Q</div>
        </div>
        <div class="gallery-item">
            <img src="image/imageHand/SIBI_R.jpg" alt="Gallery Image 18">
            <div class="gallery-caption">R</div>
        </div>
        <div class="gallery-item">
            <img src="image/imageHand/SIBI_S.jpg" alt="Gallery Image 19">
            <div class="gallery-caption">S</div>
        </div>
        <div class="gallery-item">
            <img src="image/imageHand/SIBI_T.jpg" alt="Gallery Image 20">
            <div class="gallery-caption">T</div>
        </div>
        <div class="gallery-item">
            <img src="image/imageHand/SIBI_U.jpg" alt="Gallery Image 21">
            <div class="gallery-caption">U</div>
        </div>
        <div class="gallery-item">
            <img src="image/imageHand/SIBI_V.jpg" alt="Gallery Image 22">
            <div class="gallery-caption">V</div>
        </div>
        <div class="gallery-item">
            <img src="image/imageHand/SIBI_W.jpg" alt="Gallery Image 23">
            <div class="gallery-caption">W</div>
        </div>
        <div class="gallery-item">
            <img src="image/imageHand/SIBI_X.jpg" alt="Gallery Image 24">
            <div class="gallery-caption">X</div>
        </div>
        <div class="gallery-item">
            <img src="image/imageHand/SIBI_Y.jpg" alt="Gallery Image 25">
            <div class="gallery-caption">Y</div>
        </div>
        <div class="gallery-item">
            <img src="image/imageHand/SIBI_Z.jpg" alt="Gallery Image 26">
            <div class="gallery-caption">Z</div>
        </div>
        
        
    </div>

    <h1 class="gallery-title">SIBI NUMBERING</h1>

    <div class="gallery-container">
        <!-- Additional 10 Images -->
        <div class="gallery-item">
            <img src="image/imageHand/SIBI_1.jpg" alt="Gallery Image 27">
            <div class="gallery-caption">1</div>
        </div>
        <div class="gallery-item">
            <img src="image/imageHand/SIBI_2.jpg" alt="Gallery Image 28">
            <div class="gallery-caption">2</div>
        </div>
        <div class="gallery-item">
            <img src="image/imageHand/SIBI_3.jpg" alt="Gallery Image 29">
            <div class="gallery-caption">3</div>
        </div>
        <div class="gallery-item">
            <img src="image/imageHand/SIBI_4.jpg" alt="Gallery Image 30">
            <div class="gallery-caption">4</div>
        </div>
        <div class="gallery-item">
            <img src="image/imageHand/SIBI_5.jpg" alt="Gallery Image 31">
            <div class="gallery-caption">5</div>
        </div>
        <div class="gallery-item">
            <img src="image/imageHand/SIBI_6.jpg" alt="Gallery Image 32">
            <div class="gallery-caption">6</div>
        </div>
        <div class="gallery-item">
            <img src="image/imageHand/SIBI_7.jpg" alt="Gallery Image 33">
            <div class="gallery-caption">7</div>
        </div>
        <div class="gallery-item">
            <img src="image/imageHand/SIBI_8.jpg" alt="Gallery Image 34">
            <div class="gallery-caption">8</div>
        </div>
        <div class="gallery-item">
            <img src="image/imageHand/SIBI_9.jpg" alt="Gallery Image 35">
            <div class="gallery-caption">9</div>
        </div>
        <div class="gallery-item">
            <img src="image/imageHand/SIBI_10.jpg" alt="Gallery Image 36">
            <div class="gallery-caption">10</div>
        </div>
    </div>
</div>

</body>
</html>
