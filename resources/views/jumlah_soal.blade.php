@extends('layout.template')

@section('container')
<body>
    <div class="text-white">
        <div>Jumlah soal yang dibuat oleh pengajar {{ $pengajar->nama }}: {{ $count }}</div>  
    </div>
</body>
@endsection