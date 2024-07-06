<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Result</title>
  <style>
    /* Your existing CSS styles */
  </style>
</head>
<body class="bg-image">
  <div class="hero">
    <img src="{{ url_for('static', filename='uploads/' ~ filename) }}" width="30%">
    <div id="result">
      <h2>Predicted: {{ result }}</h2>
      <a href="{{ url_for('index') }}" class="button1">Upload Another Image</a>
    </div>
  </div>
</body>
</html>
