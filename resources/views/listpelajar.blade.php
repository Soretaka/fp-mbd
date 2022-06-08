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
                        <td></td>
                        <td>Lihat dashboard</td>
                    
                        </tr>
                        <thead>
                            <br>
                        @foreach ($pelajar as $p)
                        <tbody>
                            <tr>
                            <td><a href="lihat_dashboard/{{ $p->id }}">
                                <i class="fas fa-users fa-fw fa-inverse"></i></a>
                            </td>
                            <td>
                                <a href="lihat_dashboard/{{ $p->id }}">{{ $p->nama }}</a></td>
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