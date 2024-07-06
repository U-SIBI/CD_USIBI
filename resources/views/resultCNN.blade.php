<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Result</title>
</head>
<body>
    <h1>Predicted Class: {{ $response['class'] }}</h1>
    <p>Confidence: {{ $response['confidence'] }}</p>
    <a href="/">Upload another image</a>
</body>
</html>
