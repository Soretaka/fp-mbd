@extends('layout.template')

@section('container')
<body>
    <div class="text-white">
        <div class="card shadow mb-4">
            <div class="card-body">
                <div>Rangking: {{ $ujian[0]->nama}}</div>
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="dataTable" width="50%" cellspacing="0">
                        <thead>
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
                </div>
            </div>
            </div>
        {{-- <td>Nilai total ujian = {{ $total_ujian }}</td> --}}
    </div>

</body>
@endsection
