@extends('layout.template')

@section('container')
<body>
    <div class="text-white">
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                <!--Metric Card-->
                @foreach($pelajaran as $p)
                <div class="bg-gray-400 border border-gray-800 rounded shadow p-2">
                    <div class="flex flex-row items-center">
                        <div class="flex-shrink pr-4">
                            <div class="rounded p-3 bg-blue-600"><i class="fas fa-server fa-2x fa-fw fa-inverse"></i></div>
                        </div>
                        <div class="flex-2 text-right md:text-center">
                            <h2 class="font-bold uppercase text-black">
                                <a href="/soal/{{ $p->id }}/jumlah_soal">soal {{ $p->nama }} {{ $p->id }}</a>
                            </h2>
                        </div>
                    </div>
                    <div class="flex flex-row items-center">
                        <div class="flex-shrink pr-4">
                            <div class="rounded p-3 bg-blue-600"><i class="fas fa-server fa-2x fa-fw fa-inverse"></i></div>
                        </div>
                        
                        <div class="flex-2 text-right md:text-center">
                            <h2 class="font-bold uppercase text-black">
                                <a href="/{{ $p->id }}/soal">Kerjakan soal {{ $p->nama }} {{ $p->id }}</a>
                            </h2>
                        </div>
                    </div>
                </div>
                @endforeach
                <!--Metric Card-->
                <div class="bg-gray-400 border border-gray-800 rounded shadow p-2">
                    <div class="flex flex-row items-center">
                        <div class="flex-shrink pr-4">
                            <div class="rounded p-3 bg-blue-600"><i class="fas fa-server fa-2x fa-fw fa-inverse"></i></div>
                        </div>
                        <div class="flex-2 text-right md:text-center">
                            <h2 class="font-bold uppercase text-black">
                                <a href="/soal/jumlah_soal">soal per pelajaran</a>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection