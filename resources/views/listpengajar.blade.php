@extends('layout.template')

@section('container')
<body>
    <div class="text-white">
    <table style="text-indent: 50">
        <tr>
        <td>ID</td>
        <td>Nama Pengajar</td>
        
        </tr>
        @foreach ($pengajar as $p)
        <tr>
        <td>{{ $p->id }}</td>
        <td><a href="/pengajar/{{ $p->id }}/jumlah_soal">{{ $p->nama }}</a> </td>
    </tr>
    @endforeach
        </table>
</body>
@endsection