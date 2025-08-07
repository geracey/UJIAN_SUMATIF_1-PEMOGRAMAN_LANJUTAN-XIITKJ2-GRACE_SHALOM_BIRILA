<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white min-h-screen flex items-center justify-center">
    <div class="max-w-md w-full p-6 bg-white text-center space-y-4">
        <img src="{{ $student['foto'] }}" 
             alt="Foto {{ $student['nama'] }}"
             class="mx-auto w-32 h-32 object-cover rounded-full border border-gray-300">

        <p class="text-sm text-gray-500">{{ '@' . $student['username'] }}</p>

        <h2 class="text-2xl font-bold text-gray-900">
            {{ $student['nama'] }} 👾
        </h2>

        <p class="text-gray-700">{{ $student['kelas'] }} | {{ $student['hobi'] }}</p>

        <p class="text-gray-600">{{ $student['deskripsi'] }}</p>

        <div class="flex justify-center space-x-4 pt-4">
            <x-button color="blue">Edit Profile</x-button>
            <x-button color="red">Delete Account</x-button>
        </div>

        <div class="pt-4">
                    <a href="/students" 
                    class="px-5 py-2 bg-gray-300 rounded">
                    Kembali ke Daftar
                    </a>
        </div>
    </div>
</body>
</html>
