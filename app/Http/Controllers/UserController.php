<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
            $students = [
    [
        'id' => 1,
        'username' => 'andi_tkj',
        'nama' => 'Andi Pratama',
        'kelas' => '12 TKJ 1',
        'hobi' => 'Futsal',
        'foto' => 'https://placehold.co/400/png',
        'deskripsi' => 'Saya senang berolahraga dan bercita-cita menjadi atlet profesional.'
    ],
    [
        'id' => 2,
        'username' => 'bella_code',
        'nama' => 'Bella Arumsari',
        'kelas' => '12 TKJ 1',
        'hobi' => 'Ngoding',
        'foto' => 'https://placehold.co/400/png',
        'deskripsi' => 'Saya suka mempelajari bahasa pemrograman dan ingin menjadi software engineer.'
    ],
    [
        'id' => 3,
        'username' => 'cika_dance',
        'nama' => 'Cika Ramadhani',
        'kelas' => '12 TKJ 1',
        'hobi' => 'Menari',
        'foto' => 'https://placehold.co/400/png',
        'deskripsi' => 'Menari adalah cara saya mengekspresikan diri dan semangat.'
    ],
    [
        'id' => 4,
        'username' => 'dani_design',
        'nama' => 'Dani Saputra',
        'kelas' => '12 TKJ 1',
        'hobi' => 'Desain Grafis',
        'foto' => 'https://placehold.co/400/png',
        'deskripsi' => 'Saya senang membuat desain yang estetik dan fungsional.'
    ]
];

            return view('students.index',compact('students'));

    }
public function show($id)
{
            $students = [
    [
        'id' => 1,
        'username' => 'andi_tkj',
        'nama' => 'Andi Pratama',
        'kelas' => '12 TKJ 1',
        'hobi' => 'Futsal',
        'foto' => 'https://placehold.co/400/png',
        'deskripsi' => 'Saya senang berolahraga dan bercita-cita menjadi atlet profesional.'
    ],
    [
        'id' => 2,
        'username' => 'bella_code',
        'nama' => 'Bella Arumsari',
        'kelas' => '12 TKJ 1',
        'hobi' => 'Ngoding',
        'foto' => 'https://placehold.co/400/png',
        'deskripsi' => 'Saya suka mempelajari bahasa pemrograman dan ingin menjadi software engineer.'
    ],
    [
        'id' => 3,
        'username' => 'cika_dance',
        'nama' => 'Cika Ramadhani',
        'kelas' => '12 TKJ 1',
        'hobi' => 'Menari',
        'foto' => 'https://placehold.co/400/png',
        'deskripsi' => 'Menari adalah cara saya mengekspresikan diri dan semangat.'
    ],
    [
        'id' => 4,
        'username' => 'dani_design',
        'nama' => 'Dani Saputra',
        'kelas' => '12 TKJ 1',
        'hobi' => 'Desain Grafis',
        'foto' => 'https://placehold.co/400/png',
        'deskripsi' => 'Saya senang membuat desain yang estetik dan fungsional.'
    ]
];

    // Cari student dengan ID cocok
    $student = collect($students)->first(function ($item) use ($id) {
        return $item['id'] == $id;
    });

    if (!$student) {
        abort(404, 'Siswa tidak ditemukan');
    }

    return view('students.show', compact('student'));
}

}