@extends('layout.template')

@section('container')
<body>
    <div class="text-white">
    @foreach ($datas as $data)
        @php
            $i=1;
        @endphp
        <div> soal pelajaran {{ $data[5]->nama}} </div>
        @foreach ($data as $soal)
        <div>{{ $i }} . {{ $soal->deskripsi }}</div>
        @php
            $i+=1;
        @endphp
        @endforeach
        <br>
    @endforeach
</body>
@endsection