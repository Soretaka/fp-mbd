<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Soal</title>
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
    @foreach ($datas as $data)
        @php
            $i=1;
        @endphp
        <div> soal pelajaran {{ $data[5]->nama}} </div>
        @foreach ($data as $soal)
        <div>{{ $i }} . {{ $soal->deskripsi }}</div>
        @php
            $i+=1;
        @endphp
        @endforeach
        <br>
    @endforeach
</body>
</html>