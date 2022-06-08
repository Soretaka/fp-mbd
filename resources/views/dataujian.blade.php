@extends('layout.template')

@section('container')
<body>
    <div class="text-white">
    <table style="text-indent: 50">
        <tr>
        <td>ID</td>
        <td>Nama Ujian</td>
        <td>Jumlah soal ujian</td>
        <td>Total Peserta</td>
        </tr>
        @foreach ($datas as $data)
        <tr>
        <td>{{ $data->id }}</td>
        <td><i><a href="/ujian/{{ $data->id }}}/jumlah_lolos">{{ $data->nama }}</a></i></td>
        <td>{{ $data->count }}</td>
        <td>{{ $data->total_peserta }}</td>
    </tr>
    @endforeach
        </table>
    </div>
</body>
@endsection