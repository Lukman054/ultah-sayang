<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Password ❤️</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')

    <style>
        body{
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-pink-100 min-h-screen flex items-center justify-center">

    <div class="bg-white p-10 rounded-3xl shadow-2xl w-[400px] text-center">

        <h1 class="text-4xl font-bold text-pink-500 mb-4">
            Secret Access ❤️
        </h1>

        <p class="text-gray-600 mb-6">
            Apanya Paswordnya~
        </p>

        <input
            type="password"
            id="password"
            placeholder=""
            class="w-full border-2 border-pink-200 rounded-xl p-4 focus:outline-none focus:border-pink-500"
        >

        <button
            onclick="checkPassword()"
            class="mt-6 bg-pink-500 hover:bg-pink-600 transition text-white px-6 py-3 rounded-full w-full"
        >
            Masuk
        </button>

        <p id="error" class="text-red-500 mt-4 hidden">
            Password salah 😭
        </p>

    </div>

    <script>
        function checkPassword(){

            let password = document.getElementById('password').value;

            // PASSWORD
            if(password === "040604"){
                window.location.href = "/home";
            }else{
                document.getElementById('error').classList.remove('hidden');
            }
        }
    </script>

</body>
</html>