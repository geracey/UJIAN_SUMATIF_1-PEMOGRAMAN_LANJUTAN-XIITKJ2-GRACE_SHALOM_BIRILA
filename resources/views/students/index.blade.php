<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen p-6">
    <div class="max-w-7xl mx-auto">
        <h1 class="text-2xl font-bold mb-6">Daftar Siswa</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach ($students as $student)
                <a href="/students/{{ $student['id'] }}">
                    <x-card :heading="'Data Siswa ' . $student['id']">
                        <div class="flex items-center space-x-4">
                            <img src="{{ $student['foto'] }}" 
                                 alt="{{ $student['nama'] }}" 
                                 class="w-14 h-14 rounded-full object-cover bg-gray-200" />
                            <div>
                                <h3 class="text-base font-semibold text-gray-900">{{ $student['nama'] }}</h3>
                                <p class="text-sm text-gray-500">{{ '@' . $student['username'] }}</p>
                            </div>
                        </div>
                        <p class="mt-3 text-sm text-gray-700">
                            {{ $student['deskripsi'] }}
                        </p>
                    </x-card>   
                </a>
            @endforeach
        </div>
    </div>
</body>
</html>
