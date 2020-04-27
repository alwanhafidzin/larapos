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
			<a class="navbar-brand" href="{{url('/blog')}}">
				<h2>LARACMS</h2>
			</a>
			<button class="navbar-toggler" type="button" data-toggler="collapse" data-target="#navbar-menu">
				<i class="fa fa-bars"></i>
			</button>
			<section id="navbar-menu" class="collapse navbar-collapse">
				<ul class="navbar-nav mr-auto"></ul>
				<ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link" href="{{url('/')}}">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="{{url('/pages/about')}}">About</a></li>
					<li class="nav-item"><a class="nav-link" href="{{url('/blog')}}">Blog</a></li>
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
					<form action="{{url('/blog/add/post/save')}}" method="post">
						<input type="hidden" name="_token" value="{{csrf_token()}}">

						<div class="form-group">
							<label>Id</label>
							<input type="text" name="id" class="form-control" placeholder="Tulis id disini"><br>
						</div>
						<div class="form-group">
							<label>Title</label>
							<input type="text" name="title" class="form-control" placeholder="Tulis judul disini"><br>
						</div>
						<div class="form-group">
							<label>Content</label>
							<textarea rows="5" name="content" class="form-control" placeholder="Tulis konten disini"></textarea><br>
						</div>

						<input type="submit" value="Kirim" class="btn btn-success">
					</form>
				</div>
			</div>
		</div>
	</section>
	<footer class="bg-color-1">
		<div class="container">
			<div class="row space">
				<div col-md-4>
					<h4>Title</h4>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
				</div>
				<div col-md-4>
					<h4>Title</h4>
					<p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
				</div>
				<div col-md-4>
					<h4>Title</h4>
					<p>but also the leap into electronic typesetting, remaining essentially unchanged.  It was popularised in the 1960s with the release of Letraset sheets containing</p>
				</div>
				<div col-md-4>
					<h4>Title</h4>
					<p>Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
				<div col-md-12 pt-4>
					<h4>Title</h4>
					<p class="copyright">Copyright @ 2020 Corporate. All Right Reserved.Develop by Dika Fajar</p>
				</div>
			</div>
		</div>
	</footer>
</body>
<script src="{{url('/assets/library/jquery-3.4.1/jquery-3.4.1.js')}}"></script>
<script src="{{url('/assets/library/bootstrap-4.4.1/js/bootstrap.js')}}"></script>
</html>