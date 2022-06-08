@extends('layout.template')

@section('container')
<body>
    <div class="text-white">
        <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="75%" cellspacing="0">
                    <thead>
                    <tr>
                    <td>ID</td>
                    <td>Nama Ujian</td>
                    <td>Jumlah soal ujian</td>
                    <td>Total Peserta</td>
                    </tr>
                    </thead>
                    @foreach ($datas as $data)
                    <tbody>
                    <tr>
                    <td>{{ $data->id }}</td>
                    <td><i>{{ $data->nama }}</i></td>
                    <td>{{ $data->count }}</td>
                    <td>{{ $data->total_peserta }}</td>
                    </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
        </div>
    </div>
    
    @foreach($datas as $data)
    <div class="flex flex-wrap">
        <div class="w-full md:w-1/2 xl:w-1/3 p-3">
            <!--Metric Card-->
            <div class="bg-gray-400 border border-gray-800 rounded shadow p-2">
                <div class="flex flex-row items-center">
                    <div class="flex-shrink pr-4">
                        <div class="rounded p-3 bg-blue-600"><i class="fas fa-server fa-2x fa-fw fa-inverse"></i></div>
                    </div>
                    <div class="flex-2 text-right md:text-center">
                        <h2 class="font-bold uppercase text-black">
                            <a href="/listpelajar"><a href="/ujian/{{ $data->id }}">Kerjakan Ujian {{ $data->nama }}</a> 
                        </h2>
                    </div>
                </div>
            </div>
            <!--/Metric Card-->
        </div>
        <div class="w-full md:w-1/2 xl:w-1/3 p-3">
            <!--Metric Card-->
            <div class="bg-gray-400 border border-gray-800 rounded shadow p-2">
                <div class="flex flex-row items-center">
                    <div class="flex-shrink pr-4">
                        <div class="rounded p-3 bg-indigo-600"><i class="fas fa-tasks fa-2x fa-fw fa-inverse"></i></div>
                    </div>
                    <div class="flex-2 text-right md:text-center">
                        <h2 class="font-bold uppercase text-black">
                            <a href="/listpelajar"><a href="/ujian/{{ $data->id }}}/jumlah_lolos">Jumlah lolos ujian {{ $data->nama }}</a> 
                        </h2>
                    </div>
                </div>
            </div>
            <!--/Metric Card-->
        </div>
        <div class="w-full md:w-1/2 xl:w-1/3 p-3">
            <!--Metric Card-->
            <div class="bg-gray-400 border border-gray-800 rounded shadow p-2">
                <div class="flex flex-row items-center">
                    <div class="flex-shrink pr-4">
                        <div class="rounded p-3 bg-red-600"><i class="fas fa-inbox fa-2x fa-fw fa-inverse"></i></div>
                    </div>
                    <div class="flex-2 text-right md:text-center">
                        <h2 class="font-bold uppercase text-black">
                            <a href="/rank/{{ $data->id }}">Rangking ujian {{ $data->nama }}</a> 
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</body>
@endsection