<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pembelian</title>
</head>

<body>
    <h2>Data Pembelian</h2>
    @foreach ($post as $data)
        Nama Barang : {{ $data->nama_barang }} <br>
        Nama Suplier : {{ $data->nama_suplier }} <br>
        Quantity : {{ $data->qty }} <br>
        Tanggal Pesan : {{ $data->tgl }} <br>
        <hr>
    @endforeach
</body>

</html>
