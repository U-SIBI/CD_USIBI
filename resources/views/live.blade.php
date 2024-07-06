<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usibi web | Live Translate</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800&display=swap');
        * {
            font-family: 'Kanit', sans-serif;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
            margin: 0;
        }

        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #FF9130;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            background-image: url("image/bgpoint.png");
        }

        .container {
            display: flex;
            flex-direction: row;
            align-items: center;
            text-align: center;
            margin-top: 32px;
            /* margin-right: 120px; */
        }

        /* .buttons-container {
            display: flex;
            flex-direction: column;
            margin-right: 20px;
        } */

         .button {
            padding: 10px 20px;
            background-color: #0174BE;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.2s ease;
            margin-bottom: 10px;
        }

        .button:hover {
            background-color: #0056b3;
        } 

        #webcam-container {
            width: 820px;
            height: 453px;
            border: 5px solid #ccc;
            border-radius: 10px;
            overflow: hidden;
            background: #f7f8ff;
            margin-bottom: 20px;
        }

        img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .probabilities-container {
            width: 920px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .probability {
            background-color: #007bff;
            color: white;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 5px;
            text-align: left;
            width: 100%;
            max-width: 300px;
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
            margin-bottom: 20px;
            margin-left: 20px;
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
            #webcam-container {
                width: 80%;
                height: auto;
            }

            .button {
                padding: 10px 18px;
                font-size: 16px;
            }

            /* .buttons-container {
                width: 80%;
            } */
        }

        @media (max-width: 768px) {
            body {
                padding: 10px;
            }

            #webcam-container {
                width: 100%;
                height: auto;
                border-width: 3px;
            }

            .button {
                padding: 8px 16px;
                font-size: 14px;
            }
/* 
            .buttons-container {
                width: 100%;
                margin-right: 0;
                margin-bottom: 10px;
            } */

            .container {
                flex-direction: column;
                align-items: center;
            }

            .header-container {
                text-align: center;
                margin-left: 0;
            }

            .probabilities-container {
                width: 100%;
            }
        }

        @media (max-width: 480px) {
            #webcam-container {
                width: 100%;
                height: auto;
                border-width: 2px;
            }

            .button {
                padding: 6px 14px;
                font-size: 12px;
            }

            /* .buttons-container {
                width: 100%;
            } */

            .probabilities-container {
                width: 100%;
            }
        }
    </style>
</head>
<body class="bg-image">
    <nav>
        <ul>
            <li><a href="/menu">Main Menu</a></li>
            <li><a href="/image">Image Translate</a></li>
            <li><a href="/sibi">All About SIBI</a></li>
            <li><a href="/about">About Us</a></li>
        </ul>
    </nav>
    
    <div class="container">
        {{-- <div class="buttons-container">
            <button class="button" onclick="button1Function()">Button 1</button>
            <button class="button" onclick="button2Function()">Button 2</button>
            <button class="button" onclick="button3Function()">Button 3</button>
        </div> --}}
        <div>
            <div class="header-container">
                <h1>Live Translate</h1>
                <p>Menerjemahkan bahasa isyarat secara langsung!</p>
            </div>
            <div id="webcam-container">
                <img id="webcam" src="" alt="Webcam Feed"></img>
            </div>
            <button class="button" id="start-webcam-button" onclick="toggleWebcam()">Start Webcam</button>
        </div>
    </div>
    <div class="probabilities-container" id="probabilities-container">
        <!-- Probabilities will be displayed here -->
    </div>
    <script>
        let webcamStarted = false;

        function button1Function() {
            alert('Button 1 clicked');
        }

        function button2Function() {
            alert('Button 2 clicked');
        }

        function button3Function() {
            alert('Button 3 clicked');
        }

        function toggleWebcam() {
            const webcamElement = document.getElementById('webcam');
            const startWebcamButton = document.getElementById('start-webcam-button');
            if (webcamStarted) {
                webcamElement.src = "";
                startWebcamButton.innerText = "Start Webcam";
            } else {
                webcamElement.src = "http://localhost:5000/video_feed";
                startWebcamButton.innerText = "Stop Webcam";
            }
            webcamStarted = !webcamStarted;
        }

        function updateProbabilities(probabilities) {
            const container = document.getElementById('probabilities-container');
            container.innerHTML = '';
            probabilities.forEach(prob => {
                const div = document.createElement('div');
                div.className = 'probability';
                div.innerText = `${prob.action}: ${prob.probability}%`;
                container.appendChild(div);
            });
        }

        function fetchProbabilities() {
            fetch('/probabilities')
                .then(response => response.json())
                .then(data => updateProbabilities(data))
                .catch(error => console.error('Error fetching probabilities:', error));
        }

        setInterval(fetchProbabilities, 1000);
    </script>
</body>
</html>
