<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <style>
        body {
            font-family: 'Helvetica Neue', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #e3f2fd, #bbdefb); /* Gradient biru pastel */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            overflow: hidden;
        }
        .card {
            background: #ffffff; /* Warna putih */
            border-radius: 15px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            padding: 30px;
            max-width: 400px;
            width: 90%;
            transition: transform 0.3s, box-shadow 0.3s;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 1s ease-out forwards;
        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        h1 {
            font-size: 2.5em;
            margin: 0;
            color: #81d4fa; /* Warna biru pastel lebih terang */
            position: relative;
            overflow: hidden;
            display: inline-block;
        }
        h1::after {
            content: '';
            position: absolute;    
            bottom: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: #81d4fa;
            animation: typing 2s steps(30, end) forwards;
        }
        @keyframes typing {
            from { width: 0; }
            to { width: 100%; }
        }
        p {
            font-size: 1.2em;
            color: #37474f; /* Warna abu-abu biru gelap untuk teks */
            margin: 20px 0;
            line-height: 1.6;
            opacity: 0;
            animation: fadeIn 1.5s 0.5s ease-out forwards;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .btn {
            display: inline-block;
            padding: 12px 30px;
            font-size: 1.2em;
            color: #ffffff;
            background-color: #64b5f6; /* Warna biru pastel tombol */
            text-decoration: none;
            border-radius: 25px;
            transition: background-color 0.3s, transform 0.3s;
            transform: translateY(10px);
            opacity: 0;
            animation: slideInUp 1s 1s ease-out forwards;
        }
        .btn:hover {
            background-color: #42a5f5; /* Warna biru sedikit lebih gelap saat hover */
            transform: translateY(-3px);
        }
        @keyframes slideInUp {
            from {
                transform: translateY(10px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Selamat datang di dunia coding! </h1>
        <p>Jangan menyerah walaupun merah!</p>
        <a href="/about" class="btn">Next</a>
    </div>
</body>
</html>
