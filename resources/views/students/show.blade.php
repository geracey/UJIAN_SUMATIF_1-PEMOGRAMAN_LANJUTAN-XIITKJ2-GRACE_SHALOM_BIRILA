{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Siswa</title>
</head>
<body>
    <div class="container">
        <h2>{{ $student['nama'] }}</h2>
        <img src="{{ $student['foto'] }}" alt="Foto" style="width:200px; border-radius: 500px">
        <p><strong>Kelas:</strong> {{ $student['kelas'] }}</p>
        <p><strong>Hobi:</strong> {{ $student['hobi'] }}</p>
        <p><strong>Deskripsi:</strong> {{ $student['deskripsi'] }}</p>
        <a href="/students">Kembali ke daftar siswa</a>

        <br>
        <br>
    <x-button type="submit" color="green">Edit Profile</x-button>
    <x-button type="button" color="red">Delete Account</x-button>
    </div>
</body>
</html> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8 max-w-3xl">
        <x-card heading="Detail Profil Siswa">
            <div class="flex flex-col items-center space-y-6">
                <!-- Foto Profil -->
                <img src="{{ $student['foto'] }}" 
                     alt="Foto {{ $student['nama'] }}"
                     class="w-48 h-48 object-cover rounded-full border-4 border-blue-200">
                
                <!-- Informasi Siswa -->
                <div class="w-full space-y-4">
                    <h2 class="text-2xl font-bold text-center text-gray-800">{{ $student['nama'] }}</h2>
                    
                    <div class="space-y-3">
                        <div class="flex">
                            <span class="w-32 font-medium text-gray-600">Kelas</span>
                            <span class="text-gray-800">{{ $student['kelas'] }}</span>
                        </div>
                        <div class="flex">
                            <span class="w-32 font-medium text-gray-600">Hobi</span>
                            <span class="text-gray-800">{{ $student['hobi'] }}</span>
                        </div>
                        <div class="flex">
                            <span class="w-32 font-medium text-gray-600">Deskripsi</span>
                            <span class="text-gray-800">{{ $student['deskripsi'] }}</span>
                        </div>
                    </div>
                </div>
                
                <!-- Tombol Aksi -->
                <div class="flex space-x-4 pt-4">
                    <x-button type="submit" color="green">Edit Profile</x-button>
                    <x-button type="button" color="red">Delete Account</x-button>
                    <br>
                    <a href="/students" 
                    class="px-5 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400 transition-colors">
                    Kembali ke Daftar
                    </a>
                </div>
            </div>
        </x-card>
    </div>
</body>
</html>