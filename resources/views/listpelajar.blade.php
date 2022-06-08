@extends('layout.template')

@section('container')
<body>
    <div class="text-white">
    <table style="text-indent: 50">
        <tr>
        <td>Lihat dashboard</td>
    
        </tr>
        @foreach ($pelajar as $p)
        <tr>
        <td><i class="bi bi-display"></i><a href="lihat_dashboard/{{ $p->id }}"> dashboard {{ $p->nama }}</a></td>
    </tr>
    @endforeach
        </table>
</body>
@endsection