<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="{{url('/assets/library/bootstrap-4.4.1/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('/assets/library/fontawesome/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{url('/assets/library/fontawesome/css/solid.css')}}">
    <link rel="stylesheet" href="{{url('/assets/style.css')}}">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-light bg-light position-static navbar-company">
            <div class="container">
                <a class="navbar-brand" href="{{url('/')}}">LARACMS</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/shopping')}}">Home <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{url('/shopping/cart')}}" class="nav-link">
                                <span class="badge badge-danger" style="position: absolute; margin-left: -15px; margin-top: -15px">{{$cart->jumlah_keranjang}}</span>
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="bg-color-0">
        <div class="container">
            <div class="row align-items-center half-screen space">
                <div class="container">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h4 class="mb-3 text-capitalize">Nota {{$nota->jenis_faktur}}</h4>
                            <table>
                                <tr>
                                    <th>Nomor</th>
                                    <td>{{$nota->id}}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal</th>
                                    <td>{{$tanggal}}</td>
                                </tr>
                                <tr>
                                    <th>Customer</th>
                                    <td>{{session('s_id')}} | {{session('s_nama')}}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-mb-6 text-right">
                            <img src="{{url('/assets/image/logo.png')}}" width="100">
                        </div>
                    </div>

                    <hr class="m-0">

                    <div class="row mt-4">
                        <div class="col-md-12">
                            <table style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nama Produk</th>
                                        <th>Harga</th>
                                        <th class="text-center">Jumlah</th>
                                        <th class="text-center">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($nota->cart as $c)
                                    <tr>
                                        <td>{{$c->produk_id}}</td>
                                        <td>{{$c->nama_produk}}</td>
                                        <td>Rp.{{$c->harga_satuan}}</td>
                                        <td class="text-center">
                                            <a href="{{url('/shopping/cart/minus?produkId=' . $c->produk_id)}}" class="btn btn-danger btn-sm float-left fa fa-minus"></a>
                                            {{$c->kuantitas}}
                                            <a href="{{url('/shopping/cart/plus?produkId=' . $c->produk_id)}}" class="btn btn-success btn-sm float-right fa fa-plus"></a>
                                        </td>
                                        <td class="text-center">{{$c->subtotal}}</td>
                                    </tr>
                                    @endforeach
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
                            <a class="btn btn-warning float-right" href="{{url('/shopping/cart/checkout/' . $nota->id)}}">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>