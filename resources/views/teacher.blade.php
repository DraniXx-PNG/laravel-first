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

    <h2>Daftar Guru</h2>

   <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Subject Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teachers as $teacher)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $teacher->name}}</td>
                <td>{{ $teacher->subject->name  }}</td>
                <td>{{ $teacher->phone }}</td>
                <td>{{ $teacher->email }}</td>
                <td>{{ $teacher->address }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
