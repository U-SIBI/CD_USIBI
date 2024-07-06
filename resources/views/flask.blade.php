<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gesture Recognition</title>
<style>
    body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f0f0f0;
    margin: 0;
}
.container {
    text-align: center;
}
.video-container {
    display: inline-block;
    border: 1px solid #ddd;
    padding: 10px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
.video-container img {
    max-width: 100%;
    height: auto;
}

</style>
</head>
<body>
    <div class="container">
        <h1>Gesture Recognition</h1>
        <div class="video-container">
            <img src="{{ url_for('video_feed') }}" alt="Video Feed">
        </div>
    </div>
</body>
</html>
