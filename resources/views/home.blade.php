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
            background: linear-gradient(to right, #f8bbd0, #f48fb1); /* Gradient pink pastel */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            overflow: hidden;
        }
        .card {
            background: #ffffff; /* Warna putih */
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            padding: 30px;
            max-width: 400px;
            width: 90%;
            transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1s ease-out forwards;
        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.3);
            background-color: #fce4ec; /* Warna latar belakang saat hover */
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        h1 {
            font-size: 2.5em;
            margin: 0;
            color: #f06292; /* Warna pink terang */
            position: relative;
            overflow: hidden;
            display: inline-block;
            line-height: 1.2;
            animation: bounceIn 1s ease-out;
        }
        @keyframes bounceIn {
            0% {
                opacity: 0;
                transform: scale(0.3);
            }
            50% {
                opacity: 1;
                transform: scale(1.05);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }
        p {
            font-size: 1.2em;
            color: #c2185b; /* Warna pink gelap */
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
            background-color: #ec407a; /* Warna pink tombol */
            text-decoration: none;
            border-radius: 25px;
            transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transform: translateY(20px);
            opacity: 0;
            animation: slideInUp 1s 1s ease-out forwards;
        }
        .btn:hover {
            background-color: #d81b60; /* Warna pink lebih gelap saat hover */
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }
        @keyframes slideInUp {
            from {
                transform: translateY(20px);
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
        <h1>Selamat datang di dunia coding!</h1>
        <p>Jangan menyerah walaupun merah!</p>
        <a href="/about" class="btn">Next</a>
        <h1>Pesan dari Form</h1>
        <!-- Cek jika pesan ada -->
        @if(isset($message))
            <p>Pesan: {{ $message }}</p>
        @else
            <p>Tidak ada pesan yang dikirim.</p>
        @endif
    </div>
</body>
</html>
