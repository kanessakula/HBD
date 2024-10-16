<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สุ่มเงินรางวัล</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
            background-color: #f8f9fa;
        }
        h1 {
            color: #007bff;
        }
        #result {
            font-size: 24px;
            font-weight: bold;
            margin-top: 20px;
            padding: 15px;
            border: 2px solid #007bff;
            border-radius: 5px;
            background-color: white;
            color: #007bff;
            visibility: hidden; /* เริ่มต้นซ่อนผลรางวัล */
        }
        #prizeContainer {
            width: 300px;
            height: 80px;
            overflow: hidden;
            position: relative;
            margin: 0 auto;
            border: 2px solid #007bff;
            border-radius: 5px;
            background-color: white;
        }
        #prizeList {
            position: absolute;
            width: 100%;
            transition: transform 1s ease; /* เปลี่ยนเป็นเลื่อนอย่างนุ่มนวล */
        }
        .prize {
            height: 80px; /* ความสูงของแต่ละรางวัล */
            line-height: 80px;
            text-align: center;
            font-size: 20px;
            color: white;
            background-color: #007bff;
            border-bottom: 2px solid white; /* ขอบล่างให้ดูสวยงาม */
        }
        #spinButton {
            padding: 15px 30px;
            font-size: 18px;
            cursor: pointer;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        #spinButton:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<h1>สุ่มเงินรางวัล</h1>
<div id="prizeContainer">
    <div id="prizeList"></div>
</div>
<button id="spinButton">คลิกเพื่อสุ่มรางวัล</button>
<p id="result"></p>

<script>
// ตั้งค่าเงินรางวัล
const prizes = [
    { amount: 20, chance: 40 },
    { amount: 50, chance: 30 },
    { amount: 100, chance: 15 },
    { amount: 250, chance: 5 },
    { amount: 550, chance: 70 },
    { amount: 20, chance: 40 },
    { amount: 50, chance: 30 },
    { amount: 100, chance: 15 },
    { amount: 250, chance: 5 },
    { amount: 550, chance: 70 },
    { amount: 20, chance: 40 },
    { amount: 50, chance: 30 },
    { amount: 100, chance: 15 },
    { amount: 250, chance: 5 },
    { amount: 550, chance: 70 },
    { amount: 20, chance: 40 },
    { amount: 50, chance: 30 },
    { amount: 100, chance: 15 },
    { amount: 250, chance: 5 },
    { amount: 550, chance: 70 },
    
    { amount: 20, chance: 40 },
    { amount: 50, chance: 30 },
    { amount: 100, chance: 15 },
    { amount: 250, chance: 5 },
    { amount: 550, chance: 70 },
    { amount: 20, chance: 40 },
    { amount: 50, chance: 30 },
    { amount: 100, chance: 15 },
    { amount: 250, chance: 5 },
    { amount: 550, chance: 70 },
    { amount: 20, chance: 40 },
    { amount: 50, chance: 30 },
    { amount: 100, chance: 15 },
    { amount: 250, chance: 5 },
    { amount: 250, chance: 5 },
     // เปลี่ยนค่าช่องนี้ให้มีโอกาสสุ่มมากขึ้น
];


// สร้างรายการรางวัล
function createPrizeList() {
    const prizeList = document.getElementById('prizeList');
    prizes.forEach(prize => {
        const prizeElement = document.createElement('div');
        prizeElement.className = 'prize';
        prizeElement.innerText = `${prize.amount} บาท`;
        prizeList.appendChild(prizeElement);
    });
}

// ฟังก์ชันสุ่มเงินรางวัล
function spinPrize() {
    const prizeList = document.getElementById('prizeList');
    const totalChance = prizes.reduce((sum, prize) => sum + prize.chance, 0);
    const randomIndex = Math.floor(Math.random() * totalChance) + 1;

    let cumulativeChance = 0;
    let selectedPrize;
    prizes.forEach(prize => {
        cumulativeChance += prize.chance;
        if (randomIndex <= cumulativeChance) {
            selectedPrize = prize.amount;
        }
    });

    // เลื่อนรางวัล
    const prizeHeight = 80; // ความสูงของแต่ละรางวัล
    const offset = (prizes.length * prizeHeight) - prizeHeight; // หาระยะที่จะเลื่อนไป
    prizeList.style.transform = `translateY(-${offset}px)`; // เลื่อนขึ้น

    // แสดงผลรางวัลหลังจากเลื่อน
    setTimeout(() => {
        const resultElement = document.getElementById('result');
        resultElement.innerText = `🎉 คุณได้รับเงินรางวัล ${selectedPrize} บาท! 🎉`;
        resultElement.style.visibility = 'visible'; // แสดงผลรางวัล
    }, 1000); // รอ 1 วินาทีก่อนแสดงผล
}

// เมื่อกดปุ่มหมุน
document.getElementById('spinButton').addEventListener('click', spinPrize);

// สร้างรายการรางวัลเมื่อโหลดหน้า
createPrizeList();
</script>

</body>
</html>
