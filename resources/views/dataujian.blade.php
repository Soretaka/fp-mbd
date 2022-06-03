<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Ujian</title>
</head>
<body>
    <table style="text-indent: 50">
        <tr>
        <td>ID</td>
        <td>Nama</td>
        <td>Total Peserta</td>
        </tr>
        @foreach ($datas as $data)
        <tr>
        <td>{{ $data->id }}</td>
        <td>{{ $data->nama }}</td>
        <td>{{ $data->total_peserta }}</td>
        </tr>
        @endforeach
        </table>
</body>
</html>