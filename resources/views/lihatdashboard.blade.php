<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lihat Dashboard</title>
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
    <div class="identity">
        <div>Nama&emsp;&emsp;&emsp;&ensp;&nbsp;: {{ $pelajar['nama'] }}</div>  
        <div>Tanggal Lahir&nbsp;: {{ $pelajar['tanggal_lahir'] }}</div>
        <div>Tempat Lahir&ensp;: {{ $pelajar['tempat_lahir'] }}</div>
        <div>Kelas&emsp;&emsp;&emsp;&ensp;&nbsp;: {{ $pelajar['kelas'] }}</div>
    </div>
    <div class="history">
        <div>History Ujian</div>
        <table style="text-indent: 50">
            <tr>
            <td>ID</td>
            <td>Nama</td>
            <td>Nilai</td>
            <td>Status</td>
            </tr>
            @foreach ($ujian_history as $ujian)
            <tr>
            <td>{{ $ujian->id }}</td>
            <td>{{ $ujian->nama }}</td>
            <td>{{ $ujian->nilai }}</td>
            <td>{{ $ujian->status }}</td>
            </tr>
            @endforeach
        </table>
    </div>

</body>
</html>