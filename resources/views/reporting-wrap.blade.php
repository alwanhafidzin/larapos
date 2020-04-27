<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
</head>
<body>
    <table class="table" style="width:100%;">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Stok</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody style="border-top:1px solid black">
            @foreach($produk as $p)
            <tr>
                <td align=center>{{$p->id}}</td>
                <td>{{$p->deskripsi}}</td>
                <td align=center>{{$p->stok}}</td>
                <td align=center>{{$p->harga}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>