<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($subject as $item)
        <div>
            Pelajaran : {{ $item['nama'] }}
            <br>
            Bab : {{ $item['bab'] }}
        </div>
        <div>
            Pengajar :
            <br>
            @foreach ($item->pengajar_pelajar as $pengajar)
                {{ $pengajar->pengajar->nama }}
                <br>
            @endforeach
        </div>
    @endforeach
</body>
</html>