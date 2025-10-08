<x-layout> 
    <x-slot:title> {{$title}}</x-slot:title>
    <style>
        table {
            width: 110%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #333;
            padding: 16px 20px;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
        }
        h2 {
            text-align: center;
        }
    </style>

    <h2>Daftar Siswa</h2>

   <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Tanggal Lahir</th>
                <th>Absen</th>
                <th>Email</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $student->name}}</td>
                {{-- <td>{{ $student ['grade'] }}</td> --}}
                <td>{{ $student->classroom->name }}</td>
                <td>{{ $student->birthday }}</td>
                <td>{{ $student->absence }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->address }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
