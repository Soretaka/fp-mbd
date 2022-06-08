@extends('layout.template')

@section('container')
<body>
    <div class="text-white">
        <div>Jumlah Pelajar yang lolos ujian {{ $ujian->nama }}: {{ $count }}</div>  
        <div>Winrate : {{ $winrate }}</div>
        <div>Jumlah Pelajar laki-laki yang lolos ujian : {{ $male }}</div>
        <div>Persentase Pelajar laki-laki yang lolos ujian : {{ $males }}%</div>
        <div>Jumlah Pelajar Perempuan yang lolos ujian : {{ $female }}</div>
        <div>Persentase Pelajar Perempuan yang lolos ujian : {{ $females }}%</div>
        <div>Ratio laki-laki/perempuan: {{ $ratio }}</div>
</body>
@endsection