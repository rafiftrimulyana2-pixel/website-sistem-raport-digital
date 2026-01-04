<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - E-RAPORT</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-900 via-blue-800 to-indigo-900 min-h-screen flex items-center justify-center p-4">

    <div class="max-w-4xl w-full flex flex-col md:flex-row items-center justify-between gap-10">

        <div class="text-white text-center md:text-left">
            <h1 class="text-5xl font-extrabold italic tracking-tighter">
                <span class="text-red-500">E</span>-RAPORT
            </h1>
            <p class="text-xl mt-2 font-semibold">Digitalisasi Pendidikan</p>
        </div>

        <div class="bg-white p-10 rounded-2xl shadow-2xl w-full max-w-md">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-blue-900">Selamat Datang</h2>
                <p class="text-blue-600 font-medium mt-1">Masuk sebagai Guru</p>
                <p class="text-gray-400 text-sm">Masukkan kredensial anda untuk melanjutkan.</p>
            </div>
                @if($errors->has('email'))
                    <div class="bg-red-500 text-white p-3 rounded-lg mb-4 text-xs text-center font-bold">
                    {{ $errors->first('email') }}
                </div>
                @endif

            <form action="/login" method="POST">
                @csrf
                <div class="mb-5">
                    <label class="block text-gray-700 font-bold mb-2 text-sm">NIP / Email</label>
                    <input type="email" name="email" placeholder="Masukkan NIP atau Email" required
                           class="w-full p-3 bg-gray-100 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="mb-2">
                    <label class="block text-gray-700 font-bold mb-2 text-sm">Password</label>
                    <input type="password" name="password" placeholder="********"
                           class="w-full p-3 bg-gray-100 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="text-right mb-6">
                    <a href="#" class="text-xs text-blue-600 hover:underline">Lupa Password?</a>
                </div>

                <button type="submit" class="w-full bg-indigo-600 text-white font-bold py-3 rounded-lg shadow-lg hover:bg-indigo-700 transition duration-300">
                    Masuk Sekarang
                </button>
            </form>

            <p class="text-center text-gray-400 text-[10px] mt-8">© 2024 E-Raport System.</p>
        </div>
    </div>

</body>
</html>
