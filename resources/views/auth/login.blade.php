<!doctype html>
<html>

<head lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/logotok.svg">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="grid grid-cols-2 items-center justify-center h-screen overflow-hidden gap-60" style="background: url({{ url('/assets/images/background.svg') }}); background-repeat: no-repeat;">
        <div>
            <img src="{{ url('assets/images/header.svg') }}" alt="" class="ml-20">
        </div>
        <div class="py-8 px-[68px] bg-white max-w-[511px] rounded-[10px] shadow-2xl">
            <div class="text-center">
                <img src="{{ url('assets/images/Logo.svg') }}" alt="Pasarpedia" class="mx-auto">
                <h2 class="font-bold text-xl my-4">Selamat Datang di Pasarpedia</h2>
            </div>
            <div>
                <form id="login-form" action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="flex flex-col my-2">
                        <label for="email" class="text-xs font-semibold">Email</label>
                        <input id="email" type="text" name="email" placeholder="Nomor Telepon/Email"
                            class="w-full rounded-[10px] py-5 px-[15px] font-light text-sm my-[7px] border">
                            @error('email')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="flex flex-col my-2">
                            <label for="password" class="text-xs font-semibold">Password</label>
                            <input id="password" name="password" type="password" placeholder="Password"
                            class="w-full rounded-[10px] py-5 px-[15px] font-light text-sm my-[7px] border">
                            @error('password')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                    </div>
                    <button
                        class="bg-[#006D77] text-center text-white mx-auto w-full mt-6 mb-3 py-3 font-semibold text-xl rounded-[10px]">Login</button>
                </form>
                <div class="mx-auto">
                    <p class="text-[10px] text-black opacity-70 text-center">Dengan Masuk, saya menyetujui <br><span
                            class="text-[#203864] cursor-pointer">Syarat dan Ketentuan </span>serta <span
                            class="text-[#203864] cursor-pointer">Kebijakan Privasi</span></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>