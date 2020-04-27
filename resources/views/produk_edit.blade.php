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
				<div class="col-md-12">
					<h4>Form Edit Produk</h4>
					<br>
					<hr>
					<form action="{{url('/produk/edit/save')}}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="id" value="{{$produk->id}}" class="form-control" placeholder="ID">

                        <div class="form-group">
                            <label class="font-weight-bold">Foto Produk</label><br>
							<img src="{{url($produk->foto)}}" height="50px">
                            <input type="file" name="file">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Deskripsi Produk</label><br>
                            <textarea rows="5" name="deskripsi" class="form-control" placeholder="Tulis Deskripsi">
							{{$produk->deskripsi}}</textarea><br>
                        </div>

                        <input type="submit" value="Update" class="btn btn-primary">
                    </form>
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