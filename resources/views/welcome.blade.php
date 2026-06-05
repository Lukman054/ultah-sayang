<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>For You ❤️</title>

    {{-- FONT --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')

    <style>
        body{
            font-family: 'Poppins', sans-serif;
            overflow: hidden;
        }

        .fade-in{
            animation: fadeIn 2s ease;
        }

        @keyframes fadeIn{
            from{
                opacity:0;
                transform: translateY(30px);
            }

            to{
                opacity:1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body class="bg-pink-100 min-h-screen flex items-center justify-center">

    <div class="text-center fade-in">

        <h1 class="text-7xl font-bold text-pink-600 mb-4">
            Hi Sayang ❤️
        </h1>

        <p class="text-gray-700 text-2xl mb-8">
            Aku punya sesuatu buat kamu...
        </p>

        <a
            href="/password"
            class="bg-pink-500 hover:bg-pink-600 hover:scale-110 transition duration-300 text-white px-10 py-4 rounded-full text-xl shadow-xl inline-block"
        >
            Klik Aku
        </a>

    </div>

</body>
</html>