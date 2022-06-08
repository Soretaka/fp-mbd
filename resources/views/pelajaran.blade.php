@extends('layout.template')

@section('container')
<body>
    <div class="text-white">
    <div>
        Pelajaran :
        @foreach ($pelajaran as $item)
            <br>
            - {{ $item->nama }}
        @endforeach
    </div>
</body>
@endsection