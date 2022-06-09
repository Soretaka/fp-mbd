@extends('layout.template')

@section('container')
<body>
    <div class="text-white">
    <div class="identity">
        <div>Nama&emsp;&emsp;&emsp;&ensp;&nbsp;: {{ $pelajar['nama'] }}</div>  
        <div>Tanggal Lahir&nbsp;: {{ $pelajar['tanggal_lahir'] }}</div>
        <div>Tempat Lahir&ensp;: {{ $pelajar['tempat_lahir'] }}</div>
        <div>Kelas&emsp;&emsp;&emsp;&ensp;&nbsp;: {{ $pelajar['kelas'] }}</div>
    </div>
    <div class="history">
        <br>
        <div>History Ujian</div>
        <div>Pelajar ini belum pernah menyelesaikan ujian</div>
    </div>
</body>
@endsection