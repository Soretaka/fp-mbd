@extends('layout.template')

@section('container')
<body>
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
    <div class="card shadow mb-4">
        <div class="card-body container">
            <div class="row g-5">
                <form action="{{ route('store-data-ujian') }}" method="POST">
                <div class="card ml-3 mb-3" style="width:1000px">
                    @csrf
                    <div>
                        <div class ="text-white">nama ujian </div>
                        <div class="text-black">
                            <input id="name_ujian" class="block mt-1 w-full" type="text" name="name_ujian" required autofocus>
                        </div>
                        <div class ="text-white">pelajaran</div>
                        <div class="text-black">
                            <select id="id_pelajaran" class="block mt-1 w-full" type="text" name="id_pelajaran" required autofocus>
                                <option value="">pelajaran </option>
                                @foreach ($pelajarans as $ujian)
                                <option value = "{{ $ujian->id }}">{{ $ujian->nama }} - bab {{ $ujian->bab }}</option>
                                @endforeach
                                </select>
                            </div>
                        <div class ="text-white">kkm </div>
                        <div class="text-black">
                            <input id="kkm" class="block mt-1 w-full" type="text" name="kkm" required autofocus>
                        </div>
                        <div class="test-white">tanggal ujian </div>
                        <div class="text-black">
                            <input id="tanggal" class="block mt-1 w-full" type="date" name="tanggal" required autofocus>
                        </div>
                        <div class ="text-white">durasi </div>
                        <div class="text-black">
                            <input id="durasi" class="block mt-1 w-full" type="text" name="durasi" required autofocus>
                        </div>                        
                    </div>
                <button type="submit" class="btn btn-primary float-right text-white" >Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
@endsection