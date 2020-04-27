<!DOCTYPE html>
<html>
<head>
<title>{{$title}}</title>

<link rel="stylesheet" href="{{url('/assets/library/bootstrap-4.4.1/css/bootstrap.css')}}">
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
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="{{url('/')}}">Home</a></li> 
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
			<div class="row align-items-center full-screen space">
				<div class="col-md-7">
					<h2>{{$page->title}}</h2>
					<p>{{$page->content}}</p>
				</div>
				<div class="col-md-5">
					<div class="row">
						<div class="col-md-12">
							<h4>News Update</h4>
							<hr>
						</div>
						@foreach($blog as $b)
						<div class="col-md-12 mb-5">
							<h5>{{$b->title}}</h5>
							<p>{{substr($b->content, 0, 100)}}...</p>
							<a class="btn btn-warning" href="{{url('/blog/'.$b->id)}}">Readmore</a>
						</div>
						@endforeach
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

<!-- <ul>
<li><a href="{{url('/')}}">Home</a></li>
<li><a href="{{url('/pages/about')}}">About</a></li>
<li><a href="{{url('/blog')}}"></a>Blog</li>
<li><a href="{{url('/pages/contact')}}"></a>Contact</li>
</ul>

<h2>{{$page->title}}</h2>
<hr>
<p>{{$page->content}}</p> -->
</body>
<script src="{{url('/assets/library/jquery-3.4.1/jquery-3.4.1.js')}}"></script>
<script src="{{url('/assets/library/bootstrap-4.4.1/js/bootstrap.js')}}"></script>
</html>