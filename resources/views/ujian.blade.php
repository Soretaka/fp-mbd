<!DOCTYPE html>
<html>
<head>
    <title>soal</title>
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
        @php
            $i=0;
        @endphp
    <div class="card shadow mb-4">
        <div class="card-body container">
            <div class="row g-5">
                <form action="{{ route('store-data-jawaban') }}" method="POST">
                @foreach ($soals as $soal)
                <div class="card ml-3 mb-3" style="width:1000px">
                    <div class="ml-3">{{ $i+1 }}. {{ $soal->deskripsi }}</div>
                    @csrf
                    <div class="form-group">
                        <label for="jawaban" class="ml-3">Jawaban</label> <br>
               {{-- <input type="radio" class="lmc-choice-input" id="lmc-choice-input-{{ $choice->id }}" name="lmc-question-input-{{ $question->id }}" value="{{ $choice->id }}" {{ ($selectedChoice != null && $choice->id == $selectedChoice->id) ? 'checked' : '' }}>  --}}
                            <tr>
                            <td></td>
                            <td><input name="ans[{{ $i }}]" type="radio" value="a" checked> A. {{ $soal->a }}</td><br>
                        </tr>
                        <tr>
                            <td></td>
                            <td> <input name="ans[{{ $i }}]" type="radio" value="b"> B. {{ $soal->b }}</td><br>
                        </tr>
                        <tr>
                            <td></td>
                            <td> <input name="ans[{{ $i }}]" type="radio" value="c"> C. {{ $soal->c }}</td><br>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input name="ans[{{ $i }}]" type="radio" value="d"> D. {{ $soal->d }}</td><br>
                        </tr>
                        </div>    
                        <br>
                        @php
                            $i+=1;
                        @endphp
                    </div>
                    @endforeach
                    {{-- {{ dd($ujian->id) }} --}}
                    {{-- {{ dd($pelajar) }} --}}
                    {{-- {{ dd($pelajar_ujian->id) }} --}}
                    <input type="hidden" name="pelajar_ujian" value="{{ $pelajar_ujian->id }}">
                    <input type="hidden" name="pelajar_id" value="{{ $pelajar_ujian->pelajar_id }}">
                <button type="submit" class="btn btn-primary" name="ujian_id" value="{{ $pelajar_ujian->ujian_id }}" >Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>  
</body>
</html>