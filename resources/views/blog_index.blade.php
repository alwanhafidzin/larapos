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
                <div class="col-md-10">
                <h4><a class="btn btn-primary" href="{{url('/blog/add/post')}}"><i class="fa fa-plus"></i>Add Post</a> Blog</h4><br>
                </div>
				<div class="col-md-10">
                    @foreach($blog as $b)
                        <h2>{{$b->title}}</h2>
                        <hr>
                        <p>{{$b->content}}</p>
                        <a class="btn btn-success" href="{{url('/blog/'.$b->id)}}">Readmore..</a>
                        <a class="btn btn-warning" href="{{url('/blog/edit/'.$b->id)}}"><i class="fa fa-pencil-alt"></i>Edit</a>
                        <a class="btn btn-danger" href="{{url('/blog/delete/'.$b->id)}}"><i class="fa fa-trash"></i>Delete</a><br><br><br>
                    @endforeach
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