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
        <div>Jumlah Pelajar yang lolos ujian {{ $ujian->nama }}: {{ $count }}</div>  
        <div>Winrate : {{ $winrate }}</div>
        <div>Jumlah Pelajar laki-laki yang lolos ujian : {{ $male }}</div>
        <div>Persentase Pelajar laki-laki yang lolos ujian : {{ $males }}%</div>
        <div>Jumlah Pelajar Perempuan yang lolos ujian : {{ $female }}</div>
        <div>Persentase Pelajar Perempuan yang lolos ujian : {{ $females }}%</div>
        <div>Ratio laki-laki/perempuan: {{ $ratio }}</div>
</body>
</html>