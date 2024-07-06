<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        body {
            font-family: 'kanit', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #0174BE;
            padding: 50px;
            text-align: center;
            color: #fff;
        }
        .header h1 {
            margin: 0;
            font-size: 2.5em;
        }
        .section {
            padding: 40px;
            text-align: center;
        }
        .section h2 {
            margin-bottom: 30px;
            font-size: 2em;
            color: #333;
        }
        .section p {
            margin-bottom: 20px;
            color: #666;
            font-size: 1.1em;
        }
        .team .team-member {
            margin-bottom: 30px;
            text-align: center;
        }
        .team img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
        }
        .team h3 {
            margin-top: 15px;
            font-size: 1.25em;
            color: #333;
        }
        .team p {
            font-size: 1em;
            color: #777;
        }
    </style>
</head>
<body>

<div class="header">
    <h1>About Us</h1>
    <p>Ketauhilah visi, misi, serta tujuan kita!</p>
</div>

<!-- Tentang Kami -->
<div class="section">
    <h2>Who We Are</h2>
    <p>Kami adalah tim Capstone Design berisikan tiga orang mahasiswa Telkom University, dari jurusan Teknik Komputer</p>
    <p>Projek ini kami kembangkan sebagai tugas akhir kami sekaligus salah satu syarat kelulusan </p>
</div>

<!-- Tim Kami -->
<div class="section team">
    <h2>Our Team</h2>
    <div class="row">
        <div class="col-md-4 team-member">
            <img src="image/team1.jpg" alt="Team Member 1">
            <h3>Ario Syawal Muhammad</h3>
            <p>Front/Back-end developer</p>
        </div>
        <div class="col-md-4 team-member">
            <img src="image/team2.jpg" alt="Team Member 2">
            <h3>Ilham Muhammad Firdaus</h3>
            <p>Gesture Detection Development</p>
        </div>
        <div class="col-md-4 team-member">
            <img src="image/team3.jpg" alt="Team Member 3">
            <h3>Jean Jeasen Timotiuz</h3>
            <p>Image Detection Development</p>
        </div>
    </div>
</div>

<!-- Visi dan Misi -->
<div class="section">
    <h2>Our Vision & Mission</h2>
    <p><strong>Visi:</strong> Membantu seseorang agar dapat berkomunikasi dengan kawan tunarungu.</p>
    <p><strong>Misi:</strong> Menyediakan media pembelajaran bahasa isyarat SIBI melalui sebuah aplikasi web.</p>
</div>

<!-- Kontak -->
<div class="section">
    <h2>Contact Us</h2>
    <p>Jika ada pertanyaan, kiritk, atau pun saran jangan segan untuk mengkontak kami.</p>
    <p>Email: <a href="mailto:contact@company.com">cdusibi2023@gmail.com</a></p>
    <p>Phone: <a href="tel:+6281212551817">+62 812 125 518 17</a></p>
</div>

<!-- Bootstrap JS dan dependensinya -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
