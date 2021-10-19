<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pembeli</title>
</head>

<body>
    <h2>Data Pembeli</h2>
    @foreach ($post as $data)
        Nama: {{ $data->nama }} <br>
        Jenis Kelamin : {{ $data->jns_kelamin }} <br>
        Kode Pos : {{ $data->kode_pos }} <br>
        Kota : {{ $data->kota }} <br>
        Tanggal Lahir : {{ $data->tgl_lahir }}
        <hr>
    @endforeach
</body>

</html>
