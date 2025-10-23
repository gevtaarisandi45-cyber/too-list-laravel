<!DOCTYPE html>
<html>
<head>
    <title>TODO LIST LARAVEL</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
        .selesai {
            background-color: #d3ffd3;
        }
    </style>
</head>
<body>
    <h2>TODO LIST LARAVEL</h2>
    <a href="/todo/tambah">+ Tambah Todo</a>
    <br><br>
    <table>
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Tugas</th>
            <th>Deadline</th>
            <th>Status</th>
        </tr>
        @foreach ($todo_lists as $item)
        <tr>
            <td>{{ $item->id}}</td>
            <td>{{ $item->nama}}</td>
            <td>{{ $item->tugas}}</td>
             <td>{{ $item->deadline}}</td>
             <td>{{ $item->status}}</td>
    </tr>
    @endforeach