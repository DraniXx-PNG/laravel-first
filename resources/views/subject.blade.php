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

    <h2>Daftar Mata Pelajaran</h2>

   <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($subjects as $subject)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $subject ['name']}}</td>
                <td>
                 @foreach ($subject->teacher as $teacher)
                     {{$teacher->name}}<br>
                 @endforeach
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout> 