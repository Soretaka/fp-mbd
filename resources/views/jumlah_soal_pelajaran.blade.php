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
        <div>Jumlah soal yang ada untuk pelajaran {{ $pelajaran->nama }}: {{ $count }}</div>  
        <table border="1">
            <thead>
            <tr>
            <th> no </th>
            <th> deskripsi </th>
            <th> jawaban </th>
            <th> nama ujian </th>
            <th> nama pembuat soal </th>
            <th> nama pelajaran </th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach ($soals as $soal)
            <th> {{ $i }}</th>
            <th> {{ $soal->deskripsi }} </th>
            <th> {{ $soal->jawaban }} </th>
            <th> {{ $soal->ujian->nama }} </th>
            <th> {{ $soal->pengajar->nama }} </th>
            <th> {{ $soal->pelajaran->nama }} </th>
            </tr>
            @php
                $i+=1;
            @endphp
            @endforeach
        </tbody>
        </table>
</body>
</html>