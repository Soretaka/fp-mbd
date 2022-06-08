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
        <br>
        <td>Nilai total ujian = {{ $total_ujian }}</td>
    </div>

</body>
@endsection