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

    <h2>Daftar Kelas</h2>

   <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Daftar Siswa</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classrooms as $classroom)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $classroom ['name']}}</td>
                <td>
                 @foreach ($classroom->student as $student)
                     {{$student->name}}<br>
                 @endforeach
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout> 