<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>USIBI web | Image Translate</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap');
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
    #drop-area {
      width: 600px;
      height: 400px;
      padding: 30px;
      background: #fff;
      text-align: center;
      border-radius: 20px;
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
    }
    #img-view img {
      width: 100px;
      margin-top: 25px;
      margin-left: 25px;
    }
    #img-view span {
      display: block;
      font-size: 12px;
      color: #777;
      margin-top: 15px;
    }
    .hero img {
      margin-right: 30px;
    }
    .button1 {
      margin-top: 15%;
      margin-left: -5%;
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
      font-family: "kanit";
      display: flex;
      text-align: left;
      transition: background-color 0.2s ease;
      img {
        margin-right: 10%;
      }
    }
    .button1:hover {
      background-color: #c5c4c4;
    }
    @media (max-width: 1024px) {
      #drop-area {
        width: 500px;
        height: 350px;
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
        margin-top: -50%;
        margin-left: 50px;
        margin-bottom: 30px;
      }
      #drop-area {
        width: 400px;
        height: 300px;
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
        width: 300px;
        height: 250px;
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
</head>
<body class="bg-image">
  <div class="hero">
    <img src="image/imageVector.png" id="imageVector" width="30%">
    <label for="input-file" id="drop-area">
      <input type="file" accept="image/*" id="input-file" hidden>
      <div id="img-view">
        <img src="image/cloudIcon.png" alt="">
        <p>Drag and drop or click here <br>to upload image</p>
        <span>Upload any images from desktop</span>
      </div>
      <button class="button1" onclick="uploadImage()">
        <img src="image/historyVector.png" alt="" width="40">
        Translate
      </button>
    </label>
  </div>

<script>
  const inputFile = document.getElementById("input-file");
  const imageView = document.getElementById("img-view");

  function uploadImage() {
    const file = inputFile.files[0];
    if (!file) {
      alert("Please select an image file first.");
      return;
    }

    const formData = new FormData();
    formData.append("file", file);

    fetch('http://127.0.0.1:5000/predict', {
      method: 'POST',
      body: formData
    })
    .then(response => response.json())
    .then(data => {
      if (data.error) {
        alert(data.error);
      } else {
        alert(`Predicted: ${data.predicted_class}`);
      }
    })
    .catch(error => {
      console.error('Error:', error);
      alert('Error uploading and predicting image');
    });
  }

  inputFile.addEventListener("change", function() {
    const file = inputFile.files[0];
    if (file) {
      const imgLink = URL.createObjectURL(file);
      imageView.style.backgroundImage = `url(${imgLink})`;
      imageView.textContent = "";
      imageView.style.border = "none";
    }
  });
</script>
</body>
</html>
