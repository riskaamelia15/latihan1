<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pesanan</title>
</head>

<body>
    <h2>Data Pesanan</h2>
    @foreach ($post as $data)
        Nama Pembeli : {{ $data->nama_pembeli }} <br>
        Nama Barang : {{ $data->nama_barang }} <br>
        Quantity : {{ $data->qty }} <br>
        Tanggal Pesan : {{ $data->tgl_pesan }} <br>
        <hr>
    @endforeach
</body>

</html>
