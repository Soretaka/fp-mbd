@extends('layout.template')

@section('container')
<body>
    <div class="text-white">
        <div>Jumlah soal yang ada untuk pelajaran {{ $pelajaran->nama }}: {{ $count }}</div>  
        <table style="border:1px solid lightgray;">
            <thead>
            <tr>
            <th> no </th>
            <th> deskripsi </th>
            <th> jawaban </th>
            <th> nama ujian </th>
            <th> nama pembuat soal </th>
            <th> nama pelajaran </th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach ($soals as $soal)
            <th> {{ $i }}</th>
            <th> {{ $soal->deskripsi }} </th>
            <th> {{ $soal->jawaban }} </th>
            <th> {{ $soal->ujian->nama }} </th>
            <th> {{ $soal->pengajar->nama }} </th>
            <th> {{ $soal->pelajaran->nama }} </th>
            </tr>
            @php
                $i+=1;
            @endphp
            @endforeach
        </tbody>
        </table>
    </div>
</body>
@endsection