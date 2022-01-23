<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class studentApiController extends Controller
{
    public function index()
    {
        //Ambil data dari database, simpan ke array
        $data['students'] = Student::all();

        //return data array ke API
        return response() -> json($data);
    }

    //Menampilkan data siswa melalui API menggunakan parameter ID
    public function getById($id)
    {
        $data['student'] = Student::find($id);
        return response() -> json($data);
    }

    // Menampilkan data siswa melalui API menggunakan parameter NIM
    public function getByNim($nim)
    {
        $data['student'] = Student::where('nim', $nim) -> first();
        return response() -> json($data);
    }

    public function save()
    {
        $student = new Student;
        $student->nim = request('nim');
        $student->name = request('name');
        $student->gender = request('gender');
        $student->departement = request('departement');
        $student->address = request('address');
        $student->save();

        return response() -> json(['message' => "Data berhasil disimpan"]);
    }

    public function update($id)
    {
        $student = Student::find($id);
        $student->nim = request('nim');
        $student->name = request('name');
        $student->gender = request('gender');
        $student->departement = request('departement');
        $student->address = request('address');
        $student->save();

        return response() -> json(['message' => "Data berhasil diubah"]);
    }

    public function delete($id)
    {
        //Ambil data dari database
        $student = Student::find($id);

        //Hapus data siswa
        $student->delete();

        return response() -> json(['message' => "Data berhasil dihapus"]);
    }
}