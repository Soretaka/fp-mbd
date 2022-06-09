@extends('layout.template')

@section('container')
<body>
    <div class="text-white">
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                        <td>ID</td>
                        <td>Nama Pengajar</td>
                        <td>Jumlah soal</td>
                        </tr>
                        @foreach ($pengajar as $p)
                        <tr>
                            <td>{{ $p->id }}</td>
                            <td>{{ $p->nama }}</td>
                            <td><a href="/pengajar/{{ $p->id }}/jumlah_soal"><i class="fas fa-inbox fa-fw fa-inverse"></i></a></td>
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