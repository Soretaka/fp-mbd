<!DOCTYPE html>
<html>
<head>
    <title>soal</title>x`
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
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
</html>