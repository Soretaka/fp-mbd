@extends('layout.template')

@section('container')
<body>
    <div class="text-white">
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="dataTable" width="50%" cellspacing="0">
                        <thead>
                        <tr>
                        <td>Pelajaran :</td>
                        <td>Bab</td>
                        <td>Pengajar</td>
                        </tr>
                        <thead>
                        @foreach ($pelajaran as $item)
                        <tbody>
                            <tr>
                            <td>- {{ $item->nama }}</td>
                            <td>{{ $item->bab }}</td>
                            <td><a href="/pelajaran/{{ $item->id }}">Lihat Pengajar</a></td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
            </div>
        </div>
</body>
@endsection