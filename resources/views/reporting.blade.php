<!DOCTYPE html>
<html>
<head>
<title>{{$title}}</title>

<link rel="stylesheet" href="{{url('/assets/library/bootstrap-4.4.1/css/bootstrap.css')}}">
<link rel="stylesheet" href="{{url('/assets/style.css')}}">
</head>
<body>
	<header>
		<nav id="nav-menu" class="navbar navbar-expand-md navbar-light bg-light position-static navbar-company">
			<div class="container">
				<a class="navbar-brand" href="{{url('/dashboard')}}">
					<h2>LARACMS</h2>
				</a>
				<button class="navbar-toggler" type="button" data-toggler="collapse" data-target="#navbar-menu">
					<i class="fa fa-bars"></i>
				</button>
				<section id="navbar-menu" class="collapse navbar-collapse">
					<ul class="navbar-nav mr-auto"></ul>
					<ul class="navbar-nav">
						<li class="nav-item"><a class="nav-link" href="{{url('/dashboard')}}">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="{{url('/pages/about')}}">About</a></li>
						<li class="nav-item"><a class="nav-link" href="{{url('/blog')}}">Blog</a></li>
						<li class="nav-item"><a class="nav-link" href="{{url('/upload/form')}}">Produk</a></li>
						<li class="nav-item"><a class="nav-link" href="{{url('/pages/contact')}}">Contact</a></li>
					</ul>
				</section>
			</div>
		</nav>
	</header>
	<section class="bg-color-0">
		<div class="container">
			<div class="row align-items-center half-screen space">
				<div class="container">
					<div class="row">
                        <div class="col-md-12 mb-3">
                            <h4>Daftar Produk</h4>
                        </div>
						@foreach($produk as $p)
						<div class="col-md-12">
                            <div class="row align-items-center mb-3 p-3" style="min-height: 50px; border: 1px solid #2E3D54;">
								<div class="col-md-1"><h4>{{$p->id}}</h4></div>
								<div class="col-md-3">
                                    <img src="{{url($p->foto)}}" height="100">
                                </div>
								<div class="col-md-3"><p class="m-0">{{$p->deskripsi}}</p></div>
								<div class="col-md-2"><p class="m-0">Stok {{$p->stok}}</p></div>
								<div class="col-md-3"><p class="m-0">Rp.{{$p->harga}},00</p></div>
							</div><br>
						</div>
						@endforeach
                        <div class="col-md-12 mt-3 text-center">
                            <a class="btn btn-success" href="{{url('/reporting/preview')}}" target="_blank">Preview Laporan</a>
                            <a class="btn btn-warning" href="{{url('/reporting/print')}}" target="_blank">Cetak Laporan</a>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer class="bg-color-1">
       <div class="container">
           <div class="row space">
               <div class="col-md-4">
                   <h4>Title</h4>
                   <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic quam aspernatur error numquam cupiditate eligendi aliquid quisquam quaerat non rem quod accusamus amet alias ut dicta molestias, provident nemo incidunt.</p>
               </div>
               <div class="col-md-4">
                   <h4>Title</h4>
                   <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic quam aspernatur error numquam cupiditate eligendi aliquid quisquam quaerat non rem quod accusamus amet alias ut dicta molestias, provident nemo incidunt.</p>
               </div>
               <div class="col-md-4">
                   <h4>Title</h4>
                   <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic quam aspernatur error numquam cupiditate eligendi aliquid quisquam quaerat non rem quod accusamus amet alias ut dicta molestias, provident nemo incidunt.</p>
               </div>
               <div class="col-md-12 pt-4">
                   <p class="copyright">
                       Copyright &copy; 2020 Corporate. All Right Reserved. Develop by Dika Fajar
                   </p>
               </div>
           </div>
       </div>
   </footer>
</body>
<script src="{{url('/assets/library/jquery-3.4.1/jquery-3.4.1.js')}}"></script>
<script src="{{url('/assets/library/bootstrap-4.4.1/js/bootstrap.js')}}"></script>
</html>