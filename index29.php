<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Birthday</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            background-image: url('image/bg.jpg'); /* ใส่ URL ของรูปภาพ */
            background-size: cover; /* ให้รูปภาพคลุมเต็มหน้าจอ */
            background-repeat: no-repeat; /* ไม่ให้รูปซ้ำ */
            }
        .carousel-item img {
            
            width: 80%;
            height: auto;
            border-radius: 20px; /* กำหนดค่าขอบโค้ง */
        }
        h1 {
            color: #ff4081; /* สีสำหรับหัวเรื่อง */
            position: relative;
            z-index: 1; /* ทำให้ข้อความอยู่เหนือวิดีโอ */
        }
        #player {
            display: none; /* ซ่อน iframe เริ่มต้น */
            width: 100%; /* กว้างเต็มที่ */
            height: 315px; /* ความสูงของ iframe */
            margin-top: 20px; /* เว้นระยะบน */
            z-index: 0; /* วิดีโออยู่ข้างหลัง */
        }
        .btn-pink {
            background-color: #ff4081; /* สีพื้นหลัง */
            color: white; /* สีตัวอักษร */
            border: none; /* ไม่มีขอบ */
            border-radius: 5px; /* มุมมน */
            padding: 10px 20px; /* เว้นระยะในปุ่ม */
            font-size: 1.2rem; /* ขนาดตัวอักษร */
            transition: transform 0.2s, background-color 0.3s; /* การเปลี่ยนแปลงแบบเรียบ */
            cursor: pointer; /* เปลี่ยนเคอร์เซอร์เมื่อเลื่อนเมาส์ */
        }

        .btn-pink:hover {
            background-color: #e91e63; /* เปลี่ยนสีเมื่อเลื่อนเมาส์ */
            transform: scale(1.05); /* ขยายขนาดปุ่ม */
        }

        .btn-pink:active {
            transform: scale(0.95); /* ย่อขนาดเมื่อกด */
        }
        @keyframes scrollLeft {
            0% {
                transform: translateX(100%); /* เริ่มจากขอบขวา */
            }
            100% {
                transform: translateX(-100%); /* จบที่ขอบซ้าย */
            }
        }

        .text-scroll {
            position: relative;
            overflow: hidden;
            height: 50px; /* กำหนดความสูง */
            width: 100%; /* กำหนดความกว้าง */
        }

        .text-scroll p {
            position: absolute;
            white-space: nowrap; /* ป้องกันการตัดข้อความ */
            width: max-content; /* ขยายความกว้างตามข้อความ */
            text-align: center;
            animation: scrollLeft 30s linear infinite; /* ทำให้ข้อความเลื่อนอย่างต่อเนื่อง */
            animation-delay: 0s; /* ทำให้เริ่มทันที */
        }

    </style>
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">สุขสันต์วันเกิด!</h1>
    <div class="container mt-4">
    <div class="text-scroll">
        <p>"สุขสันต์วันเกิด! ขอให้ปีนี้เต็มไปด้วยความสุขและโอกาสใหม่ๆ ขอให้ทุกสิ่งที่ฝันเป็นจริง มีแรงบันดาลใจในการทำตามเป้าหมายที่ตั้งใจ ขอให้ทุกวันเต็มไปด้วยรอยยิ้ม เสียงหัวเราะ และความรักจากคนรอบตัว ขอให้สุขภาพแข็งแรง พร้อมลุยทุกอุปสรรค และมีความสำเร็จในทุกๆ เรื่อง!"       </p>
    </div>

    </div>
    <div id="birthdayCarousel" class="carousel slide text-center" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/2.jpg" alt="Birthday Image 1">
            </div>
            <div class="carousel-item">
                <img src="image/02.jpg" alt="Birthday Image 2">
            </div>
            <div class="carousel-item">
                <img src="image/03.jpg" alt="Birthday Image 3">
            </div>
            <div class="carousel-item">
                <img src="image/04.jpg" alt="Birthday Image 4">
            </div>
            <div class="carousel-item">
                <img src="image/05.jpg" alt="Birthday Image 5">
            </div>
            <div class="carousel-item">
                <img src="image/06.jpg" alt="Birthday Image 6">
            </div>
            <div class="carousel-item">
                <img src="image/07.jpg" alt="Birthday Image 7">
            </div>
            <div class="carousel-item">
                <img src="image/08.jpg" alt="Birthday Image 8">
            </div>
            <div class="carousel-item">
                <img src="image/09.jpg" alt="Birthday Image 9">
            </div>
            <div class="carousel-item">
                <img src="image/10.jpg" alt="Birthday Image 10">
            </div>
            <!-- เพิ่มภาพตามที่ต้องการ -->
        </div>
        <a class="carousel-control-prev" href="#birthdayCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#birthdayCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="text-center">
        <p></p>
        <p><br><br><br>กดที่นี่หากเพลงไม่เล่น</p>
        <button class="text-center btn btn-pink" onclick="playAudio()">---Click---</button>
    </div>
    
    <iframe id="player" src="https://www.youtube.com/embed/5u4xTa3LR2U?autoplay=1&mute=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> <!-- YouTube player -->
</div>

<script>
    function playAudio() {
        var player = document.getElementById('player');
        player.src += "?autoplay=1&mute=1"; // เล่นเสียงโดยไม่ต้องแสดง iframe
    }

    // เรียกใช้ฟังก์ชัน playAudio เมื่อโหลดหน้า
    window.onload = function() {
        playAudio(); // เรียกฟังก์ชันเพื่อเริ่มเล่นเสียง
    };
</script>
</body>
</html>
