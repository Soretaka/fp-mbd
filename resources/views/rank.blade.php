@extends('layout.template')

@section('container')
<body>
    <div class="text-white">
    <div class="card-body container">
        <div>Rangking: {{ $ujian[0]->nama}}</div>
        <table style="text-indent: 50">
            <tr>
            <td>Rank</td>
            <td>Pelajar_id</td>
            <td>Nama Pelajar</td>
            <td>Ujian_id</td>
            <td>Nilai</td>
            </tr>
            @php
                $i=1;
            @endphp
            @foreach ($pelajar as $p)
            <tr>
            <td>{{ $i }}</td>
            <td>{{ $p->pelajar_id }}</td>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->ujian_id }}</td>
            <td>{{ $p->nilai }}</td>
            </tr>
            @php
                $i+=1;
            @endphp
            @endforeach
        </table>
        <br>
        {{-- <td>Nilai total ujian = {{ $total_ujian }}</td> --}}
    </div>

</body>
<<<<<<< HEAD
@endsection
=======
</html>
>>>>>>> 0dec4677d7eec19c73b2b81202f7c25f62c35456
