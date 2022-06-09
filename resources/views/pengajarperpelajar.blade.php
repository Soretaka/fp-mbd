@extends('layout.template')

@section('container')
<body>
    <div class="text-white">
    @foreach ($subject as $item)
        <div>
            Pelajaran : {{ $item['nama'] }}
            <br>
            Bab : {{ $item['bab'] }}
        </div>
        <div>
            Pengajar :
            <br>
            @foreach ($item->pengajar_pelajar as $pengajar)
                {{ $pengajar->pengajar->nama }}
                <br>
            @endforeach
        </div>
    @endforeach
</body>
@endsection