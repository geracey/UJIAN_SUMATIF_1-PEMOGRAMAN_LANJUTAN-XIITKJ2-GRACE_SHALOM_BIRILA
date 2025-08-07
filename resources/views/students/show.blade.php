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
    <div class="max-w-3xl mx-auto px-4 py-8">
        <x-card heading="Detail Profil Siswa">
            <div class="flex flex-col items-center space-y-6">

                {{-- Foto Siswa --}}
                <img src="{{ $student['foto'] }}" 
                     alt="Foto {{ $student['nama'] }}"
                     class="w-48 h-48 object-cover rounded-full">
                
                {{-- Nama --}}
                <h2 class="text-2xl font-bold text-gray-800 text-center">
                    {{ $student['nama'] }}
                </h2>

                {{-- Info Siswa --}}
                <div class="w-full space-y-3">
                    @foreach (['Kelas' => 'kelas', 'Hobi' => 'hobi', 'Deskripsi' => 'deskripsi'] as $label => $key)
                        <div class="flex">
                            <span class="w-32 font-medium text-gray-600">{{ $label }}</span>
                            <span class="text-gray-800">{{ $student[$key] }}</span>
                        </div>
                    @endforeach
                </div>

                <div class="flex flex-wrap justify-center gap-4 pt-6">
                    <x-button color="green">Edit Profile</x-button>
                    <x-button color="red">Delete Account</x-button>


                </div>

                    <a href="/students" 
                    class="px-5 py-2 bg-blue-300 rounded">
                    Kembali ke Daftar
                    </a>
            </div>
        </x-card>
    </div>
</body>
</html>
