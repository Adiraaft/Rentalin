<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rentalin</title>
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

<body>
    <div class="grid grid-cols-12 min-h-screen">
        <div class="col-span-6 w-full h-full text-white flex flex-col justify-center px-10"
            style="background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('{{ asset('image/login.png') }}'); background-size: cover; background-position: center;">

            <h1 class="text-4xl font-bold font-['Poppins'] text-center mb-3">Welcome To Rentalin.id</h1>
            <p class="text-xl text-center font-['Poppins'] font-medium mb-6">Sewa Cepat, Acara Hebat!</p>
            <p class="text-sm text-center font-['Poppins']">Butuh alat produksi? Sewa kamera, drone, lighting, dan
                lainnya langsung di Rentalin!</p>
        </div>
        <div class="col-span-6 mx-32 my-16">
            <h1 class="text-3xl font-['DM_Sans'] font-bold">Rentalin.id</h1>
            <p class="font-['DM_Sans'] font-semibold mt-6 text-xl">Create An Account.</p>
            <p class="text-[#80898E] font-['DM_Sans'] mt-3">Bergabunglah dengan ratusan pengguna yang telah
                mempercayakan
                kebutuhan sewa alat mereka kepada Rentalin cepat, praktis, dan terpercaya!</p>
            <a href="#"
                class="flex font-['DM_Sans'] font-semibold gap-9 py-3.5 bg-[#F5F5F5] pl-8 rounded-3xl mt-8">
                <svg width="24px" height="24px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                    fill="none">
                    <path fill="#1877F2"
                        d="M15 8a7 7 0 00-7-7 7 7 0 00-1.094 13.915v-4.892H5.13V8h1.777V6.458c0-1.754 1.045-2.724 2.644-2.724.766 0 1.567.137 1.567.137v1.723h-.883c-.87 0-1.14.54-1.14 1.093V8h1.941l-.31 2.023H9.094v4.892A7.001 7.001 0 0015 8z" />
                    <path fill="#ffffff"
                        d="M10.725 10.023L11.035 8H9.094V6.687c0-.553.27-1.093 1.14-1.093h.883V3.87s-.801-.137-1.567-.137c-1.6 0-2.644.97-2.644 2.724V8H5.13v2.023h1.777v4.892a7.037 7.037 0 002.188 0v-4.892h1.63z" />
                </svg>
                Continue With Facebook
            </a>
            <a href="#"
                class="flex font-['DM_Sans'] font-semibold gap-9 py-3.5 bg-[#F5F5F5] pl-8 rounded-3xl mt-3">
                <svg width="24px" height="24px" viewBox="0 0 32 32" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M30.0014 16.3109C30.0014 15.1598 29.9061 14.3198 29.6998 13.4487H16.2871V18.6442H24.1601C24.0014 19.9354 23.1442 21.8798 21.2394 23.1864L21.2127 23.3604L25.4536 26.58L25.7474 26.6087C28.4458 24.1665 30.0014 20.5731 30.0014 16.3109Z"
                        fill="#4285F4" />
                    <path
                        d="M16.2863 29.9998C20.1434 29.9998 23.3814 28.7553 25.7466 26.6086L21.2386 23.1863C20.0323 24.0108 18.4132 24.5863 16.2863 24.5863C12.5086 24.5863 9.30225 22.1441 8.15929 18.7686L7.99176 18.7825L3.58208 22.127L3.52441 22.2841C5.87359 26.8574 10.699 29.9998 16.2863 29.9998Z"
                        fill="#34A853" />
                    <path
                        d="M8.15964 18.769C7.85806 17.8979 7.68352 16.9645 7.68352 16.0001C7.68352 15.0356 7.85806 14.1023 8.14377 13.2312L8.13578 13.0456L3.67083 9.64746L3.52475 9.71556C2.55654 11.6134 2.00098 13.7445 2.00098 16.0001C2.00098 18.2556 2.55654 20.3867 3.52475 22.2845L8.15964 18.769Z"
                        fill="#FBBC05" />
                    <path
                        d="M16.2864 7.4133C18.9689 7.4133 20.7784 8.54885 21.8102 9.4978L25.8419 5.64C23.3658 3.38445 20.1435 2 16.2864 2C10.699 2 5.8736 5.1422 3.52441 9.71549L8.14345 13.2311C9.30229 9.85555 12.5086 7.4133 16.2864 7.4133Z"
                        fill="#EB4335" />
                </svg>
                Continue With Google
            </a>
            <hr class="mt-8 border border-[#F5F5F5]">
            <form action="/sesi/create" method="POST" class="max-w-sm mx-auto mt-10 font-['DM_Sans']">
                @csrf
                <div class="mb-5">
                    <label for="name" class="block mb-2 text-sm font-medium ">
                        Name</label>
                    <input type="text" id="name" name="name" value="{{ Session::get('name') }}"
                        class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="Enter Your name" required />
                </div>
                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium ">
                        Email</label>
                    <input type="email" id="email" name="email" value="{{ Session::get('email') }}"
                        class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="Enter Your Email" required />
                </div>
                <div class="mb-5">
                    <label for="password" class="block mb-2 text-sm font-medium">
                        Password</label>
                    <input type="password" id="password" name="password"
                        class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="Enter Your Password" required />
                </div>
                <div class="flex items-start mb-5">
                    <div class="flex items-center h-5">
                        <input id="remember" type="checkbox" value=""
                            class="w-4 h-4 border border-gray-300 rounded-sm bg-gray-50 focus:ring-3 focus:ring-blue-300 "
                            required />
                    </div>
                    <label for="remember" class="ms-2 text-sm font-medium">I agree to the Terms and
                        Privacy Policy</label>
                </div>
                <button type="submit" name="submit"
                    class="text-white cursor-pointer bg-[#141414] font-medium rounded-lg text-sm w-full sm:w-auto px-45 py-4 text-center">Submit</button>
            </form>
            <p class="text-sm text-center mt-5">Already have an account? <a href="/sesi" class="underline">Login
                    Here</a></p>
        </div>
    </div>
</body>

</html>
