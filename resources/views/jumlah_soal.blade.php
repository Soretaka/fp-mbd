<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jumlah Lolos</title>
    <style>
        .identity{
            font-family:sans-serif;
            font-size: 2vh
        }
        .history{
            margin-top: 15px;
        }
    </style>
</head>
<body>
        <div>Jumlah soal yang dibuat oleh pengajar {{ $pengajar->nama }}: {{ $count }}</div>
        <table border="1">
            <thead>
            <tr>
                <th>No.</th>
                <th>Deskripsi Soal</th>
            </tr>
            </thead>
            @php
            $it = 1;
            @endphp
            <tbody>
            @foreach($datas as $data)
            <tr>
                <td>{{ $it }}</td>
                <td>{{ $data->deskripsi }}</td>
            </tr>
            @php
            $it += 1;
            @endphp
            @endforeach
            </tbody>
        </table>
</body>
</html>