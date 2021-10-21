<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>Data Barang</h2>
        Nama : {{ $query->nama }} <br>
        Varian : {{ $query->varian }} <br>
        Harga Beli : {{ $query->harga_beli }} <br>
        Harga Jual : {{ $query->harga_jual }} <br>
        <hr>
</body>

</html>
