<!DOCTYPE html>
<html>
<head>
<title>{{$title}}</title>

<link rel="stylesheet" href="{{url('/assets/library/bootstrap-4.4.1/css/bootstrap.css')}}">
<link rel="stylesheet" href="{{url('/assets/style.css')}}">
</head>
<body>

	<!--## CONTENT ##-->
	<section class="bg-color-0">
          <div class="container">
               <div class="row align-items-center half-screen space">
                    <div class="col-md-4 offset-md-4">
                         <form action="{{url('/login/action')}}" method="post">
                              <input type="hidden" name="_token" value="{{csrf_token()}}">

                              <div class="form-group">
                                   <label>Email</label>
                                   <input type="email" name="email" class="form-control" placeholder="Tulis email disini" required><br>
                              </div>

                              <div class="form-group">
                                   <label>Password</label>
                                   <input type="password" name="password" class="form-control" placeholder="Tulis password disini" required><br>
                              </div>

                              <input type="submit" value="Login" class="btn btn-success btn-block"/>
                         </form>
                    </div>
               </div>
          </div>
     </section>
	
</body>
<script src="{{url('/assets/library/jquery-3.4.1/jquery-3.4.1.js')}}"></script>
<script src="{{url('/assets/library/bootstrap-4.4.1/js/bootstrap.js')}}"></script>
</html>