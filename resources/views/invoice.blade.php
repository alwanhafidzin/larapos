<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="{{url('/assets/library/bootstrap-4.4.1/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{/assets/style.css}}">
</head>
<body>
    <section class="bg-color-0">
        <div class="container">
            <div class="row align-items-center half-screen space">
                <div class="container">

                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h4 class="mb-3">Nota Penjualan</h4>
                            <table>
                                <tr>
                                    <th>Nomor</th>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>01/12/2020</th>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6 text-right">
                            <img src="{{url('/assets/image/logo.png')}}" width="100">
                        </div>
                    </div>

                    <hr class="m-0">

                    <div class="row mt-4">
                        <div class="col-md-12">
                            <table style="width: 100%">
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
                            <p>Pembayaran jatuh tempo dalam 30 hari sejak tanggal faktur.</p>
                            <a class="btn btn-warning float-right" href="{{url('/invoice/preview')}}" target="_blank">Preview</a>
                            <a class="btn btn-warning float-right mr-3" href="{{url('/invoice/print')}}" target="_blank">Cetak</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>