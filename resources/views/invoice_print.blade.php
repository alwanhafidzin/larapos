<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="{{public_path()}}/assets/library/bootstrap-4.4.1/css/bootstrap.css">
</head>
<body>
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-6 text-left">
                <h4>Nota Penjualan</h4>
                <table style="...">
                    <tr class="m-0 p-0">
                        <th>Nomor</th>
                        <td>1</td>
                    </tr>
                    <tr class="m-0 p-0">
                        <th>Tanggal</th>
                        <th>01/12/2020</th>
                    </tr>
                </table>
            </div>
            <div class="col-md-6">
                <img src="{{public_path()}}/assets/image/logo.png" width="100" style="position: fixed; right: 0;">
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <hr class="mb-3 mt-5">
                <table style="...">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th class="text-center">Jumlah</th>
                            <th class="text-center">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Taro</td>
                            <td>Rp 5000.00</td>
                            <td class="text-center">2</td>
                            <td class="text-center">Rp 10000.00</td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-right pr-2" style="background: #efefef">Sub Total</td>
                            <td class="text-right" style="...">Rp. 0.00</td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-right pr-2">PPN 10%</td>
                            <td class="text-right">Rp. 0.00</td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-right pr-2">Total Tagihan</td>
                            <td class="text-right">Rp. 0.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12">
                <small>Pembayaran jatuh tempo dalam 30 hari sejak tanggal faktur.</small>
            </div>
        </div>

    </div>
</body>
</html>