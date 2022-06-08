<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rangking Ujian</title>
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
    <div class="card-body container">
        <div>Rangking: {{ $ujian[0]->nama}}</div>
        <table style="text-indent: 50">
            <tr>
            <td>Rank</td>
            <td>Pelajar_id</td>
            <td>Nama Pelajar</td>
            <td>Ujian_id</td>
            <td>Nilai</td>
            </tr>
            @php
                $i=1;
            @endphp
            @foreach ($pelajar as $p)
            <tr>
            <td>{{ $i }}</td>
            <td>{{ $p->pelajar_id }}</td>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->ujian_id }}</td>
            <td>{{ $p->nilai }}</td>
            </tr>
            @php
                $i+=1;
            @endphp
            @endforeach
        </table>
        <br>
        {{-- <td>Nilai total ujian = {{ $total_ujian }}</td> --}}
    </div>

</body>
</html>