    {{-- @foreach ($students as $student)
    <x-card heading="Data Siswa {{ $student['id'] }}" >
        <div>
            <img src="{{ $student['foto'] }}" alt="Foto" style="width:200px; border-radius: 500px">
            <h3>{{ $student['nama'] }}</h3>
            <p>Username: {{ $student['username'] }}</p>
            <p>Kelas: {{ $student['kelas'] }}</p>
            <p>Hobi: {{ $student['hobi'] }}</p>
            <p>{{ $student['deskripsi'] }}</p>
            <a href="/students/{{ $student['id'] }}">Lihat Detail</a>

        </div>
    </x-card>
    @endforeach --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        @foreach ($students as $student)
            <x-card heading="Data Siswa {{ $student['id'] }}">
                <div class="flex flex-col items-center space-y-4">
                    <img src="{{ $student['foto'] }}" 
                         alt="Foto {{ $student['nama'] }}" 
                         class="w-48 h-48 object-cover rounded-full border-4 border-blue-200">
                    
                    <h3 class="text-xl font-bold text-gray-800">{{ $student['nama'] }}</h3>
                    
                    <div class="w-full text-center space-y-2">  <!-- Tambahkan text-center di sini -->
                        <p class="text-gray-600"><span class="font-medium">Username:</span> {{ $student['username'] }}</p>
                        <p class="text-gray-600"><span class="font-medium">Kelas:</span> {{ $student['kelas'] }}</p>
                        <p class="text-gray-600"><span class="font-medium">Hobi:</span> {{ $student['hobi'] }}</p>
                        <p class="mt-3 text-gray-700">{{ $student['deskripsi'] }}</p>
                    </div>
                    
                    <a href="/students/{{ $student['id'] }}" 
                       class="mt-4 px-5 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition-colors">
                        Lihat Detail
                    </a>
                </div>
            </x-card>
        @endforeach
    </div>
</body>
</html>