@extends('layout.template')

@section('container')
<body>
    <div class="text-white">
        <div>Jumlah soal yang dibuat oleh pengajar {{ $pengajar->nama }}: {{ $count }}</div>  
    </div>
        <table border="1">
            <thead>
            <tr>
                <th>No.</th>
                <th>Deskripsi Soal</th>
            </tr>
            </thead>
            @php
            $it = 1;
            @endphp
            <tbody>
            @foreach($datas as $data)
            <tr>
                <td>{{ $it }}</td>
                <td>{{ $data->deskripsi }}</td>
            </tr>
            @php
            $it += 1;
            @endphp
            @endforeach
            </tbody>
        </table>
</body>
@endsection