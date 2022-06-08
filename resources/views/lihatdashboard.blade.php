@extends('layout.template')

@section('container')
<body>
    <div class="text-white">
    <div class="identity">
        <div>Nama&emsp;&emsp;&emsp;&ensp;&nbsp;: {{ $pelajar['nama'] }}</div>  
        <div>Tanggal Lahir&nbsp;: {{ $pelajar['tanggal_lahir'] }}</div>
        <div>Tempat Lahir&ensp;: {{ $pelajar['tempat_lahir'] }}</div>
        <div>Kelas&emsp;&emsp;&emsp;&ensp;&nbsp;: {{ $pelajar['kelas'] }}</div>
    </div>
    <div class="history">
        <br>
        <div>History Ujian</div>
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="dataTable" width="50%" cellspacing="0">
                        <thead>
                        <tr>
                        <td>ID</td>
                        <td>Nama</td>
                        <td>Nilai</td>
                        <td>Status</td>
                        </tr>
                        </thead>
                        @foreach ($ujian_history as $ujian)
                        <tbody>
                        <tr>
                        <td>{{ $ujian->id }}</td>
                        <td>{{ $ujian->nama }}</td>
                        <td>{{ $ujian->nilai }}</td>
                        <td>{{ $ujian->status }}</td>
                        </tr>
                    </tbody>
            @endforeach
        </table>
        <br>
        <td>Nilai total ujian = {{ $total_ujian }}</td>
        {{-- <div class="bg-gray-400 border border-gray-800 rounded shadow p-2">
            <div class="flex flex-row items-center">
                <div class="flex-shrink pr-4">
                    <div class="rounded p-3 bg-blue-600"><i class="fas fa-server fa-2x fa-fw fa-inverse"></i></div>
                </div>
                <div class="flex-2 text-right md:text-center">
                    <h2 class="font-bold uppercase text-black">
                        <a href="/ujian{{ $pelajar->id }}">Kerjakan ujian</a> 
                    </h2>
                </div>
            </div>
        </div> --}}
        
    </div>
</div>
</div>
</div>
</body>
@endsection