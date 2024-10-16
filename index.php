<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAPPY BIRTHDAY</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-image: url('image/2.jpg'); /* ใส่ URL ของรูปภาพ */
        background-size: cover; /* ให้รูปภาพคลุมเต็มหน้าจอ */
        background-repeat: no-repeat; /* ไม่ให้รูปซ้ำ */

    }

    /* เพิ่มความยืดหยุ่นสำหรับมือถือ */
    .container {
        margin-top: 5%;
    }

    /* สำหรับหน้าจอขนาดเล็ก (เช่น โทรศัพท์มือถือ) */
    @media (max-width: 576px) {
        .container {
            margin-top: 20%;
        }

        /* ปรับพื้นหลังให้ยืดเป็น 150% บนโทรศัพท์มือถือ */
        body {
            background-size: 150%;
        }
    }
</style>

</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-sm-12">
                <h1 class="text-center mt-5 text-light">โปรดระบุวันเกิด</h1>
                <form id="birthdayForm" action="index29.php" method="POST">
                    <div class="mb-3">
                        <input id="hbd" type="date" name="hbd" class="form-control" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">ยืนยัน</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional but useful for interactive elements) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- JavaScript for date validation -->
    <script>
    document.getElementById('birthdayForm').addEventListener('submit', function(event) {
        const selectedDate = new Date(document.getElementById('hbd').value);
        const selectedDay = selectedDate.getDate(); // ดึงค่าวัน
        const selectedMonth = selectedDate.getMonth(); // ดึงค่าเดือน (0 = มกราคม, 9 = ตุลาคม)

        if (selectedDay !== 29 || selectedMonth !== 9) { // 9 = ตุลาคมใน JavaScript (นับจาก 0)
            event.preventDefault(); // หยุดการส่งฟอร์ม
            alert('ไม่ใช่วันเกิดของคุณ');
        }
    });
</script>
</body>
</html>
