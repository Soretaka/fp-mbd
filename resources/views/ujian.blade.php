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
            $i=1;
        @endphp
    <div class="card shadow mb-4">
        <div class="card-body container">
            <div class="row g-5">
        @foreach ($soals as $soal)
        <div class="card ml-3 mb-3" style="width:1920px">
        <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
            <div class="ml-3">{{ $i }}. {{ $soal->deskripsi }}</div>
            @csrf
             <div class="form-group">
               <label for="jawaban" class="ml-3">Jawaban</label> <br>
               {{-- <input type="radio" class="lmc-choice-input" id="lmc-choice-input-{{ $choice->id }}" name="lmc-question-input-{{ $question->id }}" value="{{ $choice->id }}" {{ ($selectedChoice != null && $choice->id == $selectedChoice->id) ? 'checked' : '' }}>  --}}
               <input type="radio" class="lmc-choice-input ml-3" id="a" name="a" class="form-control" required=""> {{ $soal->a }} <br>
               <input type="radio" class="lmc-choice-input ml-3" id="b" name="b" class="form-control" required=""> {{ $soal->b }} <br>
               <input type="radio" class="lmc-choice-input ml-3" id="c" name="c" class="form-control" required=""> {{ $soal->c }} <br>
               <input type="radio" class="lmc-choice-input ml-3" id="d" name="d" class="form-control" required=""> {{ $soal->d }}
             </div>
             <button type="submit" class="btn btn-primary">Submit</button>
           </form>    
           <br>
           @php
               $i+=1;
           @endphp
        </div>
        @endforeach
    </div>
</div>
</div>
  </div>
</div>  
</body>
</html>