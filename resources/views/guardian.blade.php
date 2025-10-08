<x-layout> 
    <x-slot:title> {{$title}}</x-slot:title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #333;
            padding: 10px 14px;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
        }
        h2 {
            text-align: center;
        }
    </style>

    <h2>Daftar Orang Tua/Wali</h2>

   <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Pekerjaan</th>
                <th>Nomor</th>
                <th>Email</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($guardian as $guardian)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $guardian ['name']}}</td>
                <td>{{ $guardian ['job'] }}</td>
                <td>{{ $guardian ['number'] }}</td>
                <td>{{ $guardian ['email'] }}</td>
                <td>{{ $guardian ['address']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
