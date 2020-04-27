<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>

    <link rel="stylesheet" href="{{url('/assets/library/bootstrap-4.4.1/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('/assets/library/code/css/highcharts.css')}}">
    <link rel="stylesheet" href="{{url('/assets/style.css')}}">
</head>
<body>
    <header>
        <nav id="nav_menu" class="navbar navbar-expand-md navbar-light bg-light position-static navbar-company">
            <div class="container">
                <a class="navbar-brand" href="{{url('/')}}">
                    <h2>LARACMS</h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <section id="navbar-menu" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto"></ul>
                    {!! $nav_menu !!}
                    <!-- <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="{{url('/')}}">Home</a></li> 
                        <li class="nav-item"><a class="nav-link" href="{{url('/pages/about')}}">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/blog')}}">Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/upload/form')}}">Produk</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/shopping')}}">Shop</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/pages/contact')}}">Contact</a></li>
                    </ul> -->
                </section>
            </div>
        </nav>
    </header> 

<section class="bg-color-0">
    <div class="container">
		<div class="row align-items-center half-screen space">
			<div class="col-md-4 offset-md-4">
				<h4>ID         : {{$session['id']}}</h4>
				<h4>NAMA       : {{$session['nama']}}</h4>
				<h4>STATUS     : {{$session['status']}}</h4>
				<h4>ROLE      : {{$session['role']}}</h4>
				<a href="{{url('/sign-out')}}" class="btn btn-warning">Sign Out</a>
			</div>

			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Laporan Pendapatan
					</div>
					<div class="card-body">
						<div id="grafik-pendapatan" style="height: 400px;"></div>
					</div>
				</div>
			</div>
    
		</div>
	</div>
</section>

   <script src="{{url('/assets/library/jquery-3.4.1/jquery.js')}}"></script>
   <script src="{{url('/assets/library/bootstrap-4.4.1/js/bootstrap.js')}}"></script>
   <script src="{{url('/assets/library/code/highcharts.js')}}"></script>
   <script src="{{url('/assets/app.js')}}"></script>
</body>
</html>