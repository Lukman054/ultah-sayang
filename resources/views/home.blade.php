<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Happy Birthday ❤️</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

@vite('resources/css/app.css')

<style>

body{
    font-family:'Poppins',sans-serif;
    overflow:hidden;
}

.heart{
    position:absolute;
    color:pink;
    animation:float 8s linear infinite;
    opacity:.7;
}

@keyframes float{
    from{
        transform:translateY(100vh);
        opacity:0;
    }

    to{
        transform:translateY(-20vh);
        opacity:1;
    }
}

.fade{
    animation:fade 2s ease;
}

@keyframes fade{
    from{
        opacity:0;
        transform:translateY(30px);
    }

    to{
        opacity:1;
        transform:translateY(0);
    }
}

.polaroid{
    transition:.3s;
}

.polaroid:hover{
    transform:scale(1.08);
}

.glow{
    position:absolute;
    border-radius:9999px;
    filter:blur(120px);
}

</style>
</head>

<body class="bg-gradient-to-br from-pink-200 via-pink-100 to-rose-200 min-h-screen relative">

<!-- LOADING -->
<div
id="loadingScreen"
class="fixed inset-0 bg-pink-400 flex flex-col items-center justify-center z-[9999]"
>

<div class="text-8xl animate-pulse mb-6">
💖
</div>

<h1 class="text-4xl font-bold text-white">
Loading...
</h1>

<p class="text-white mt-4">
Menyiapkan kejutan untuk kamu ❤️
</p>

</div>

<!-- VIDEO BACKGROUND -->
<video
    autoplay
    muted
    loop
    playsinline
    class="absolute inset-0 w-full h-full object-cover opacity-20 z-0"
>
    <source src="/video/bg.mp4" type="video/mp4">
</video>

<!-- OVERLAY -->
<div
    class="absolute inset-0 bg-pink-100/50 backdrop-blur-[1px] z-[1]"
></div>

<!-- VIGNETTE -->
<div
    class="absolute inset-0 bg-gradient-to-b from-black/10 via-transparent to-black/10 z-[2]"
></div>

<!-- MUSIC -->
<audio id="bgMusic" loop>
    <source src="/music/music.mp3" type="audio/mpeg">
</audio>

<!-- GLOW -->
<div class="glow w-96 h-96 bg-pink-300 opacity-20 top-10 left-1/2 -translate-x-1/2"></div>

<div class="glow w-80 h-80 bg-rose-300 opacity-15 bottom-10 left-20"></div>

<div class="glow w-80 h-80 bg-purple-200 opacity-15 bottom-10 right-20"></div>

<!-- SPARKLES -->
<div class="absolute top-40 left-1/3 text-4xl animate-pulse">✨</div>
<div class="absolute top-32 right-1/3 text-3xl animate-pulse">⭐</div>
<div class="absolute bottom-44 left-1/4 text-4xl animate-pulse">✨</div>
<div class="absolute bottom-52 right-1/4 text-3xl animate-pulse">⭐</div>

<!-- HEARTS -->
<div class="heart text-4xl left-[10%]">❤️</div>
<div class="heart text-3xl left-[30%]" style="animation-delay:2s">💕</div>
<div class="heart text-5xl left-[50%]" style="animation-delay:4s">💖</div>
<div class="heart text-4xl left-[75%]" style="animation-delay:1s">❤️</div>

<!-- FOTO KIRI ATAS -->
<div class="absolute left-12 top-20 rotate-[-10deg] hidden lg:block z-10">
    <img
        src="/images/foto1.jpg"
        class="polaroid w-56 rounded-3xl border-4 border-white shadow-2xl"
    >
</div>

<!-- FOTO KANAN ATAS -->
<div class="absolute right-12 top-20 rotate-[10deg] hidden lg:block z-10">
    <img
        src="/images/foto2.jpg"
        class="polaroid w-56 rounded-3xl border-4 border-white shadow-2xl"
    >
</div>

<!-- FOTO KIRI BAWAH -->
<div class="absolute left-20 bottom-20 rotate-[8deg] hidden lg:block z-10">
    <img
        src="/images/foto4.jpg"
        class="polaroid w-64 rounded-3xl border-4 border-white shadow-2xl"
    >
</div>

<!-- FOTO KANAN BAWAH -->
<div class="absolute right-20 bottom-20 rotate-[-8deg] hidden lg:block z-10">
    <img
        src="/images/foto3.jpg"
        class="polaroid w-64 rounded-3xl border-4 border-white shadow-2xl"
    >
</div>

<section class="min-h-screen flex items-center justify-center">

<div class="text-center fade z-20 max-w-3xl px-6">

<div class="text-5xl mb-4">
💖
</div>

<h1 class="text-6xl md:text-7xl font-bold text-pink-600 mb-4">
Happy Birthday Sayang ❤️
</h1>

<p class="text-2xl text-gray-700 mb-3">
Terima kasih karena selalu jadi alasan aku tersenyum setiap hari ❤️
</p>

<p class="text-pink-500 italic text-lg mb-8">
"Semoga semua hal baik selalu datang ke kamu,
karena kamu pantas mendapatkannya."
</p>

<div class="bg-white/60 backdrop-blur-lg rounded-3xl shadow-2xl p-8 inline-block border border-white/50">

<h2 class="text-2xl font-semibold text-pink-500 mb-4">
Kita udah bareng selama
</h2>

<div
id="timer"
class="text-3xl font-bold text-gray-800 mb-4"
>
Loading...
</div>

<div class="text-gray-600">
📅 Sejak Juni 2022
</div>

</div>

<div class="mt-6">

<button
onclick="toggleMusic()"
id="musicBtn"
class="bg-white px-6 py-3 rounded-full shadow-xl hover:scale-105 transition"
>
⏸️ Musik
</button>

</div>

</div>

</section>

<script>

const startDate = new Date("2022-06-26");

function updateTimer(){

    const now = new Date();

    const diff = now - startDate;

    const days =
    Math.floor(diff / (1000*60*60*24));

    const hours =
    Math.floor((diff / (1000*60*60)) % 24);

    const minutes =
    Math.floor((diff / (1000*60)) % 60);

    document.getElementById('timer').innerHTML =
    `${days} Hari ❤️<br>${hours} Jam ${minutes} Menit`;

}

setInterval(updateTimer,1000);
updateTimer();

const music =
document.getElementById('bgMusic');

const btn =
document.getElementById('musicBtn');

function toggleMusic(){

    if(music.paused){

        music.play();
        btn.innerHTML = "⏸️ Musik";

    }else{

        music.pause();
        btn.innerHTML = "▶️ Putar";

    }

}

window.addEventListener('load',()=>{

    setTimeout(()=>{

        const loading =
        document.getElementById('loadingScreen');

        loading.style.opacity='0';
        loading.style.transition='1s';

        setTimeout(()=>{
            loading.remove();
        },1000);

        music.play().catch(()=>{

            document.body.addEventListener(
                'click',
                ()=>music.play(),
                {once:true}
            );

        });

    },2500);

});

</script>

</body>
</html>