@extends('layout.template')

@section('container')
<body>
  <div class="text-white">
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
    <div class="card shadow mb-4">
        selamat nilaimu {{number_format($nilai,0) }}
    </div>
</div>
</div>  
</body>
@endsection