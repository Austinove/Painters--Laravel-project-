    @extends('layouts.app')
    @section('content')

    
    
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('/storage/images/paint.jpg')" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
          <div class="col-lg-8 ftco-animate">
          	<div class="text w-100 text-center mb-md-5 pb-md-5">
	            <h1 class="mb-4">Fast &amp; Easy Way To Paint A House</h1>
	            <p style="font-size: 18px;">A small part of paint on your house makes it beautifull, Try find a painter to color your house </p>
            </div>
          </div>
        </div>
      </div>
    </div>

     <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-12	featured-top">
    				<div class="row no-gutters">
	  					<div class="col-md-5 d-flex align-items-center">
	  						<form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" class="request-form ftco-animate bg-primary">
                                  <h2>Register As Painter</h2>
                                  {{ csrf_field() }}
			    				<div class="form-group">
			    					<label for="firstName" class="label">First Name*</label>
                                    <input type="text" id="firstname" name="firstname" value="{{ old('firstname') }}"  class="firstName form-control @error('fistname') is-invalid @enderror" placeholder="First Name" autocomplete="off">
                                    @error('firstname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
			    				</div>
			    				<div class="form-group">
			    					<label for="secondName" class="label">Second Name*</label>
                                    <input type="text" id="secondname" name="secondname" value="{{ old('secondname') }}" class="secondName form-control @error('secondname') is-invalid @enderror" placeholder="Second Name" autocomplete="off">
                                    @error('secondname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    
                                </div>
			    				<div class="d-flex">
			    					<div class="form-group mr-2">
                                        <label for="profilePic" class="label">Profile Picture</label>
                                        <div class="custom-file mb-3">
                                            <input type="file" id="image" class="custom-file-input @error('image') is-invalid @enderror" id="customFile" name="image">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group ml-2">
                                        <label for="" class="label">Gender</label>
                                        <select name="gender" id="gender" class="custom-select mb-3 @error('gender') is-invalid @enderror">
                                            <option value="">Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                        @error('gender')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
			    					<label for="email" class="label">Your Email*</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
			    				</div>
                                <div class="d-flex">
			    					<div class="form-group mr-2">
                                        <label for="password" class="label">Password*</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    <div class="form-group ml-2">
                                        <label for="confirmPassword" class="label">Confirm Password*</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        <input type="hidden" name="role" value="P">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="token" value={{csrf_token()}}/>
                                    <button type="submit" class="btn btn-secondary py-3 px-4">Register</button>
                                </div>
			    			</form>
                        </div>
              
                        <div class="col-md-5 d-flex align-items-center offset-md-1">
	  						<form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" class="request-form ftco-animate bg-primary">
		          		        <h2>Register As Client</h2>
			    				{{ csrf_field() }}
			    				<div class="form-group">
			    					<label for="firstName" class="label">First Name*</label>
                                    <input type="text" id="firstname" name="firstname" value="{{ old('firstname') }}"  class="firstName form-control @error('fistname') is-invalid @enderror" placeholder="First Name" autocomplete="off">
                                    @error('firstname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
			    				</div>
			    				<div class="form-group">
			    					<label for="secondName" class="label">Second Name*</label>
                                    <input type="text" id="secondname" name="secondname" value="{{ old('secondname') }}" class="secondName form-control @error('secondname') is-invalid @enderror" placeholder="Second Name" autocomplete="off">
                                    @error('secondname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    
                                </div>
			    				<div class="d-flex">
			    					<div class="form-group mr-2">
                                        <label for="profilePic" class="label">Profile Picture</label>
                                        <div class="custom-file mb-3">
                                            <input type="file" id="image" class="custom-file-input @error('image') is-invalid @enderror" id="customFile" name="image">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group ml-2">
                                        <label for="" class="label">Gender</label>
                                        <select name="gender" id="gender" class="custom-select mb-3 @error('gender') is-invalid @enderror">
                                            <option value="">Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                        @error('gender')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
			    					<label for="email" class="label">Your Email*</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
			    				</div>
                                <div class="d-flex">
			    					<div class="form-group mr-2">
                                        <label for="password" class="label">Password*</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    <div class="form-group ml-2">
                                        <label for="confirmPassword" class="label">Confirm Password*</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        <input type="hidden" name="role" value="C">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="token" value={{csrf_token()}}/>
                                    <button type="submit" class="btn btn-secondary py-3 px-4">Register</button>
                                </div>
			    			</form>
                        </div>
	  				</div>
				</div>
            </div>
    	</div>
    </section>




    <section class="ftco-section ftco-no-pt bg-light ftco-animate" >
        <div class="container">
            <div class="row trending-jobs">
                <div class="col-md-10 d-flex offset-md-1 align-items-center ftco-animate">
                    <div class="services-wrap rounded-right w-100 Trending-jobs-services">
                        <h3 class="heading-section mb-4">Trending Jobs</h3>
                        <div class="row d-flex mb-4">
                            <div class="media">
                                <img src="images/person_1.jpg" class="mr-3 media-image" alt="Client Image">
                                <div class="media-body">
                                    <span>
                                        <span class="mt-1 media-header">
                                            Bryan Austin | 
                                        </span>
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i> location: Iganga | </span>
                                        <i class="fa fa-circle" aria-hidden="true"></i> Away |
                                        <i style="color:green" class="fa fa-circle" aria-hidden="true"></i> Active 
                                    </span>
                                    <a href="http://"><h5 class="mt-1 media-header">Job</h5></a>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                     scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                      vulputate at, tempus viverra turpis. Fusce condimentum nunc ac
                                       nisi vulputate fringilla. Donec lacinia congue felis in faucibus......
                                </div>
                            </div>
                            <hr>
                            <div class="media">
                                <img src="images/person_1.jpg" class="mr-3 media-image" alt="Client Image">
                                <div class="media-body">
                                    <span>
                                        <span class="mt-1 media-header">
                                            Bryan Austin | 
                                        </span>
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i> location: Iganga | </span>
                                        <i class="fa fa-circle" aria-hidden="true"></i> Away |
                                        <i style="color:green" class="fa fa-circle" aria-hidden="true"></i> Active 
                                    </span>
                                    <a href="http://"><h5 class="mt-1 media-header">Job</h5></a>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                     scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                      vulputate at, tempus viverra turpis. Fusce condimentum nunc ac
                                       nisi vulputate fringilla. Donec lacinia congue felis in faucibus......
                                </div>
                            </div>
                            <hr>
                            <div class="media">
                                <img src="images/person_1.jpg" class="mr-3 media-image" alt="Client Image">
                                <div class="media-body">
                                    <span>
                                        <span class="mt-1 media-header">
                                            Bryan Austin | 
                                        </span>
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i> location: Iganga | </span>
                                        <i class="fa fa-circle" aria-hidden="true"></i> Away |
                                        <i style="color:green" class="fa fa-circle" aria-hidden="true"></i> Active 
                                    </span>
                                    <a href="http://"><h5 class="mt-1 media-header">Job</h5></a>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                     scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                      vulputate at, tempus viverra turpis. Fusce condimentum nunc ac
                                       nisi vulputate fringilla. Donec lacinia congue felis in faucibus......
                                </div>
                            </div>
                            <hr>
                            <div class="media">
                                <img src="images/person_1.jpg" class="mr-3 media-image" alt="Client Image">
                                <div class="media-body">
                                    <span>
                                        <span class="mt-1 media-header">
                                            Bryan Austin | 
                                        </span>
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i> location: Iganga | </span>
                                        <i class="fa fa-circle" aria-hidden="true"></i> Away |
                                        <i style="color:green" class="fa fa-circle" aria-hidden="true"></i> Active 
                                    </span>
                                    <a href="http://"><h5 class="mt-1 media-header">Job</h5></a>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                     scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                      vulputate at, tempus viverra turpis. Fusce condimentum nunc ac
                                       nisi vulputate fringilla. Donec lacinia congue felis in faucibus......
                                </div>
                            </div>
                            <hr>
                            <div class="media">
                                <img src="images/person_1.jpg" class="mr-3 media-image" alt="Client Image">
                                <div class="media-body">
                                    <span>
                                        <span class="mt-1 media-header">
                                            Bryan Austin | 
                                        </span>
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i> location: Iganga | </span>
                                        <i class="fa fa-circle" aria-hidden="true"></i> Away |
                                        <i style="color:green" class="fa fa-circle" aria-hidden="true"></i> Active 
                                    </span>
                                    <a href="http://"><h5 class="mt-1 media-header">Job</h5></a>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus 
                                    scelerisque ante sollicitudin. Cras purus odio, vestibulum in 
                                    vulputate at, tempus viverra turpis. Fusce condimentum nunc ac 
                                    nisi vulputate fringilla. Donec lacinia congue felis in faucibus......
                                </div>
                            </div>
                            <hr>
                            <nav aria-label="...">
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                    <span class="page-link">Previous</span>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active" aria-current="page">
                                    <span class="page-link">
                                        2
                                        <span class="sr-only">(current)</span>
                                    </span>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <h5 >Happy Clients</h5>
                </div>
            </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="carousel-car owl-carousel">
    					<div class="item">
                            <div class="testimony-wrap rounded text-center py-4 pb-5">
                                <div class="user-img mb-2" style="background-image: url(images/person_1.jpg)">
                                </div>
                                <div class="text pt-4">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                                    live the blind texts.</p>
                                    <p class="name">Roger Scott</p>
                                    <span class="position">Marketing Manager</span>
                                </div>
                            </div>
    					</div>
                        <div class="item">
                            <div class="testimony-wrap rounded text-center py-4 pb-5">
                                <div class="user-img mb-2" style="background-image: url(images/person_1.jpg)">
                                </div>
                                <div class="text pt-4">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                                    live the blind texts.</p>
                                    <p class="name">Roger Scott</p>
                                    <span class="position">Marketing Manager</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap rounded text-center py-4 pb-5">
                                <div class="user-img mb-2" style="background-image: url(images/person_1.jpg)">
                                </div>
                                <div class="text pt-4">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Roger Scott</p>
                                    <span class="position">Marketing Manager</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap rounded text-center py-4 pb-5">
                                <div class="user-img mb-2" style="background-image: url(images/person_1.jpg)">
                                </div>
                                <div class="text pt-4">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                                    live the blind texts.</p>
                                    <p class="name">Roger Scott</p>
                                    <span class="position">Marketing Manager</span>
                                </div>
                            </div>
                        </div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <!-- Modal Login -->
<div class="modal fade bd-example-modal-sm" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Login please</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form>
            <div class="modal-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-outline-primary">Login</button>
            </div>
        </form>
    </div>
  </div>
</div>
<script>
    $(document).ready(function(){
        $('.login').on('click', function(e){
            e.preventDefault();
            $('#loginmodal').modal('show');
        });
    });
</script>
    @endsection
