<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rangking Ujian</title>
</head>
<body>
    <table style="text-indent: 50">
        <tr>
        <td>Rank</td>
        <td>Nama Peserta</td>
        <td>Nilai</td>
        <td>Ujian</td>
        </tr>
        @php
                $i=1;
            @endphp
        @foreach ($datas as $data)
        <tr>
        <td>{{ $i }}</td>
        <td>{{ $data->pelajar }}</td>
        <td>{{ $data->nilai }}</td>
        <td>{{ $data->ujian }}</td>

        </tr>
        @php
                $i+=1;
            @endphp
        @endforeach
        </table>
</body>
</html>