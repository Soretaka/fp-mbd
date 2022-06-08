@extends('layout.template')

@section('container')
<body>
    <div class="text-white">
        <div>Jumlah Pelajar yang lolos ujian {{ $ujian->nama }}: {{ $count }}</div>  
        <div>Winrate : {{ $winrate }}</div>
    </div>
</body>
@endsection