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
                <form action="{{ route('store-data-nilai-ujian') }}" method="POST">
                <div class="card ml-3 mb-3" style="width:1000px">
                    @csrf
                    <div>
                        <div class ="text-white">nama peserta</div>
                        <div class="text-black">
                        <select id="name" class="block mt-1 w-full" type="text" name="name" required autofocus>
                            <option value="">nama pelajar </option>
                            @foreach ($pelajars as $ujian)
                            <option value = "{{ $ujian->nama }}">{{ $ujian->nama }}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class ="text-white">nama ujian </div>
                        <div class="text-black">
                            {{-- <select class="form-control @error('kategori_id') is-invalid @enderror" id="kategori_id" name="kategori_id" autofocus> --}}
                            <select id="name_ujian" class="block mt-1 w-full" type="text" name="name_ujian" required autofocus>
                            <option value="">nama ujian </option>
                            @foreach ($ujians as $ujian)
                            <option value = "{{ $ujian->nama }}">{{ $ujian->nama }}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class ="text-white">nilai ujian </div>
                        <div class="text-black">
                                <input id="nilai_ujian" class="block mt-1 w-full" type="text" name="nilai_ujian" :value="old('nilai_ujian')" required autofocus />
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