<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data suplier</title>
</head>

<body>
    <h2>Data Suplier</h2>
    @foreach ($post as $data)
        Nama : {{ $data->nama }} <br>
        Alamat : {{ $data->alamat }} <br>
        Kode Pos : {{ $data->kode_pos }} <br>
        Kota : {{ $data->kota }} <br>
        <hr>
    @endforeach
</body>

</html>
