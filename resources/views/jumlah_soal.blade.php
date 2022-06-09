@extends('layout.template')

@section('container')
<body>
    <div class="text-white">
        <div>Jumlah soal yang dibuat oleh pengajar {{ $pengajar->nama }}: {{ $count }}</div>  
    </div>
    <div class="text-white">
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="dataTable" width="50%" cellspacing="0">
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
                </div>
            </div>
            </div>
        </div>
</body>
@endsection