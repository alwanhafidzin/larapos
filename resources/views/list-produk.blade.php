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
                            <a class="nav-link" href="{{url('/dashboard')}}">Home <span class="sr-only">(current)</span></a>
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
                <div class="col-md-12">
                    <h4>KATALOG PRODUK</h4>
                </div>

                @foreach($produk as $p)
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <span class="badge badge-danger" style="position: absolute; border: 2px solid #ffffff; margin-left: -20px;">
                                    {{$p->kategori}}
                                </span>
                                <img src="{{url($p->thumbnail)}}" height="100">
                                <h4 class="card-title">{{$p->nama}}</h4>
                                <h5>Rp {{$p->harga}}</h5>
                                <h6>Stok <span class="badge btn-warning">{{$p->stok}}</span></h6>
                                <a href="{{url('/shopping/cart?produkId=' . $p->id)}}" class="btn btn-success">Beli</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</body>
</html>