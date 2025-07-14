<!DOCTYPE html>
<html lang="en" class="font-['Montserrat']">

<head>
    <meta charset="UTF-8">
    <title>Login Failed</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body class="bg-gray-100 flex flex-col items-center justify-center min-h-screen">
    <div class="text-center">
        <h1 class="text-6xl font-bold text-[#141414] mb-4">Login Gagal</h1>
        <p class="text-lg text-gray-700 mb-8">
            Email atau password yang kamu masukkan salah.<br>
            Silakan coba lagi!
        </p>
        <a href="{{ url('/sesi') }}"
            class="inline-block bg-[#141414] text-white px-6 py-3 rounded-lg shadow hover:bg-black transition">
            Kembali ke Login
        </a>
    </div>
</body>

</html>
