<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Profil Elegan</title>
    <style>
        /* Font Import */
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600&family=Raleway:wght@300;500&display=swap');

        /* Background Gradient */
        body {
            background: linear-gradient(135deg, #fdfbfb, #e2d1c3, #d4a373);
            color: #5a5a5a;
            font-family: 'Raleway', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Glass Effect */
        .glass-card {
            background: rgba(255, 255, 255, 0.4);
            backdrop-filter: blur(12px);
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(180, 150, 120, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.5);
            transition: all 0.3s ease-in-out;
            padding: 20px;
            width: 360px;
        }

        /* Floating Effect */
        .floating {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-8px); }
        }

        /* Soft Shadow */
        .soft-border {
            box-shadow: 0 0 15px rgba(210, 180, 140, 0.4);
        }

        /* Title Styling */
        .title {
            font-family: 'Playfair Display', serif;
            font-size: 24px;
            font-weight: 600;
            color: #8a6f48;
        }

        /* Subtext Styling */
        .subtext {
            font-size: 14px;
            color: #7a7a7a;
        }

        /* Information Box */
        .info-box {
            background: rgba(255, 255, 255, 0.2);
            padding: 10px;
            border-radius: 8px;
            text-align: left;
            font-size: 14px;
            font-weight: 500;
            color: #4a4a4a;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        /* Button */
        .btn-modern {
            background: linear-gradient(90deg, #d4a373, #8a6f48);
            color: white;
            font-weight: 600;
            padding: 10px 20px;
            border-radius: 30px;
            box-shadow: 0 0 10px rgba(200, 150, 100, 0.4);
            transition: all 0.3s ease;
        }

        .btn-modern:hover {
            transform: scale(1.05);
            box-shadow: 0 0 15px rgba(200, 150, 100, 0.6);
        }
    </style>
</head>
<body>

    <div class="glass-card floating text-center">

        <!-- Foto Profil -->
        <div class="relative flex justify-center mb-4">
            <img src="{{ asset('profile.jpg') }}" 
            alt="Foto Profil" 
            class="w-40 h-40 rounded-full border-4 border-gray-300 object-cover shadow-xl soft-border">
        </div>

        <!-- Nama dan Informasi -->
        <h2 class="title">Elsa Putri Indriana</h2>
        <p class="subtext italic">D3 Manajemen Informatika</p>
        <p class="subtext">NPM: 2307051028</p>

        <!-- Informasi Profil -->
        <div class="mt-6 space-y-3">
            <div class="info-box">
                <span class="text-gray-500">Nama:</span> Elsa Putri Indriana
            </div>
            <div class="info-box">
                <span class="text-gray-500">Kelas:</span> D3 Manajemen Informatika
            </div>
            <div class="info-box">
                <span class="text-gray-500">NPM:</span> 2307051028
            </div>
        </div>
</body>
</html>
